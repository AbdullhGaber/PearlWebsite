
@extends('layouts.main.main')
@section('content')
    <div class="container">
        <div class="row contactWrapper">
            <div class="col-md-9 leftContact">
                <form class="p-5">
                    <h1>Get In <span class="colorPart">Touch</span></h1>
                    <p class="mb-4">Questions, comments, or suggestions? Simply fill in the form and we’ll be in touch
                        shortly.</p>
                    <div class="mb-3" id="nameInput">
                        <input type="text" id="nameInput" name="Name" class="form-control rounded-2" placeholder="Name"
                            required />
                    </div>
                    <div class="mb-3">
                        <input type="email" id="email" name="email" class="form-control rounded-2 custom-input" placeholder="Email Address" required />
                    </div>
                    <div class="mb-3">
                        <input type="tel" id="phone" name="phone" class="form-control rounded-2 custom-input" placeholder="Phone Number" required />
                    </div>
                    <div class="mb-3" id="quesInput">
                        <input type="text" id="quesInput" name="Questions" class="form-control rounded-2"
                            placeholder="Questions" required />
                    </div>
                    <button type="submit" class="btn-navy btnSend form-control rounded-2">Send</button>
                </form>
            </div>
            <div class="col-md-3 rightContact pt-5">
                <div class="text-center mt-3">
                    <img src="{{ asset('assets/Images/logo.svg') }}" class="contactLogo" />
                </div>
                <div class="contactIcons">
                    <div class="m-2 mt-4">
                        <i class="fa fa-phone me-2"></i> 0123456789
                    </div>
                    <div class="m-2">
                        <i class="fa-solid fa-location-dot me-2"></i> Mansoura, Egypt
                    </div>
                    <div class="m-2">
                        <i class="fa fa-envelope me-2"></i> pearl@gmail.com
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
