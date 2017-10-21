<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->

    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Favicon-->
    <link rel="icon" href="images/icon.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="{{ asset('web/main.css') }}">
     
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  
    <div class="wrapper">
      <!-- Navbar-->
     
     @yield('content')
      
    </div>
  
 
  
    <!-- Javascripts-->
    <!-- Javascripts-->
  <script src="{{asset('web/jquery-2.1.4.min.js')}}"></script>
  <script src="{{asset('web/bootstrap.min.js')}}"></script>
  <script src="{{asset('web/pace.min.js')}}"></script>
  <script src="{{asset('web/main.js')}}"></script>
  </body>
</html>
