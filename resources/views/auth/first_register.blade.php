
@extends('layouts.auth.main_auth')
@section('content')
    <div class="container">
        <div class="authWrapper">
            <div class="authWrapper2">
                <form class="p-4">
                    <h1 class="mb-1 text-center text-dark fw-bold authHeader">Register</h1>
                    <h6 class="text-center mb-4">Create Your Profile</h6>
                    <div class="mb-3 text-center" id="fileInput">
                        <label for="profileImage" id="circle-input">
                            <div class="icon-container">
                                <div id="iconWrapper">
                                    <i class="fa fa-camera fa-2x"></i>
                                </div>
                            </div>
                        </label>
                        <input type="file" id="profileImage" accept="image/*" onchange="handleImageChange(event)" />
                    </div>
                    <div class="mb-3" id="fnameInputDiv">
                        <input type="text" id="fnameInput" name="firstName" class="form-control rounded-2"
                            placeholder="First Name" onchange="handleInputChange(event)" required />
                        <p class="error-message" id="fnameError"></p>
                        <span id="fnameIcon">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>
                    <div class="mb-3" id="lnameInputDiv">
                        <input type="text" id="lnameInput" name="lastName" class="form-control rounded-2"
                            placeholder="Last Name" onchange="handleInputChange(event)" required />
                        <p class="error-message" id="lnameError"></p>
                        <span id="lnameIcon">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>
                    <div class="mb-3" id="titleInputDiv">
                        <input type="text" id="titleInput" name="title" class="form-control rounded-2"
                            placeholder="Title" onchange="handleInputChange(event)" required />
                        <p class="error-message" id="titleError"></p>
                        <span id="titleIcon">
                            <i class="far fa-clipboard"></i>
                        </span>
                    </div>
                    <div class="mb-3" id="emailInput">
                        <input type="email" id="email" name="email" class="form-control rounded-2"
                            placeholder="Email Address" onchange="handleInputChange(event)" required />
                        <p class="error-message" id="emailError"></p>
                        <span id="emailIcon">
                            <i class="fa fa-envelope"></i>
                        </span>
                    </div>
                    <div class="mb-3" id="lblInputPassWrapper">
                        <div class="input-group" id="inputSpanWrapper">
                            <div id="inputPassword">
                                <input type="password" id="password" name="password" class="form-control rounded-2"
                                    placeholder="Password" onchange="handleInputChange(event)"
                                    onkeyup="handlePasswordKeyUp(event)" required />
                                <p class="error-message" id="passwordError"></p>
                                <i class="fas fa-eye" id="showPass" onclick="handleTogglePasswordVisibility()"></i>
                            </div>
                            <div class="mt-2">
                                <p class="error-message" id="PassErrorMsg"></p>
                            </div>
                            <div id="passwordStrengthIndicator">
                                <div id="passwordStrengthBar"
                                    class="h-100 d-flex align-items-center justify-content-center">
                                    <p id="passwordStrengthPar"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3" id="dobInput">
                        <input type="date" id="DOB" name="DOB" class="form-control rounded-2" placeholder="DOB"
                            onchange="handleInputChange(event)" required />
                        <p class="error-message" id="dobError"></p>
                    </div>
                    <div class="mb-3" id="phoneInput">
                        <input type="tel" id="phone" name="phone" class="form-control rounded-2"
                            placeholder="Phone Number" onchange="handleInputChange(event)" required />
                        <p class="error-message" id="phoneError"></p>
                        <span id="phoneIcon">
                            <i class="fa fa-phone"></i>
                        </span>
                    </div>
                    <div class="mb-3 rounded-2 form-control" id="licenseInput">
                        <input type="file" id="license" name="license" class="form-control rounded-2"
                            style="display:none;" onchange="handleInputChange(event)" required />
                        <label for="license" class="text-secondary">Add copy of your professional licence or membership
                            in the doctor syndicate</label>
                        <p class="error-message" id="licenseError"></p>
                        <span id="licenseIcon">
                            <i class="far fa-clipboard"></i>
                        </span>
                    </div>
                    <a href="{{ route('auth.second_register') }}" class="arrow-button float-end" onclick="return validateForm(event)">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </form>
            </div>
        </div>
    </div>

   @endsection
