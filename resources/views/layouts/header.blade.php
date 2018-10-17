<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>TRUX.AI</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="beshleyua">
        <!-- Mobile Specific Metas 
        -->
        <!-- Load Fonts {{ asset('public/css/materialize.css') }}-->
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
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
        <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
    </head>
    <body class="ready">
        <div class="page" id="home-section">
            <div class="preloader">
                <div class="centrize full-width">
                    <div class="vertical-center">
                        <div class="preloader-wrapper spinner big active">
                            <div class="spinner-layer spinner-blue">
                                <div class="circle-clipper left">
                                    <div class="circle"></div>
                                </div>
                                <div class="gap-patch">
                                    <div class="circle"></div>
                                </div>
                                <div class="circle-clipper right">
                                    <div class="circle"></div>
                                </div>
                            </div>
                            <div class="spinner-layer spinner-red">
                                <div class="circle-clipper left">
                                    <div class="circle"></div>
                                </div>
                                <div class="gap-patch">
                                    <div class="circle"></div>
                                </div>
                                <div class="circle-clipper right">
                                    <div class="circle"></div>
                                </div>
                            </div>
                            <div class="spinner-layer spinner-green">
                                <div class="circle-clipper left">
                                    <div class="circle"></div>
                                </div>
                                <div class="gap-patch">
                                    <div class="circle"></div>
                                </div>
                                <div class="circle-clipper right">
                                    <div class="circle"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <header>
                <!-- SideNav -->
                <ul class="side-nav fixed" id="nav-mobile" style="transform: translateX(0%);background: #1972b9;">
                    <li class="curent" style="background: #ebf6ff;">
                        <div class="userView center-align">
                            <a href="#"><img class="avatar" src="{{ asset('public/images/logo-1.png')}}" alt=""></a>
                        </div>
                    </li>
                    <li>
                        <a class="center-align" href="#"><img style=" position: absolute;bottom:130px;left:80px;" src="{{ asset('public/images/back.png') }}"></a>
                        <p>We at TRUXAI, unanimously envision to bring paradigm shift in trucking eco-systom, by synchronizing "Human Trucking Expertize" and "Smart Trucking".</p>
                    </li>
                </ul>
            </header>