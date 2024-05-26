@extends('layouts.dashboard.dashboard_main.dashboard_main')
@section('content')
    <div class="content container">
        <div class="contenttWrapper">
            <h2>Welcome DR / {{ $user['firstName'] }} !</h2>

            <!-- Flash Message -->
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form class="newForm" method="POST" action="/dashboard/profile/{{ $user['uid'] }}">
                @csrf
                @method('put')
                <div class="formGroup">
                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName" class="inputField form-control" name="firstName"
                        placeholder="Enter your first name" value="{{ $user['firstName'] }}" />
                </div>
                <div class="formGroup">
                    <label for="lastName">Last Name</label>
                    <input type="text" id="lastName" class="inputField form-control" name="lastName"
                     placeholder="Enter your last name"
                        value="{{ $user['lastName'] }}" />
                </div>
                <div class="formGroup">
                    <label for="title">Title</label>
                    <input type="text" id="title" class="inputField form-control" placeholder="Enter your title" name="title"
                        value="{{ $user['title'] }}" />
                </div>
                <div class="formGroup">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="inputField form-control" placeholder="Enter your email" name="email"
                        value="{{ $user['email'] }}" />
                </div>
                <div class="formGroup">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="inputField form-control" name="password"
                        placeholder="Enter your password" value="Osama@123" />
                </div>
                <div class="formGroup">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="tel" id="phoneNumber" class="inputField form-control" name="phoneNumber"
                        placeholder="Enter your phone number" value="{{ $user['phoneNumber'] }}" />
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
