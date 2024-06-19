@extends('layouts.dashboard.dashboard_main.dashboard_main')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/dashboard/patients.css') }}">
    <div class="content container">
        <div class="contenttWrapper">
            <h2>Good morning Dr/ Osama</h2>
            <table>
                <thead class="fs-3">
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone Number</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Appointment Time</th>
                    </tr>
                </thead>
                <tbody class="fs-4">
                    <tr onclick="window.location.href='{{ route('dashboard.patient_report') }}';">
                        <td>John</td>
                        <td>Doe</td>
                        <td>123-456-7890</td>
                        <td>Male</td>
                        <td>25</td>
                        <td>10:00 AM</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
@endsection
