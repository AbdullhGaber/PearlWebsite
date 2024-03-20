@include('layouts.header')
<head>
    <link rel="stylesheet" href="./assets/css/Login.css">
</head>
<body>
    <div class="container">
        <div class="authWrapper">
            <div class="authWrapper2">
                <form class="p-3">
                    <h1 class="text-center text-dark fw-bold authHeader">Login</h1>
                    <div class="mt-3" id="inputEmail">
                        <label for="email" class="text-dark ms-2 fw-bold">
                            Email Address
                        </label>
                        <input type="email" id="email" class="form-control rounded-2" required />
                    </div>
                    <div class="form-group" id="lblInputPassWrapper">
                        <label for="password" class="text-dark ms-2 fw-bold">
                            Password
                        </label>
                        <div class="password-wrapper mb-2">
                            <input type="password" id="password" class="form-control rounded-2 bg-input" required />
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
                        New user?<a href="register.html" class="text-secondary">Register Now</a>
                    </p>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('./assets/js/Login.js') }}"></script>
    <script src="{{ asset('./assets/js/pearl.js') }}"></script>
</body>

</html>
