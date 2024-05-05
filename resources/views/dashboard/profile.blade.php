@extends('layouts.dashboard.dashboard_main.dashboard_main')
@section('content')
    <div class="content container">
        <div class="contenttWrapper">
            <h2>Good morning Dr/ Osama</h2>
            <form class="newForm">
                <div class="formGroup">
                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName" class="inputField form-control"
                        placeholder="Enter your first name" value="Osama" />
                </div>
                <div class="formGroup">
                    <label for="lastName">Last Name</label>
                    <input type="text" id="lastName" class="inputField form-control" placeholder="Enter your last name"
                        value="Zaki" />
                </div>
                <div class="formGroup">
                    <label for="title">Title</label>
                    <input type="text" id="title" class="inputField form-control" placeholder="Enter your title"
                        value="Dermatologist" />
                </div>
                <div class="formGroup">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="inputField form-control" placeholder="Enter your email"
                        value="OsamaZaki@gmail.com" />
                </div>
                <div class="formGroup">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="inputField form-control"
                        placeholder="Enter your password" value="Osama@123" />
                </div>
                <div class="formGroup">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="tel" id="phoneNumber" class="inputField form-control"
                        placeholder="Enter your phone number" value="+201001234567" />
                </div>
                <div class="text-center">
                    <button type="submit" class="form-control submitButton">Save</button>
                </div>
            </form>
        </div>

    </div>

</body>

</html>
@endsection
