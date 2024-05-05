<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/pearl.css') }}">
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/fontawesome/all.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">

    <style>

    </style>
</head>
<body>
    <header class="header-area header-sticky">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="/" class="logo">
                        <img src="{{ asset('./assets/Images/logo.svg') }}" class="logoHeader">
                    </a>
                    <a class='menu-trigger'>
                        <span class="menu-icon">&#9776;</span>
                    </a>
                    <ul class="nav">
                        <div class="header">
                        <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="{{ route('home.index') }}">Home</a></li>
                        <li class="{{ Request::is('home/contact') ? 'active' : '' }}"><a href="{{ route('home.contact') }}">Contact</a></li>
                        <li class="{{ Request::is('auth/sign_in') ? 'active' : '' }}"><a href="{{ route('auth.login') }}">Login</a></li>
                        <li class="{{ Request::is('auth/sign_up') ? 'active' : '' }}"><a href="{{ route('auth.first_register') }}" class="registerHeader">Register</a></li>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
