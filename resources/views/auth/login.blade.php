@extends('layouts.auth.main_auth')
@section('content')
<body>
    <div class="container">
        <div class="authWrapper">
            <div class="authWrapper2">
                <form class="p-3" method="POST" action="{{ route('auth.login') }}">
                    @csrf
                    @method("POST")
                    <h1 class="text-center text-dark fw-bold authHeader">Login</h1>
                    <div class="mt-3" id="inputEmail">
                        <label for="email" class="text-dark ms-2 fw-bold">
                            Email Address
                        </label>
                        <input type="email" name="email" id="email" class="form-control rounded-2" required />
                    </div>
                    <div class="form-group" id="lblInputPassWrapper">
                        <label for="password" class="text-dark ms-2 fw-bold">
                            Password
                        </label>
                        <div class="password-wrapper mb-2">
                            <input type="password" name="password" id="password" class="form-control rounded-2 bg-input" required />
                            <div class="eye-icon">
                                <i id="showPass" class="fas fa-eye" onclick="handleTogglePasswordVisibility()"></i>
                            </div>
                        </div>
                        <a id="forgotPass" href="index.html" class="ms-2 text-secondary mb-2">
                            Forgot your password?
                        </a>
                    </div>
                    <div class="mb-2">
                        <button type="submit" class="btn-navy form-control rounded-2" id="btnLogin">
                            Login
                        </button>
                    </div>
                    <p class="newUserP">
                        New user?<a href="{{ route('auth.first_register') }}" class="text-secondary">Register Now</a>
                    </p>
                </form>
            </div>
        </div>
    </div>

@endsection
