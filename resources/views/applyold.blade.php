<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>Job Portal :: Isra Foundation Schools</title>
  <!-- Bootstrap core CSS -->
  <link href="/css/app.css" rel="stylesheet">
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
</head>
<script>
  if (location.protocol !== 'https:') {
    location.replace(`https:${location.href.substring(location.protocol.length)}`);
  }
</script>

<body class="bg-light"
  style="background: url(&quot;https://isra.edu.pk/survey/readiness/img/bg.png&quot;); background-repeat: repeat">
  <div class="page-header header-filter clear-filter" data-parallax="true" style="background-image: url(&quot;https://isra.edu.pk/survey/readiness/img/education.jpg&quot;); transform: translate3d(0px, 0px, 0px); width:100%;   background-repeat: no-repeat;
  background-size: cover; padding-bottom: 200px;">
    <div class="container">
      <div class="row h-100">
        <div class="text-center col-md-8 ml-auto mr-auto">
          <img class="d-block mx-auto mb-4" src="/img/ifs-logo2.png" alt="" width="72" height="72"
            style="margin-top:50px">
          <h2 style="text-shadow: 2px 2px 3px #FFF;">Isra Foundation Schools</h2>
          <p class="lead" style="text-shadow: 2px 2px 1px #FFF;">Faculty Application Form</p>
          <div class="py-5 text-center" style="margin-top:-50px">
            <div class="alert alert-success text-left" role="alert" style="opacity: 0.7;">
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
        <form class="needs-validation" action="/apply" method="POST" novalidate>
          @csrf
          <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
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
                    </div>
                  </div>
                </li>
                <li class="list-group-item d-flex justify-content-between bg-light">
                  <div>
                    <label for="cell">Mobile Number</label>
                    <input type="text" class="form-control" id="cell" placeholder=""
                      pattern="^(?:(([+]|00)92)|0)((3[0-6][0-9]))(\d{7})$" name="cell" required>
                    <div class="invalid-feedback">
                      Valid mobile number is required.
                    </div>
                  </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" name="city" required>
                    </select>
                    <div class="invalid-feedback">
                      Please provide a valid City.
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
                  <label for="dob">Date of Birth</label>
                  <input type="date" class="form-control" id="dob" name="dob" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Date of birth is required.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="cnic">CNIC</label>
                  <input type="text" class="form-control" id="cnic" pattern="^[0-9+]{5}-[0-9+]{7}-[0-9]{1}$" name="cnic"
                    placeholder="12345-1234567-1" value="" required>
                  <div class="invalid-feedback">
                    Valid CNIC is required.
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4 mb-3">
                  <label for="position">Position of Interest</label>
                  <select class="custom-select d-block w-100" id="position" name="position" required>
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
                <div class="col-md-4 mb-3">
                  <label for="type">Employment Type</label>
                  <select class="custom-select d-block w-100" id="type" name="type" required>
                    <option value="">Choose...</option>
                    <option value="Fulltime"> Fulltime </option>
                    <option value="Part time"> Part time </option>
                  </select>
                  <div class="invalid-feedback">
                    Employment Type is required.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="exp">Experience</label>
                  <select class="custom-select d-block w-100" id="exp" name="exp" required>
                    <option value="">Choose...</option>
                    <option value="No Experience"> No Experience </option>
                    <option value="Less than 1 year"> Less than 1 year </option>
                    <option value="1 - 2 year"> 1 - 2 year </option>
                    <option value="3 - 5 years"> 3 - 5 years </option>
                    <option value="5+ years"> 5+ years </option>
                  </select>
                  <div class="invalid-feedback">
                    Experience is required.
                  </div>
                </div>
              </div>

              <hr class="mb-4">

              <h4 class="mb-3">Teaching Interest</h4>

              <div class="d-block my-3">
                <label>Grade</label>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="grade[]" value="Preschool" id="preschool">
                  <label class="custom-control-label" for="preschool">Preschool</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="grade[]" value="Elementary" id="elementary">
                  <label class="custom-control-label" for="elementary">Elementary</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="grade[]" value="Middle" id="middle">
                  <label class="custom-control-label" for="middle">Middle</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="grade[]" value="O Levels" id="olevel">
                  <label class="custom-control-label" for="olevels">O Levels</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="grade[]" value="A Levels" id="alevels">
                  <label class="custom-control-label" for="alevels">A Levels</label>
                </div>
              </div>
              <div class="d-block my-3">
                <label>Subjects</label>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="subject[]" value="English" id="english">
                  <label class="custom-control-label" for="english">English</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="subject[]" value="Math" id="math">
                  <label class="custom-control-label" for="math">Math</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="subject[]" value="Urdu" id="Urdu">
                  <label class="custom-control-label" for="urdu">Urdu</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="subject[]" value="Islamiyat" id="islamiyat">
                  <label class="custom-control-label" for="islamiyat">Islamiyat</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="subject[]" value="Social Studies" id="ss">
                  <label class="custom-control-label" for="ss">Social Studies</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="subject[]" value="Science" id="sci">
                  <label class="custom-control-label" for="sci">Science</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="subject[]" value="Arts" id="art">
                  <label class="custom-control-label" for="art">Arts</label>
                </div>
              </div>
              <div class="d-block my-3">
                <label>If part time, then select available days</label>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="day[]" value="Monday" id="mon">
                  <label class="custom-control-label" for="mon">Monday</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="day[]" value="Tuesday" id="tue">
                  <label class="custom-control-label" for="tue">Tuesday</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="day[]" value="Wednesday" id="wed">
                  <label class="custom-control-label" for="wed">Wednesday</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="day[]" value="Thursday" id="thu">
                  <label class="custom-control-label" for="thu">Thursday</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="day[]" value="Friday" id="fri">
                  <label class="custom-control-label" for="fri">Friday</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="day[]" value="Saturday" id="sat">
                  <label class="custom-control-label" for="sat">Saturday</label>
                </div>
              </div>
              <div class="mb-3">
                <label for="remarks">If part-time, please mention your availability timings</label>
                <textarea class="form-control" rows="5" id="remarks" name="remarks" required></textarea>
                <div class="invalid-feedback">
                  Please enter your timings.
                </div>
              </div>
              <hr class="mb-4">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>

            </div>
          </div>
        </form>
      </div>

    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2020 Isra Foundation Schools | All Rights Reserved.</p>
    </footer>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="/js/vendor/jquery.slim.min.js"><\/script>')
  </script>
  <script src="/js/app.js"></script>
  <script src="/js/form-validation.js"></script>
</body>

</html>