
@extends('layouts.main.main')
@section('content')

    <div class="gradient-div">
        <h1 class="FirstdivText">
            <span class="inline">Healthy Glowing Skin,</span>
            <span class="new-line"></span>
            <span class="inline">is coming from</span>
            <span class="new-line"></span>
            <span class="inline"><span class="letter-P"></span>EARL</span>
        </h1>
        <div>
            <img class="imgfirstdiv" src="{{ asset('assets/Images/girl.png') }}" alt="">
        </div>
    </div>

    <div class="seconddiv">
        <h1 class="pt-3">Features of <span class="pearl-name">PEARL</span> Application</h1>
        <div class="container py-5">
            <div class="row justify-content-between">
                <div class = "col-md-3">
                    <div class="card p-3">
                        <div class="icon-container lock-icon">
                            <i class="fas fa-lock fa-2x"></i>
                        </div>
                        <div>
                            <p class="cardcontentp1">Unlock Your Skin's Secrets</p>
                            <p class="cardcontentp2">Explore your skin with our easy skin scan. Find out your skin type and get personalized tips.</p>
                        </div>
                    </div>
                </div>

                <div class = "col-md-3">
                    <div class="card p-3">
                        <div class="icon-container heart-icon">
                            <i class="fas fa-heart fa-2x"></i>
                        </div>
                        <div >
                            <p class="cardcontentp1">Customized Care,Just for You</p>
                            <p class="cardcontentp2">Discover personalized product suggestions and tips crafted for your unique skin. Elevate your skincare journey with individualized care.</p>
                        </div>
                    </div>
                </div>

                <div class = "col-md-3">
                    <div class="card p-3">
                        <div class="icon-container smile-icon">
                            <i class="fas fa-smile fa-2x"></i>
                        </div>
                        <div >
                            <p class="cardcontentp1">Personalized nutrition routine</p>
                            <p class="cardcontentp2">Discover personalized nutrition   suggestions and tips crafted for you.</p>
                        </div>
                    </div>
                </div>

                <div class = "col-md-3">
                    <div class="card p-3">
                        <div class="icon-container medical-icon">
                            <i class="fas fa-user-md fa-2x"></i>
                        </div>
                        <div >
                            <p class="cardcontentp1">Book a medical consultation</p>
                            <p class="cardcontentp2">Book your medical consultation with the Best Doctors With the possibility of communicating online</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <section class="p-5">
            <h1 class="text-center">Lets have a look at <span class="pearl-name">PEARL</span> users reviews</h1>
    </section>

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-3">
                <div class="cardd">
                    <div>
                        <p class="quets">"</p>
                        <p class="card-line1">My skin is way better after using Pearl app</p>
                        <div class="rating-container">
                            <img src="{{ asset('assets/Images/doctor1.jpg') }}" class="profile-img">
                            <p class="card-line2">Saleh Fathy</p>
                            <div class="rate-stars">★★★★★</div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3">
                <div class="cardd">
                    <div>
                        <p class="quets">"</p>
                        <p class="card-line1">My skin is way better after using Pearl app.</p>
                        <div class="rating-container">
                            <img src="{{ asset('assets/Images/doctor2.jpg') }}" class="profile-img">
                            <p class="card-line2">Saleh Fathy</p>
                            <div class="rate-stars">★★★★★</div>
                        </div>
                    </div>
                </div>
            </div>


           <div class="col-md-3">
                <div class="cardd">
                    <div>
                        <p class="quets">"</p>
                        <p class="card-line1">My skin is way better after using Pearl app.</p>
                        <div class="rating-container">
                            <img src="{{ asset('assets/Images/doctor3.jpg') }}" class="profile-img">
                            <p class="card-line2">Saleh Fathy</p>
                            <div class="rate-stars">★★★★★</div>
                        </div>
                    </div>
                </div>
           </div>

            <div class="col-md-3">
                <div class="cardd">
                    <div>
                        <p class="quets">"</p>
                        <p class="card-line1">My skin is way better after using Pearl app.</p>
                        <div class="rating-container">
                            <img src="{{ asset('assets/Images/doctor3.jpg') }}" class="profile-img">
                            <p class="card-line2">Saleh Fathy</p>
                            <div class="rate-stars">★★★★★</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fourthdiv">
        <div class="row justify-content-center">
            <div class="col-md-9">
                    <h1 class="leftdiv text-center">Download PEARL Application<br/>now and start your<span class="glowing-name"> Glowing</span><br/> journey</h1>
                    <div class="mt-4 text-center">
                        <button type="button" class="btn btn-dark btnAppStore"><i class="fa-brands fa-apple me-2 fa-2x"></i>App Store</button>
                        <button type="button" class="btn btn-light btnGooglePlay"><i class="fa-brands fa-google-play me-2 fa-2x"></i>Google Play</button>
                    </div>
            </div>
            <div class="col-md-3">
                <img class="Appimg" src="{{ asset('assets/Images/App.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="fifthdiv">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <img src="{{ asset('assets/Images/happy.png') }}" class="img-fluid">
            </div>
            <div class="col-md-6 rightdivfifth">
                <h3>PEARL for doctors is your way<br/> to <span class="pearl-name">enhance</span> your service</h3>
            </div>
        </div>
    </div>

    <div class="sixdiv">
        <h1>Benefits of <span class="pearl-name">PEARL</span> website for doctors</h1>
        <div class="row">
            <div class="col-md-3">
                <div class="card p-3">
                    <div class="header-content">
                        <p class="top-left-text">Reach to more users</p>
                        <i class="fas fa-globe top-right-icon"></i>
                    </div>
                    <p>Sign up and reach to all PEARL users based on your location. </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3">
                    <div class="header-content">
                        <p class="top-left-text">Enhance your activity</p>
                        <i class="fas fa-tachometer-alt top-right-icon"></i>
                    </div>
                    <p>Use PEARL Dashboard to enhance your    service.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3">
                    <div class="">
                        <p class="top-left-text">Communicate with users</p>
                        <i class="fas fa-check-circle top-right-icon" ></i>
                    </div>
                    <p class="text-body">Make it easy by chatting, audio, video call.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3">
                    <div class="header-content">
                        <p class="top-left-text">Follow the patient journey</p>
                        <i class="fas fa-gem top-right-icon"></i>
                    </div>
                    <p>Help patients in their glowing journey and get points.</p>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-6">
                <button type="button" class="btn btn1">Register Now</button>
            </div>
            <div class="col-6">
                <button type="button" class="btn btn2">Log In</button>
            </div>
        </div>
    </div>
    @endsection

