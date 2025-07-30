<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>Al Biruni Institute :: Registration Portal</title>
  <!-- Bootstrap core CSS -->
  <link href="css/app.css" rel="stylesheet">
  <meta name="theme-color" content="#563d7c">


  <style>
    /* encode-sans-regular - latin */

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
</head>
<script>
  if (location.protocol !== 'https:') {
        location.replace(`https:${location.href.substring(location.protocol.length)}`);
    }
</script>

<body class="bg-light">
  <div class="page-header header-filter clear-filter" data-parallax="true" style="padding-bottom: 600px;">
    <div class="container">
      <div class="row h-100">
        <div class="text-center col-md-8 ml-auto mr-auto">
          <br>
          <h1>Al Biruni Institute</h1>
          <p class="lead subheading">Registration Form</p>
          <div class="py-5 text-center">
            <div class="alert alert-success text-left" role="alert">
              <h4 class="alert-heading">Completed</h4>
              <hr />
              <p>Thank you for your time.</p>
              <p>You will be contacted through a phone call by our office
                regarding the confirmation. For further details
                call us at 0313-3385142 - 0313-3825477</p>
            </div>
          </div>
        </div>
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
</body>

</html>