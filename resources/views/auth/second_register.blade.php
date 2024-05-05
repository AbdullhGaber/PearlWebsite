
@extends('layouts.auth.main_auth')
@section('content')
    <div class="container">
        <div class="authWrapper">
            <div class="authWrapper2">
                <form class="p-4" onsubmit="handleVerifyOTP(event)">
                    <h1 class="mb-1 text-center text-dark fw-bold authHeader">Register</h1>
                    <h6 class="mb-4 text-center">verify OTP</h6>
                    <div class="form-group">
                        <div class="input-container">
                            <input class="otpInput" type="text" id="otp0" maxlength="1" oninput="handleChange(0, event)"
                                onkeyup="handleKeyUp(0, event)" />
                            <input class="otpInput" type="text" id="otp1" maxlength="1" oninput="handleChange(1, event)"
                                onkeyup="handleKeyUp(1, event)" />
                            <input class="otpInput" type="text" id="otp2" maxlength="1" oninput="handleChange(2, event)"
                                onkeyup="handleKeyUp(2, event)" />
                            <input class="otpInput" type="text" id="otp3" maxlength="1" oninput="handleChange(3, event)"
                                onkeyup="handleKeyUp(3, event)" />
                            <input class="otpInput" type="text" id="otp4" maxlength="1" oninput="handleChange(4, event)"
                                onkeyup="handleKeyUp(4, event)" />
                            <input class="otpInput" type="text" id="otp5" maxlength="1" oninput="handleChange(5, event)"
                                onkeyup="handleKeyUp(5, event)" />
                        </div>
                    </div>
                    <div class="timer-container">
                        <p class="timer-text" id="timerText"></p>
                    </div>
                    <div class="text-center">
                        <p class="text-secondary text-start">
                            Didn't receive a code? <a href="#" onclick="handleResetTimer()" class="sendagain">Send
                                again</a>
                        </p>
                        <button class="btn-navy mb-4" type="submit" id="verifyBtn" disabled>Verify OTP</button>
                        <div class="arrow-buttons">
                            <a href="{{ route('auth.first_register') }}" class="arrow-button float-start">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a href="{{ route('auth.third_register') }}" class="arrow-button float-end">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

@endsection
