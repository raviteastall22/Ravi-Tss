<!DOCTYPE html>
<html lang="en">
<head>
  <title>TRUX.AI</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="icon" type="image/png" href="{{ asset('public/login_images/Kryptunit-logo.png') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('public/login_vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/login_fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/login_fonts/iconic/css/material-design-iconic-font.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/login_vendor/animate/animate.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/login_vendor/css-hamburgers/hamburgers.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/login_vendor/animsition/css/animsition.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/login_vendor/select2/select2.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/login_vendor/daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/login_css/util.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/login_css/main.css') }}">
  <script src="{{ asset('public/login_js/validation.js') }}"></script>
</head>
<body>

@yield('content')

<div id="dropDownSelect1"></div>

  <script src="{{ asset('public/login_vendor/jquery/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('public/login_vendor/animsition/js/animsition.min.js') }}"></script>
  <script src="{{ asset('public/login_vendor/bootstrap/js/popper.js') }}"></script>
  <script src="{{ asset('public/login_vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('public/login_vendor/select2/select2.min.js') }}"></script>
  <script src="{{ asset('public/login_vendor/daterangepicker/moment.min.js') }}"></script>
  <script src="{{ asset('public/login_vendor/daterangepicker/daterangepicker.js') }}"></script>
  <script src="{{ asset('public/login_vendor/countdowntime/countdowntime.js') }}"></script>
  <script src="{{ asset('public/login_js/main.js') }}"></script>

  <!-- <script type="text/javascript">
  $(document).ready(function() {
    $('#login-form').click(function() {
      result =false;
      var email = $("#email").val();
      if(email=="") {
        $("#email").addClass('cus_error');
        //alert('Please enter your email id');
        //$("#email").focus();
        result =false;
     }
     var password = $("#password").val();
     if(password=="") {
        $("#password").addClass('cus_error');
        //$("#password").focus();
        result =false;
     }

        result =true;

   });

  });  
</script> -->

</body>
</html>








            