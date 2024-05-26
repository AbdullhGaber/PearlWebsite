@extends('layouts.dashboard.dashboard_main.dashboard_main')
@section('content')
    <div class="content container">
        <div class="contenttWrapper">
            <h2> Welcome DR/ {{ $user['firstName'] }} !</h2>
            <div class="row">
                <div class="col-7 appointmentSummary">
                    <h4 class="mt-4">Today's Appointments</h4>
                    <p class="text-secondary">Today's Summary</p>
                    <div class="boxsWrapper">
                        <div class="colorBox1">
                            <div class="colorCircle1">
                                <i class="fa fa-bell"></i>
                            </div>
                            <h5 class="boxNumber">{{ $user['upcoming'] }}</h5>
                            <p class="appStatus">Upcoming</p>
                            <p class="yesterdayStatus">+0.5% from yesterday</p>
                        </div>
                        <div class="colorBox2">
                            <div class="colorCircle2">
                                <i class="fa fa-bell"></i>
                            </div>
                            <h5 class="boxNumber">{{ sizeOf($user['appointments']) - 1 }}</h5>
                            <p class="appStatus">Appointments</p>
                            <p class="yesterdayStatus">+5% from yesterday</p>
                        </div>
                        <div class="colorBox3">
                            <div class="colorCircle3">
                                <i class="fa fa-bell"></i>
                            </div>
                            <h5 class="boxNumber">{{ $user['finished'] }}</h5>
                            <p class="appStatus">Finished</p>
                            <p class="yesterdayStatus">+1.2% from yesterday</p>
                        </div>
                        <div class="colorBox4">
                            <div class="colorCircle4">
                                <i class="fa fa-bell"></i>
                            </div>
                            <h5 class="boxNumber">{{ $user['cancelled'] }}</h5>
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
                <table class="sceduleTable">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone Number</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Appointment Time</th>
                            <th>Status</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>123-456-7890</td>
                            <td>Male</td>
                            <td>25</td>
                            <td>10:00 AM</td>
                            <td>
                                <button class="online">Online</button>
                            </td>
                            <td>
                                <button class="confirm">Confirm</button>
                            </td>
                            <td>
                                <button class="cancel" onclick="handleAction('cancel', 'John Doe', this)"
                                    data-name="John Doe">Cancel</button>
                            </td>
                        </tr>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>123-456-7890</td>
                            <td>Male</td>
                            <td>25</td>
                            <td>10:00 AM</td>
                            <td>
                                <button class="offline">Offline</button>
                            </td>
                            <td>
                                <button class="confirm">Confirm</button>
                            </td>
                            <td>
                                <button class="disabled" onclick="handleAction('cancel', 'John Doe')"
                                    disabled>Cancelled</button>
                            </td>
                        </tr>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>123-456-7890</td>
                            <td>Male</td>
                            <td>25</td>
                            <td>10:00 AM</td>
                            <td>
                                <button class="online">Online</button>
                            </td>
                            <td>
                                <button class="confirm">Confirm</button>
                            </td>
                            <td>
                                <button class="cancel" onclick="handleAction('cancel', 'John Doe', this)"
                                    data-name="John Doe">Cancel</button>
                            </td>
                        </tr>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>123-456-7890</td>
                            <td>Male</td>
                            <td>25</td>
                            <td>10:00 AM</td>
                            <td>
                                <button class="online">Online</button>
                            </td>
                            <td>
                                <button class="confirm">Confirm</button>
                            </td>
                            <td>
                                <button class="cancel" onclick="handleAction('cancel', 'John Doe', this)"
                                    data-name="John Doe">Cancel</button>
                            </td>
                        </tr>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>123-456-7890</td>
                            <td>Male</td>
                            <td>25</td>
                            <td>10:00 AM</td>
                            <td>
                                <button class="online">Online</button>
                            </td>
                            <td>
                                <button class="confirm">Confirm</button>
                            </td>
                            <td>
                                <button class="cancel" onclick="handleAction('cancel', 'John Doe', this)"
                                    data-name="John Doe">Cancel</button>
                            </td>
                        </tr>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>123-456-7890</td>
                            <td>Male</td>
                            <td>25</td>
                            <td>10:00 AM</td>
                            <td>
                                <button class="online">Online</button>
                            </td>
                            <td>
                                <button class="confirm">Confirm</button>
                            </td>
                            <td>
                                <button class="cancel" onclick="handleAction('cancel', 'John Doe', this)"
                                    data-name="John Doe">Cancel</button>
                            </td>
                        </tr>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>123-456-7890</td>
                            <td>Male</td>
                            <td>25</td>
                            <td>10:00 AM</td>
                            <td>
                                <button class="online">Online</button>
                            </td>
                            <td>
                                <button class="confirm">Confirm</button>
                            </td>
                            <td>
                                <button class="cancel" onclick="handleAction('cancel', 'John Doe', this)"
                                    data-name="John Doe">Cancel</button>
                            </td>
                        </tr>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>123-456-7890</td>
                            <td>Male</td>
                            <td>25</td>
                            <td>10:00 AM</td>
                            <td>
                                <button class="online">Online</button>
                            </td>
                            <td>
                                <button class="confirm">Confirm</button>
                            </td>
                            <td>
                                <button class="cancel" onclick="handleAction('cancel', 'John Doe', this)"
                                    data-name="John Doe">Cancel</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</body>
</html>
@endsection
