<!doctype html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Phoanix Dash</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset ('Dashassets/img/favicons/apple-touch-icon.png')}} ">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset ('Dashassets/img/favicons/favicon-32x32.png')}} ">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset ('Dashassets/img/favicons/favicon-16x16.png')}} ">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset ('Dashassets/img/favicons/favicon.ico ')}}">
    <link rel="manifest" href="{{asset ('Dashassets/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="{{asset ('Dashassets/img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link href="{{asset ('Dashassets/css/phoenix.min.css')}}" rel="stylesheet" id="style-default">
    <link href="{{asset ('Dashassets/css/user.min.css')}}" rel="stylesheet" id="user-style-default">
    <style>
      body {
        opacity: 0;
      }
    </style>

  </head>

  <body>
    <main class="main" id="top">
      <div class="container-fluid px-0">
        @include('inc.admin.sidebar')
        @include('inc.admin.navbar')
        <div class="content">
          <div class="pb-5">
            <div class="row g-5">
              <div class="col-12 col-xxl-6">
                <div class="mb-8">
                  <h2 class="mb-2">Ecommerce Dashboard</h2>
                  <h5 class="text-700 fw-semi-bold">Here’s what’s going on at your business right now</h5>
                </div>
               
        </div>
      </div>
    </main>
    <script src="{{asset ('Dashassets/js/phoenix.js')}}"></script>
    <script src="{{asset ('Dashassets/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>
