<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Applicant;
use App\Education;
use App\Employment;


class RegistrationController extends Controller
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
        return view('apply');
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

        $applicant->dob = \Carbon\Carbon::parse($request['dob']);
        $applicant->cnic = $request['cnic'];

        $applicant->pphone = $request['pphone'];
        $applicant->address = $request['address'];
        
        $applicant->mdcat = $request['mdcat'];
        $applicant->mdcatroll = $request['mdcatroll'];
        $applicant->mdcatpyear = $request['mdcatpyear'];
        
        $applicant->drive = $request['drive'];
        $applicant->email = $request['emailaddress'];      
        $applicant->contact = $request['cell'];
        $applicant->city = $request['city'];
        $applicant->country = $request["country"];
        $applicant->drive = $request["drive"];
        
        
        
        $applicant->mtotal = $request["mtotal"];
        $applicant->mobtained = $request["mobtained"];
        $applicant->iobtained = $request["iobtained"];
        $applicant->itotal = $request["itotal"];
        
        $applicant->domicile = $request["domicile"];
        
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
        if (isset($request['fees'])) {
            $applicant->fees = Storage::disk(config('voyager.storage.disk'))->putFile('fees', $request->file('fees'));
        }
        
        $applicant->save();
        
        $number = count($request->choice);
        if($number > 0)
        {
	        for($i=0; $i<$number; $i++)
	        {
                    $appliedprograms = new \App\Appliedprograms;
                    $appliedprograms->choice = $request->choice[$i];

                    $appliedprograms->appid = $applicant->id;
                    $appliedprograms->save();
	        }
        }
        
        if ($request->has('honame')) {
            $number2 = count($request->honame);
            Log::debug($request["honame"]);
        } else {
            $number2 = 0;
        }
        
        
        return view('thank');
    }
}