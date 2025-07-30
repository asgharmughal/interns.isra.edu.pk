<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="generator" content="Jekyll v4.0.1">
  <title>IFS : Job Portal</title>

  <!-- Bootstrap core CSS -->
  <link href="/css/app.css" rel="stylesheet">

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
  <link href="/css/pricing.css" rel="stylesheet">
</head>

<body>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Isra Foundation Schools</h5>
    <!--
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="#">About</a>
      <a class="p-2 text-dark" href="#">Contact</a>
      <a class="p-2 text-dark" href="#">Jobs</a>
    </nav>
    
    <a class="btn btn-outline-primary" href="#">Sign up</a>
  -->
  </div>

  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">{{setting('portal.title')}}</h1>
    <p class="lead">{{setting('portal.subtitle')}}
  </div>

  <div class="container">
    <section class="content">
      <p style="text-align: justify;">{{setting('portal.description')}}</p>
      <div class="su-spacer" style="height:20px"></div>
      <div class="su-table su-table-alternate">
        @php
        $jobs = \App\Job::where('active','Active')->get();
        $counter = 0;
        @endphp
        <div class="table-responsive">
          <table class="table">
            <tbody>
              <tr>
                <td><strong>S.No</strong></td>
                <td><strong>Position</strong></td>
                <td><strong>Recruitment Drive</strong></td>
                <td style="display:none"><strong>Grade Level(s)</strong></td>
                <td style="display:none"><strong>Subject(s)</strong></td>
                <td><strong>Advertisement Date</strong></td>
                <td><strong>Closing Date</strong></td>

                <td><strong>Advertisement</strong></td>
                <td><strong>Submit Application</strong></td>
              </tr>
              @foreach($jobs as $job)
              <tr>
                <td>{{++$counter}}</td>
                <td>{{$job->position}}</td>
                <td>{{$job->drive}}</td>
                
                <td style="display:none">{{$job->grade_level}}</td>
                <td style="display:none">{{$job->subject_level}}</td>
                <td>{{Carbon\Carbon::parse($job->ad_date)->format('d-M-y')}}</td>
                <td>{{Carbon\Carbon::parse($job->close_date)->format('d-M-y')}}</td>
                @if(strlen($job->photo)>1)
                <td><a href="{{asset('storage')}}/{{$job->photo}}" target="_blank">View</a></td>

                @else
                <td>&nbsp;</td>

                @endif
                @php
                  $today = Carbon\Carbon::now();
                  //dd($today);
                  $lastdate = Carbon\Carbon::parse($job->close_date);
                  $lastdate = $lastdate->addDays(1);
                  //dd($lastdate);
                @endphp
                @if($lastdate->gte($today) )
                <td><a href="/apply/{{$job->drive}}">Apply Online</a></td>
                @else
                <td>Closed</td>
                @endif
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div>{!! setting('portal.requirements') !!}</div>

    </section>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">{!! setting('portal.footer') !!}</p>
    </footer>
  </div>
</body>

</html>