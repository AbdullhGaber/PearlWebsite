@extends('layouts.dashboard.dashboard_main.dashboard_main')
@section('content')
    <div class="content container">
        <div class="contenttWrapper">
            <h2>Good morning Dr/ Osama</h2>
            <div class="row">
                <div class="col-7 appointmentSummary">
                    <h4 class="mt-4">Today's Appointments</h4>
                    <p class="text-secondary">Today's Summary</p>
                    <div class="boxsWrapper">
                        <div class="colorBox1">
                            <div class="colorCircle1">
                                <i class="fa fa-bell"></i>
                            </div>
                            <h5 class="boxNumber">8</h5>
                            <p class="appStatus">Upcoming</p>
                            <p class="yesterdayStatus">+0.5% from yesterday</p>
                        </div>
                        <div class="colorBox2">
                            <div class="colorCircle2">
                                <i class="fa fa-bell"></i>
                            </div>
                            <h5 class="boxNumber">300</h5>
                            <p class="appStatus">Offline</p>
                            <p class="yesterdayStatus">+5% from yesterday</p>
                        </div>
                        <div class="colorBox3">
                            <div class="colorCircle3">
                                <i class="fa fa-bell"></i>
                            </div>
                            <h5 class="boxNumber">5</h5>
                            <p class="appStatus">Finished</p>
                            <p class="yesterdayStatus">+1.2% from yesterday</p>
                        </div>
                        <div class="colorBox4">
                            <div class="colorCircle4">
                                <i class="fa fa-bell"></i>
                            </div>
                            <h5 class="boxNumber">12</h5>
                            <p class="appStatus">Cancelled</p>
                            <p class="yesterdayStatus">+8% from yesterday</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 calendar">
                    <div id="datepicker-container"></div>
                </div>
            </div>
            <div class="row">
                <div class="activityChart">
                    <h4 class="mt-1">Your Activity</h4>
                    <div class="chartCenter">
                        <canvas id="weeklyChart"></canvas>
                    </div>
                </div>
                <div class="patientsVisits col-7">
                    <h4 class="mt-1">Patients Visits</h4>
                    <canvas id="monthlyAppointmentsChart"></canvas>
                </div>
                <div class="patientComments col-4">
                    <h6 class="mt-4">Patients Comments</h6>
                    <div class="comment row">
                        <img class="col-1 commentImg" src="{{ asset('assets/Images/doctor.png') }}" />
                        <div class="col-5 nameAndDesc">
                            <p class="commentName">Saleh Fathy</p>
                            <p class="commentDescription">Great doctor</p>
                        </div>
                        <div class="col-4 commentStars">
                            <div id="rating" class="rateyo" data-rateyo-rating="5" data-rateyo-half-star="true"
                                disabled></div>
                        </div>
                    </div>

                    <div class="comment row">
                        <img class="col-1 commentImg" src="{{ asset('assets/Images/doctor.png') }}" />
                        <div class="col-5 nameAndDesc">
                            <p class="commentName">Ali Maged</p>
                            <p class="commentDescription">Good</p>
                        </div>
                        <div class="col-4 commentStars">
                            <div id="rating" class="rateyo" data-rateyo-rating="3.5" data-rateyo-half-star="true"
                                disabled></div>
                        </div>
                    </div>

                    <div class="comment row">
                        <img class="col-1 commentImg" src="{{ asset('assets/Images/doctor.png') }}" />
                        <div class="col-5 nameAndDesc">
                            <p class="commentName">Sara Aymen</p>
                            <p class="commentDescription">Professional</p>
                        </div>
                        <div class="col-4 commentStars">
                            <div id="rating" class="rateyo" data-rateyo-rating="4.5" data-rateyo-half-star="true"
                                disabled></div>
                        </div>
                    </div>

                    <div class="comment row">
                        <img class="col-1 commentImg" src="{{ asset('assets/Images/doctor.png') }}" />
                        <div class="col-5 nameAndDesc">
                            <p class="commentName">Doaa saber</p>
                            <p class="commentDescription">Great experience</p>
                        </div>
                        <div class="col-4 commentStars">
                            <div id="rating" class="rateyo" data-rateyo-rating="5" data-rateyo-half-star="true"
                                disabled></div>
                        </div>
                    </div>

                    <div class="comment row">
                        <img class="col-1 commentImg" src="{{ asset('assets/Images/doctor.png') }}" />
                        <div class="col-5 nameAndDesc">
                            <p class="commentName">Ebrahiem Ali</p>
                            <p class="commentDescription">I don't recommend</p>
                        </div>
                        <div class="col-4 commentStars">
                            <div id="rating" class="rateyo" data-rateyo-rating="2" data-rateyo-half-star="true"
                                disabled></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="doctorRating col-7">
                    <h4 class="mt-2">Dr/ Osama Rate</h4>
                    <p>Rating and reviews are verified and are from people who use the service</p>
                    <div class="rating-section">
                        <div class="left-section">
                            <div class="total-rating">4.5</div>
                            <div id="rating" class="rateyo custom-width" data-rateyo-rating="4.5"
                                data-rateyo-half-star="true" disabled></div>
                            <div class="total-num-ratings text-secondary">2456 ratings</div>
                        </div>
                        <div class="right-section">
                            <div class="rating-bar">
                                <div class="rating">5</div>
                                <div class="bar">
                                    <div class="filled-bar" style="width: 75%;"></div>
                                </div>
                            </div>
                            <div class="rating-bar">
                                <div class="rating">4</div>
                                <div class="bar">
                                    <div class="filled-bar" style="width: 50%;"></div>
                                </div>
                            </div>
                            <div class="rating-bar">
                                <div class="rating">3</div>
                                <div class="bar">
                                    <div class="filled-bar" style="width: 20%;"></div>
                                </div>
                            </div>
                            <div class="rating-bar">
                                <div class="rating">2</div>
                                <div class="bar">
                                    <div class="filled-bar" style="width: 30%;"></div>
                                </div>
                            </div>
                            <div class="rating-bar">
                                <div class="rating">1</div>
                                <div class="bar">
                                    <div class="filled-bar" style="width: 10%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="patientsGender col-4">
                    <h6 class="mt-2 mb-4">Patiens Gender Summary</h6>
                    <canvas id="genderDistributionChart"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection
