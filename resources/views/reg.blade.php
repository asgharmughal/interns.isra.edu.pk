<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Registration Portal</title>
    <!-- Bootstrap core CSS -->

    <link href="css/app.css" rel="stylesheet">
    <link href="css/sweetalert2.min.css" rel="stylesheet">
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
    <link href="css/form-validation.css" rel="stylesheet">
    <!---Addmore script--->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    <script>
        $(document).ready(function() {
            $("body").on("click", ".add-more", function() {

                var html = $(".after-add-more").first().clone();



                //  $(html).find(".change").prepend("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>" );

                $(html).find(".change").html(
                    "<label for=''>&nbsp;</label><br/>  <a class='btn btn-danger remove' style='color:white;'> - </a> "
                );


                $(".after-add-more").last().after(html);



            });

            $("body").on("click", ".edu-add", function() {

                var html = $(".edu-add-more").first().clone();



                //  $(html).find(".change").prepend("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>" );
                $(html).find("label[for='edu-add']").html(
                    '<label for="edu-add">Remove choice</label>'
                );
                $(html).find(".change").html(
                    " <a class='btn btn-danger remove' style='color:white;'> - </a> "
                );


                $(".edu-add-more").last().after(html);



            });



            $("body").on("click", ".remove", function() {
                $(this).parents(".after-add-more").remove();
            });
            $("body").on("click", ".remove", function() {
                $(this).parents(".edu-add-more").remove();
            });
        });
    </script>



</head>
<script>
    if (location.protocol !== 'https:') {
        location.replace(`https:${location.href.substring(location.protocol.length)}`);
    }
</script>
@php
    //$job= \App\Job::where('drive',$id)->first();
    //$teaching = true;
    //$grades = false;
    //dd($job);
    ////if($job->drive_for=="Teaching Staff"){
    //$teaching = false;
    //}
    //if($job->type=="withgrade"){
    //$grades = true;
    //}
@endphp
<script></script>

<body class="bg-light">
    <div class="page-header header-filter clear-filter" data-parallax="true" style="padding-bottom: 200px;">
        <div class="container">
            <div class="row h-100">
                <div class="text-center col-md-12 ml-auto mr-auto">
                    <br>
                    <h2 style="text-shadow: 2px 2px 3px #FFF;">{{ env('APP_NAME') }}</h2>
                    <p class="lead" style="text-shadow: 2px 2px #FFF;">Registration Form</p>
                    <div class="py-5 text-center" style="margin-top:-50px">
                        <div class="alert alert-success text-left" role="alert" style="opacity: 0.7;">
                            <h4 class="alert-heading" style="color: #000000;">Instructions</h4>
                            <hr />
                            <ol style="color: #000000;">
                                <li> Please complete all fields.</li>
                                <li>Upload Picture on this Registration Form</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card"
            style="margin-top:-250px;border-radius: 6px;
    box-shadow: 0 16px 24px 2px rgba(0,0,0,.14),0 6px 30px 5px rgba(0,0,0,.12),0 8px 10px -5px rgba(0,0,0,.2);">
            <div class="card-body">
                <form class="needs-validation" action="registeration" method="POST" enctype="multipart/form-data"
                    novalidate id="sectionForm" onsubmit="return checkForm(this);" autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 order-md-2 mb-4" style="displaye:none">

                            <h4 class="d-flex justify-content-between align-items-center mb-3" style="margin-top:10px">
                                <span>Contact Information</span>
                            </h4>
                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <label for="emailAddress">Email Address</label>
                                        <input type="email" class="form-control" id="emailAddress" placeholder=""
                                            value="" name="emailaddress" required>
                                        <div class="invalid-feedback">
                                            Valid e-mail address is required.
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between bg-light">
                                    <div>
                                        <label for="cell">Mobile Number</label>
                                        <input type="text" class="form-control" id="cell" placeholder=""
                                            pattern="^(?:(([+]|00)92)|0)((3[0-9][0-9]))(\d{7})$" name="cell"
                                            required>
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
                                        <input type="file" class="form-control-file" id="photo" name="photo"
                                            accept="image/*" required>
                                        <div class="invalid-feedback">
                                            Photo is required.
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-8 order-md-1">
                            <h4 class="mb-3">Personal Information</h4>
                            <div class="row">

                                <div class="col-md-6 mb-3">
                                    <label for="fullName">Applicant Name</label>
                                    <input type="text" class="form-control" id="fullName" name="fullname"
                                        pattern="[a-zA-Z]*( [a-zA-Z]*)*" placeholder="" value="" required>
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
                                    <label for="fathername">Father&apos;s Name</label>
                                    <input type="text" class="form-control" id="fathername" name="fathername"
                                        required>
                                    <div class="invalid-feedback">
                                        Father Name is required.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="pphone">Parent Contact Number </label>
                                    <input type="text" class="form-control" id="pphone" placeholder=""
                                        pattern="^(?:(([+]|00)92)|0)((3[0-9][0-9]))(\d{7})$" name="pphone" required>
                                    <div class="invalid-feedback">
                                        Valid mobile number is required.
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cnic">CNIC</label>
                                    <input type="text" class="form-control" id="cnic"
                                        pattern="^[0-9+]{5}-[0-9+]{7}-[0-9]{1}$" name="cnic"
                                        placeholder="12345-1234567-1" value="" required>
                                    <div class="invalid-feedback">
                                        Valid CNIC is required.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="city">City</label>
                                    @include('partials.cities')
                                    <div class="invalid-feedback">
                                        Please provide a valid City.
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="program">Current Enrollment (Degree Program)</label>
                                    <input type="text" class="form-control" id="program" name="program"
                                        required>
                                    <div class="invalid-feedback">
                                        Degree Program Name is required.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="institute">Institute</label>
                                    <input type="text" class="form-control" id="institute" name="institute"
                                        required>
                                    <div class="invalid-feedback">
                                        Institute Name is required.
                                    </div>
                                </div>
                                <hr class="mb-4">

                                <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <footer class="my-5 pt-5 text-muted text-center text-small">{!! setting('portal.footer') !!}
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="js/app.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/ifs-form-validation.js"></script>
    <script>
        $("#employment").change(function() {
            if ($(this).val() == "Employed") {
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
            console.log("employment changed to " + $(this).val());



        });
    </script>


</body>

</html>
