<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/fontawesome/all.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/first register.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/second register.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/thirdregister.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Login.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pearl.css') }}">

    <title>Pearl</title>
</head>

<body>
    <header class="header-area header-sticky">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="index.html" class="logo">
                        <img src="{{ asset('assets/Images/logo.svg') }}" class="logoHeader">
                    </a>
                    <a class='menu-trigger'>
                        <span class="menu-icon">&#9776;</span>
                    </a>
                    <ul class="nav">
                        <div class="header">
                        <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="{{ route('home.index') }}">Home</a></li>
                        <li class="{{ Request::is('home/contact') ? 'active' : '' }}"><a href="{{ route('home.contact') }}">Contact</a></li>
                        <li class="{{ Request::is('auth/sign_in') ? 'active' : '' }}"><a href="{{ route('auth.login') }}">Login</a></li>
                        <li class="{{ (Request::is('auth/sign_up') || Request::is('auth/second_register') || Request::is('auth/third_register') ) ? 'active' : '' }}"><a href="{{ route('auth.first_register') }}" class="registerHeader">Register</a></li>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
