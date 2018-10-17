<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <?php /*?><title>{{ config('app.name', 'Laravel') }} :: Customer</title><?php */?>
            <title>TRUX.AI</title>
            <meta name="description" content="">
            <meta name="keywords" content="">
            <meta name="author" content="beshleyua">
            <script src="{{ asset('public/js/app.js') }}" defer></script>
            <!-- Mobile Specific Metas -->
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

            <!-- Load Fonts -->
            <link href="{{ asset('public/css/icon') }}" rel="stylesheet">

            <!-- CSS -->
            <link rel="stylesheet" href="{{ asset('public/css/materialize.css') }}">
            <link rel="stylesheet" href="{{ asset('public/css/layout.css') }}">
            <link rel="stylesheet" href="{{ asset('public/css/magnific-popup.css') }}">
            <link rel="stylesheet" href="{{ asset('public/css/animate.css') }}">
            <link rel="stylesheet" href="{{ asset('public/css/ionicons.css') }}">

            
            <link rel="shortcut icon" href="{{ asset('public/images/favicon.png') }}">
        
            <style type="text/css">
                .gm-style {
                    font: 400 11px Roboto, Arial, sans-serif;
                    text-decoration: none;
                }
                
                .gm-style img {
                    max-width: none;
                }
            </style>
        <link rel="stylesheet"  href="{{ asset('public/css/style.css') }}" >
        
    </head>
<body class="ready">
    <div class="page" id="home-section">
        
        <header>

            <!-- SideNav -->
            <ul class="side-nav fixed" id="nav-mobile" style="transform: translateX(0%);background: #1972b9;">
                <li class="curent" style="background: #ebf6ff;">
                    <div class="userView center-align">                       
                        <a href="{{url('/')}}"><img class="avatar" src="{{ asset('public/images/logo-1.png') }}" alt=""></a>
                        
                    </div>
                </li>
                <li>
                    <a class="center-align" href="{{url('/')}}"><img style=" position: absolute;bottom:130px;left:80px;" src="{{ asset('public/images/back.png') }}"></a>
                    <p>We at TRUXAI, unanimously envision to bring paradigm shift in trucking eco-systom, by synchronizing "Human Trucking Expertize" and "Smart Trucking".</p>
                </li>
            </ul>            
        </header>
    </div>       
    <!-- jQuery Scripts -->
    <script src="{{ asset('public/js/jquery.min.js.download') }}"></script>
    <script src="{{ asset('public/js/materialize.js.download') }}"></script>
    <script src="{{ asset('public/js/jquery.validate.js.download') }}"></script>
    <script src="{{ asset('public/js/magnific-popup.js.download') }}"></script>
    <!-- Google map api -->
    <script type="text/javascript" src="{{ asset('public/js/js') }}"></script>
    <!-- Main Scripts -->
    <script src="{{ asset('public/js/main.js.download') }}"></script>
</body>

</html>