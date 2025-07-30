<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Applicant;
use App\Education;
use App\Employment;


class ApplicantController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('apply');
    }
    
    public function viewForm(Request $request, $id){
        $job = \App\Job::where('drive',$id)->firstOrFail();
        /*
        if($job->type=='withgrade'){
            return view("apply-grade", compact('id'));
        } else {
            return view("apply", compact('id'));
        }*/
        return view("apply", compact('id'));
    }

    public function addApplicant(Request $request)
    {
        $applicant = new \App\Applicant;
        $applicant->prefix = $request['prefix'];
        $applicant->fullname = $request['fullname'];
        $applicant->gender = $request['gender'];
        $applicant->fathername = $request['fathername'];
        $applicant->marital = $request['mstatus'];
        $applicant->dob = \Carbon\Carbon::parse($request['dob']);
        $applicant->cnic = $request['cnic'];
        $applicant->nationality = $request['nationality'];
        $applicant->phone = $request['phone'];
        $applicant->disabled = $request['dabled'];
        $applicant->disability = $request['specify'];
        $applicant->address = $request['address'];
        //$applicant->qualification = $request['qualification'];
        //$applicant->degree = $request['degree'];
        //$applicant->specialization = $request['specialization'];
        //$applicant->university = $request['university'];
        //$applicant->passingyear = $request['passingyear'];
        $applicant->currentorg = $request['oname'];
        $applicant->currentpos = $request['cposition'];
        $applicant->currentworking = $request['workingsince'];
        $applicant->currentsalary = $request['cgs'];
        //$applicant->oldorg = $request['honame'];
        //$applicant->oldpos = $request['hoposition'];
        $applicant->fulltimeexp = $request['ftexp'];
        $applicant->visitingexp = $request['vexp'];
        $applicant->books = $request['books'];
        $applicant->journals = $request['journals'];
        $applicant->achievements = $request['achievements'];
        $applicant->position = $request['position'];
        $applicant->type = $request['category'];
        $applicant->email = $request['emailaddress'];      
        $applicant->contact = $request['cell'];
        $applicant->city = $request['city'];
        $applicant->ntexp = $request["ntexp"];
        $applicant->expsalary = $request["expsalary"];
        $applicant->employment = $request["employment"];
        $applicant->country = $request["country"];
        $applicant->drive = $request["drive"];
        if(isset($request["department"])){
        $applicant->department = $request["department"];
        }
        if ($request->has('subject')) {
            Log::debug($request["subject"]);
            $applicant->subjects=json_encode($request["subject"]);     
        }
        if ($request->has('grade')) {
            Log::debug($request["grade"]);
            $applicant->grades=json_encode($request["grade"]);     
        }
        if (isset($request['photo'])) {
            $applicant->photo = Storage::disk(config('voyager.storage.disk'))->putFile('photos', $request->file('photo'));
        }
        if (isset($request['coverletter'])) {
            $applicant->coverletter = Storage::disk(config('voyager.storage.disk'))->putFile('coverletters', $request->file('coverletter'));
        }
        if (isset($request['resume'])) {
            $applicant->resume = Storage::disk(config('voyager.storage.disk'))->putFile('resumes', $request->file('resume'));
        }
        if(isset($request['documents'])){
            
            $documents = $request['documents'];
            $files = Array();
            $counter = 0;
            foreach ($documents as $document) {
                $files[$counter++] = Storage::disk(config('voyager.storage.disk'))->putFile('documents', $document);
            }

            $applicant->docs = json_encode($files);
            
        }
        
        $applicant->save();
        $number = count($request->qualification);
        if($number > 0)
        {
	        for($i=0; $i<$number; $i++)
	        {
		        //if(trim($request->qualification[$i] != ''))
		        //{
                    $qualification = new \App\Education;
                    $qualification->title = $request->qualification[$i];
                    $qualification->discipline = $request->degree[$i];
                    $qualification->specialization = $request->specialization[$i];
                    $qualification->institute = $request->university[$i];
                    //$qualification->year = \Carbon\Carbon::parse($request->passingyear[$i]);
                    $qualification->year = $request->passingyear[$i];
                    $qualification->appid = $applicant->id;
                    $qualification->save();
		        //}
	        }
	        //echo "Data Inserted";
        }
        
        if ($request->has('honame')) {
            $number2 = count($request->honame);
            Log::debug($request["honame"]);
        } else {
            $number2 = 0;
        }
        if($number2 > 0)
        {
	        for($i=0; $i<$number2; $i++)
	        {
		        //if(trim($request->honame[$i] != ''))
		        //{
			              $employment = new \App\Employment;
                    $employment->organization = $request->honame[$i];
                    $employment->position = $request->hoposition[$i];
                    //$employment->wfrom = \Carbon\Carbon::parse($request->wfrom[$i]);
                    //$employment->wto = \Carbon\Carbon::parse($request->wto[$i]);
                    $employment->wfrom = $request->wfrom[$i];
                    $employment->wto = $request->wto[$i];
                    $employment->salary = $request->lds[$i];
                    $employment->appid = $applicant->id;
                    $employment->save();
		        //}
	        }
	        //echo "Data Inserted";
        }
        
        return view('thank');
    }
}