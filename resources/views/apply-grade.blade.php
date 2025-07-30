<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>Job Portal :: Isra Foundation Schools</title>
  <!-- Bootstrap core CSS -->

  <link href="/css/app.css" rel="stylesheet">
  <link href="/css/sweetalert2.min.css" rel="stylesheet">
  <meta name="theme-color" content="#563d7c">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="/css/form-validation.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
</script>
  

<script>
$(document).ready(function() {
    $("body").on("click",".add-more",function(){ 
	
        var html = $(".after-add-more").first().clone();
		
		
      
        //  $(html).find(".change").prepend("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>" );
      
          $(html).find(".change").html("<label for=''>&nbsp;</label><br/>  <a class='btn btn-danger remove' style='color:white;'> - </a> ");
      
      
        $(".after-add-more").last().after(html);
      
     
       
    });
	
	  $("body").on("click",".edu-add",function(){ 
	
        var html = $(".edu-add-more").first().clone();
		
		
      
        //  $(html).find(".change").prepend("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>" );
      
          $(html).find(".change").html("<label for=''>&nbsp;</label><br/>  <a class='btn btn-danger remove' style='color:white;'> - </a> ");
      
      
        $(".edu-add-more").last().after(html);
      
     
       
    });
	
	

    $("body").on("click",".remove",function(){ 
        $(this).parents(".after-add-more").remove();
    });
	 $("body").on("click",".remove",function(){ 
        $(this).parents(".edu-add-more").remove();
    });
});</script>
 
 

</head>
<script>
  if (location.protocol !== 'https:') {
    location.replace(`https:${location.href.substring(location.protocol.length)}`);
  }

  
</script>

<body class="bg-light">
  <div class="page-header header-filter clear-filter" data-parallax="true" style="padding-bottom: 200px;">
    <div class="container">
      <div class="row h-100">
        <div class="text-center col-md-8 ml-auto mr-auto">
          <img class="d-block mx-auto mb-4" src="/img/ifs-logo2.png" alt="" width="96" height="96"
            style="margin-top:50px">
          <h2 style="text-shadow: 2px 2px 3px #FFF;">Isra Foundation Schools</h2>
          <p class="lead" style="text-shadow: 2px 2px 1px #FFF;">Job Application Form</p>
          <div class="py-5 text-center" style="margin-top:-50px">
            <div class="alert alert-success text-left" role="alert" style="opacity: 0.7; display:none">
              <h4 class="alert-heading" style="color: #000000;">Instructions</h4>
              <hr />
              <ol style="color: #000000;">
                <li> Please complete all fields.</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="card" style="margin-top:-250px;border-radius: 6px;
    box-shadow: 0 16px 24px 2px rgba(0,0,0,.14),0 6px 30px 5px rgba(0,0,0,.12),0 8px 10px -5px rgba(0,0,0,.2);">
      <div class="card-body">
        <form class="needs-validation" action="/apply" method="POST" enctype="multipart/form-data" novalidate
          id="sectionForm" onsubmit="return checkForm(this);">
          @csrf
          <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span>Applied For </span>
              </h4>

              <ul class="list-group mb-3">

                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <label for="drive">Recruitment Drive</label>
                    <input type="text" class="from-control" value="{{$id}}" id="drive" name="drive" readonly>
                    <div class="invalid-feedback">
                      Valid Category is required.
                    </div>
                  </div>
                </li>

                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <label for="category">Applied for Category</label>
                    <select class="custom-select w-100" id="category" name="category" required>
                      <option value="">Choose...</option>
                      <option value="Full-time Faculty"> Full-time Faculty</option>
                      <option value="Visiting Faculty"> Visiting Faculty </option>
                    </select>
                    <div class="invalid-feedback">
                      Valid Category is required.
                    </div>
                  </div>
                </li>
                <li class="list-group-item d-flex justify-content-between bg-light">
                  <div>
                    <label for="position"> Applied for Position</label>
                    <select class="custom-select w-100" id="position" name="position" required>
                      <option value="">Choose...</option>
                      <option value="Principal"> Principal </option>
                      <option value="Section Head"> Section Head </option>
                      <option value="Coordinator"> Coordinator </option>
                      <option value="Senior Teacher"> Senior Teacher </option>
                      <option value="Teacher"> Teacher </option>
                    </select>
                    <div class="invalid-feedback">
                      Valid Position is required.
                    </div>
                  </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <label for="expsalary">Expected Salary</label>
                    <input type="number" class="form-control" id="expsalary" name="expsalary" required min="5000">
                    <div class="invalid-feedback">
                      Valid Salary in numbers is required.
                    </div>
                  </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div class="checkbox-group subject">
                    <label for="expsalary">Preferred Subject</label>

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" name="subject[]" value="English" id="english">
                      <label class="custom-control-label" for="english">English</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" name="subject[]" value="Math" id="math">
                      <label class="custom-control-label" for="math">Mathematics</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" name="subject[]" value="Islamiyat"
                        id="islamiyat">
                      <label class="custom-control-label" for="islamiyat">Islamiyat</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="subject[]" value="urdu" id="urdu" class="custom-control-input">
                      <label class="custom-control-label" for="urdu">Urdu</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="subject[]" value="biology" id="biology" class="custom-control-input">
                      <label class="custom-control-label" for="biology">Biology</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="subject[]" value="chemistry" id="chemistry"
                        class="custom-control-input">
                      <label class="custom-control-label" for="chemistry">Chemistry</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="subject[]" value="physics" id="physics" class="custom-control-input">
                      <label class="custom-control-label" for="physics">Physics</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="subject[]" value="computerscience" id="computerscience"
                        class="custom-control-input">
                      <label class="custom-control-label" for="computerscience">Computer Science</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="subject[]" value="accounting" id="accounting"
                        class="custom-control-input">
                      <label class="custom-control-label" for="accounting">Principles of Accounting</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="subject[]" value="economics" id="economics"
                        class="custom-control-input">
                      <label class="custom-control-label" for="economics">Economics</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="subject[]" value="business" id="business"
                        class="custom-control-input">
                      <label class="custom-control-label" for="business">Business Studies</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="subject[]" value="pakstudy" id="pakstudy"
                        class="custom-control-input">
                      <label class="custom-control-label" for="pakstudy">Pakistan Studies</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" name="subject[]" value="NA" id="nasubject">
                      <label class="custom-control-label" for="nasubject">Not Applicable</label>
                    </div>


                  </div>
                  <div class="invalid-feedback">
                    Valid choice is required.
                  </div>
                </li>
              </ul>
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span>Contact Information</span>
              </h4>
              <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <label for="emailAddress">Email Address</label>
                    <input type="email" class="form-control" id="emailAddress" placeholder="" value=""
                      name="emailaddress" required>
                    <div class="invalid-feedback">
                      Valid e-mail address is required.
                    </div><br />
                    <label for="emailAddress">Confirmation Email Address</label>
                    <input type="email" class="form-control" id="retypeemail" placeholder="" value="" name="retypeemail"
                      required onpaste="return false;">
                    <div class="invalid-feedback">
                      Valid e-mail address is required.
                    </div>
                  </div>
                </li>
                <li class="list-group-item d-flex justify-content-between bg-light">
                  <div>
                    <label for="cell">Mobile Number</label>
                    <input type="text" class="form-control" id="cell" placeholder=""
                      pattern="^(?:(([+]|00)92)|0)((3[0-9][0-9]))(\d{7})$" name="cell" required>
                    <div class="invalid-feedback">
                      Valid mobile number is required.
                    </div>
                  </div>
                </li>
              </ul>
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span>File Upload </span>
              </h4>
              <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <label for="photo">Photo</label>
                    <input type="file" class="form-control-file" id="photo" name="photo" accept="image/*" required>
                    <div class="invalid-feedback">
                      Photo is required.
                    </div>
                  </div>
                </li>
                <li class="list-group-item d-flex justify-content-between bg-light">
                  <div>
                    <label for="coverletter">Cover Letter</label>
                    <input type="file" class="form-control-file" id="coverletter" name="coverletter"
                      accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                      required>
                    <div class="invalid-feedback">
                      Cover letter is required.
                    </div>
                  </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <label for="resume">Resume / CV</label>
                    <input type="file" class="form-control-file" id="resume" name="resume"
                      accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                      required>
                    <div class="invalid-feedback">
                      Resume is required.
                    </div>
                  </div>
                </li>
                <li class="list-group-item d-flex justify-content-between bg-light">
                  <div>
                    <label for="documents">CNIC / Passport</label>
                    <input type="file" class="form-control-file" id="documents" name="documents[]" accept="image/*" multiple
                      required>
                    <div class="invalid-feedback">
                      Document Images are required.
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="col-md-8 order-md-1">
              <h4 class="mb-3">Personal Information</h4>
              <div class="row">

                <div class="col-md-6 mb-3">
                  <label for="fullName">Full Name</label>
                  <input type="text" class="form-control" id="fullName" name="fullname" pattern="[a-zA-Z]*( [a-zA-Z]*)*"
                    placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Valid full name is required.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="gender">Gender</label>
                  <select class="custom-select d-block w-100" id="gender" name="gender" required>
                    <option value="">Choose...</option>
                    <option value="Male"> Male </option>
                    <option value="Female"> Female </option>
                  </select>
                  <div class="invalid-feedback">
                    Valid gender is required.
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="fathername">Father's Name</label>
                  <input type="text" class="form-control" id="fathername" name="fathername" required>
                  <div class="invalid-feedback">
                    Father Name is required.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="mstatus">Marital Status</label>
                  <select class="custom-select d-block w-100" id="mstatus" name="mstatus" required>
                    <option value="">Choose...</option>
                    <option value="Single"> Single </option>
                    <option value="Married"> Married </option>
                    <option value="Divorced"> Divorced </option>
                    <option value="Widowed"> Widowed </option>
                  </select>
                  <div class="invalid-feedback">
                    Valid Marital Status is required.
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="dob">Date of Birth</label>
                  <input type="date" class="form-control" id="dob" name="dob" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Date of birth is required.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="cnic">CNIC/Passport No.</label>
                  <input type="text" class="form-control" id="cnic" pattern="^[0-9+]{5}-[0-9+]{7}-[0-9]{1}$" name="cnic"
                    placeholder="12345-1234567-1" value="" required>
                  <div class="invalid-feedback">
                    Valid CNIC is required.
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="nationality">Nationality</label>
                  @include('partials.nationalities')
                  <div class="invalid-feedback">
                    Valid Nationality is required.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="rphone">Residential Phone</label>
                  <input type="text" class="form-control" id="rphone" name="rphone" placeholder="" value="">
                  <div class="invalid-feedback">
                    Valid Phone number is required.
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="city">City</label>
                  @include('partials.cities')
                  <div class="invalid-feedback">
                    Please provide a valid City.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="country">Country</label>
                  @include('partials.countries')
                  <div class="invalid-feedback">
                    Country Name is required.
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="dabled">Differently Abled</label>
                  <select class="custom-select d-block w-100" id="dabled" name="dabled" required>
                    <option value="">Choose...</option>
                    <option value="yes">Yes</option>
                    <option value="no"> No </option>

                  </select>
                  <div class="invalid-feedback">
                    Valid Choice is required.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="specify">if 'yes' please specify</label>
                  <input type="text" class="form-control" id="specify" name="specify" pattern="[a-zA-Z]*( [a-zA-Z]*)*"
                    placeholder="" value="NA" required>
                </div>
              </div>
              <div class="mb-3">
                <label for="address">Residential Address</label>
                <textarea class="form-control" rows="5" id="address" name="address" required></textarea>
                <div class="invalid-feedback">
                  Please enter your address.
                </div>
              </div>
              <hr class="mb-4">
              <h4 class=" mb-3">Qualification Details</h4>
              <div class="edu-add-more">
                <div class="row">
                  <div class="col-md-4  mb-3">
                    <label for="qualification">Choose Qualification</label>
                    @include('partials.degreeprogram')
                    <div class="invalid-feedback">
                      Valid qualification is required.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="degree">Discipline</label>
                    @include('partials.disciplineofstudy')
                    <div class="invalid-feedback">
                      Valid Name is required.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="specialization">Specialization</label>
                    <input type="text" class="form-control" id="specialization" name="specialization[]">
                    <div class="invalid-feedback">
                      Specialization is required.
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="university">Name of University / Institute</label>
                    @include('partials.university')
                    <div class="invalid-feedback">
                      Institute Name is required.
                    </div>
                  </div>
                  <div class="col-md-5 mb-3">
                    <label for="passingyear">Passing Year</label>
                    <input type="month" class="form-control" id="passingyear" name="passingyear[]" required>
                    <div class="invalid-feedback">
                      Passing Year is required.
                    </div>
                  </div>
                  <div class="col-md-1 mb-3">
                    <div class="form-group change">
                      <label for="">&nbsp;</label><br />
                      <button type="button" class="btn btn-primary edu-add">+</button>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="mb-4">
              <h4 class="mb-3">Current Employment</h4>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="coname">Organization Name</label>
                  @include('partials.organization')
                  <div class="invalid-feedback">
                    Valid Organization Name is required.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="cposition">Position</label>
                  <select class="custom-select w-100" id="cposition" name="cposition">
                    <option value="">Choose...</option>
                    <option value="Principal"> Principal </option>
                    <option value="Section Head"> Section Head </option>
                    <option value="Coordinator"> Coordinator </option>
                    <option value="Senior Teacher"> Senior Teacher </option>
                    <option value="Teacher"> Teacher </option>
                    <option value="other"> Other </option>
                  </select>
                  <div class="invalid-feedback">
                    Valid Position is required.
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="workingsince">Working since..</label>
                  <input type="month" class="form-control" id="workingsince" name="workingsince">
                  <div class="invalid-feedback">
                    Working Since field is required.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="cgs">Current Gross Salary</label>
                  <select class="custom-select w-100" id="cgs" name="cgs">
                    <option value="">Choose...</option>
                    <option value="less-than-ten"> Less than 10,000</option>
                    <option value="between-fifteen"> 10,000-15,000</option>
                    <option value="between-twenty"> 15,000-20,000 </option>
                    <option value="between-twentyfive"> 20,000-25,000 </option>
                    <option value="between-thirty"> 25,000-30,000 </option>
                    <option value="between-forty"> 30,000-40,000 </option>
                    <option value="between-fifty"> 40,000-50,000 </option>
                    <option value="between-sixty"> 50,000-60,000 </option>
                    <option value="between-seventy"> 60,000-70,000 </option>
                    <option value="between-eighty"> 70,000-80,000 </option>
                    <option value="between-lac"> 80,000-100,000 </option>
                    <option value="above-lac"> More then 100,000 </option>
                  </select>
                  <div class="invalid-feedback">
                    Current Gross Salary is required.
                  </div>
                </div>
              </div>


              <hr class="mb-4">
              <h4 class="mb-3">Employment History</h4>
              <div class="after-add-more">
                <div class="row">

                  <div class="col-md-6 mb-3">
                    <label for="honame">Organization Name</label>
                    @include('partials.organization2')
                    <div class="invalid-feedback">
                      Valid Organization Name is required.
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="hoposition">Position</label>

                    <select class="custom-select w-100" id="hoposition" name="hoposition[]">
                      <option value="">Choose...</option>
                      <option value="Principal"> Principal </option>
                      <option value="Section Head"> Section Head </option>
                      <option value="Coordinator"> Coordinator </option>
                      <option value="Senior Teacher"> Senior Teacher </option>
                      <option value="Teacher"> Teacher </option>
                      <option value="other"> Other </option>
                    </select>
                    <div class="invalid-feedback">
                      Position is required.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="wfrom">Worked From</label>
                    <input type="month" class="form-control" id="wfrom" name="wfrom[]">
                    <div class="invalid-feedback">
                      Valid date is required.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="wto">Worked to</label>
                    <input type="month" class="form-control" id="wto" name="wto[]">
                    <div class="invalid-feedback">
                      Worked to is required.
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="lds">Last Drawn Salary</label>
                    <select class="custom-select w-100" id="lds" name="lds[]">
                      <option value="">Choose...</option>
                      <option value="less-than-ten"> Less than 10,000</option>
                    <option value="between-fifteen"> 10,000-15,000</option>
                    <option value="between-twenty"> 15,000-20,000 </option>
                    <option value="between-twentyfive"> 20,000-25,000 </option>
                    <option value="between-thirty"> 25,000-30,000 </option>
                    <option value="between-forty"> 30,000-40,000 </option>
                    <option value="between-fifty"> 40,000-50,000 </option>
                    <option value="between-sixty"> 50,000-60,000 </option>
                    <option value="between-seventy"> 60,000-70,000 </option>
                    <option value="between-eighty"> 70,000-80,000 </option>
                    <option value="between-lac"> 80,000-100,000 </option>
                    <option value="above-lac"> More then 100,000 </option>
                    </select>

                    <div class="invalid-feedback">
                      Last drawn salary required.
                    </div>
                  </div>
                  <div class="col-md-1 mb-3">
                    <div class="form-group change">
                      <label for="">&nbsp;</label><br />
                      <button type="button" class="btn  btn-primary add-more">+</button>
                    </div>
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="ftexp">Total Full-time Teaching Experience</label>
                  <select class="custom-select d-block w-100" id="ftexp" name="ftexp">
                    <option value="">Choose...</option>
                    <option value="No Experience"> No Experience</option>
                    <option value="Less than 1 year"> Less than 1 year </option>
                    <option value="1-2 years"> 1-2 years </option>
                    <option value="3-5 years"> 3-5 years </option>
                    <option value="5-10 years"> 5-10 years </option>
                    <option value="More than 10 years"> More than 10 years </option>
                  </select>
                  <div class="invalid-feedback">
                    Valid choice is required.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="vexp">Total Part-time Teaching Experience</label>
                  <select class="custom-select d-block w-100" id="vexp" name="vexp">
                    <option value="">Choose...</option>
                    <option value="No Experience"> No Experience</option>
                    <option value="Less than 1 year"> Less than 1 year </option>
                    <option value="1-2 years"> 1-2 years </option>
                    <option value="3-5 years"> 3-5 years </option>
                    <option value="5-10 years"> 5-10 years </option>
                    <option value="More than 10 years"> More than 10 years </option>
                  </select>
                  <div class="invalid-feedback">
                    Valid choice is required.
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="ntexp">Total Non-Teaching Experience</label><select class="custom-select d-block w-100"
                    id="ntexp" name="ntexp">
                    <option value="">Choose...</option>
                    <option value="No Experience"> No Experience</option>
                    <option value="Less than 1 year"> Less than 1 year </option>
                    <option value="1-2 years"> 1-2 years </option>
                    <option value="3-5 years"> 3-5 years </option>
                    <option value="5-10 years"> 5-10 years </option>
                    <option value="More than 10 years"> More than 10 years </option>
                  </select>
                  <div class="invalid-feedback">
                    Valid choice is required.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="employment">Employment Status</label>
                  <select class="custom-select d-block w-100" id="employment" name="employment" required>
                    <option value="">Choose...</option>
                    <option value="Employed"> Employed </option>
                    <option value="Unemployed"> Unemployed </option>
                  </select>
                  <div class="invalid-feedback">
                    Valid choice is required.
                  </div>
                </div>
              </div>
              <hr class="mb-4">
              <div class="mb-3">
                <h5 class="mb-3">Career Achievements</h5>
                <textarea class="form-control" rows="5" id="achievement" name="achievements"></textarea>
                <div class="invalid-feedback">
                  Please enter your achievements.
                </div>
              </div>
              <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <footer class="my-5 pt-5 text-muted text-center text-small">{!!setting('portal.footer')!!}
    </footer>
  </div>
  <script src="/js/app.js"></script>
  <script src="/js/sweetalert2.all.min.js"></script>
  <script src="/js/form-validation2.js"></script>
  <script>
        $("#employment").change(function(){
          if($(this).val()=="Employed"){
            $("#honame").attr("required", "");
            $("#cposition").attr("required", "");
            $("#workingsince").attr("required", "");
            $("#cgs").attr("required", "");
          } else {
            $("#honame").removeAttr("required");
            $("#cposition").removeAttr("required");
            $("#workingsince").removeAttr("required");
            $("#cgs").removeAttr("required");
          }
            console.log("employment changed to " + $(this).val() );


 
        });
    </script>
</body>

</html>