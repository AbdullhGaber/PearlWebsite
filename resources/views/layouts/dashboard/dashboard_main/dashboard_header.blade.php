<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/dashboard/patientsreport.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/branch.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/view Branches.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pearl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/dachboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/summery.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/schedule.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/Profile.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Pearl</title>
</head>

<body>
    <div class="header">
        <img src="{{ asset('assets/Images/logo.svg') }}" class="logoHeader" >

        <a class="btn  logout" href="{{ route('home.index') }}" role="button"> <i class="fa-solid fa-arrow-right-from-bracket"></i>Logout</a>
        <div class="notification-icon" onclick="toggleNotifications()">
            <i class="fas fa-bell"></i>

            <div class="notification-container" id="notificationContainer">
                <div class="singleNotification">
                    <img src="{{ asset('assets/Images/doctor1.jpg') }}" class="notficationImg me-3">
                    <div class="notficationText">
                        <p class="me-3">Saleh Fathy cancelled his appointment today at 7 pm.</p>
                        <p class="text-secondary">April 25, 2024</p>
                    </div>
                    <i class="fa-solid fa-xmark float-end mt-3 notificationClose"></i>
                </div>
                <div class="singleNotification">
                    <img src="{{ asset('assets/Images/doctor1.jpg') }}" class="notficationImg me-3">
                    <div class="notficationText">
                        <p class="me-3">Saleh Fathy cancelled his appointment today at 7 pm.</p>
                        <p class="text-secondary">April 25, 2024</p>
                    </div>
                    <i class="fa-solid fa-xmark float-end mt-3 notificationClose"></i>
                </div>
                <div class="singleNotification">
                    <img src="{{ asset('assets/Images/doctor1.jpg') }}" class="notficationImg me-3">
                    <div class="notficationText">
                        <p class="me-3">Saleh Fathy cancelled his appointment today at 7 pm.</p>
                        <p class="text-secondary">April 25, 2024</p>
                    </div>
                    <i class="fa-solid fa-xmark float-end mt-3 notificationClose"></i>
                </div>
                <div class="singleNotification">
                    <img src="{{ asset('assets/Images/doctor1.jpg') }}" class="notficationImg me-3">
                    <div class="notficationText">
                        <p class="me-3">Saleh Fathy cancelled his appointment today at 7 pm.</p>
                        <p class="text-secondary">April 25, 2024</p>
                    </div>
                    <i class="fa-solid fa-xmark float-end mt-3 notificationClose"></i>
                </div>
            </div>

        </div>

        <div class="menu-icon" onclick="toggleSidebar()">
            <i class="fas fa-bars"></i>
        </div>
    </div>


