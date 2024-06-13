@extends('layouts.dashboard.dashboard_main.dashboard_main')
@section('content')
    <div class="content container">
        <div class="contenttWrapper">
            <h2>Welcome Dr/ {{ $user['firstName'] }}</h2>
            <form class="newForm" method="POST" action="{{ route('dashboard.store_branch') }}">
                @csrf
                <div class="formGroup">
                    <label for="bType">Branch Type</label>
                    <select id="bType" class="form-select"  name="branch_type">
                        <option>Select branch type</option>
                        <option>Clinic</option>
                        <option>Center</option>
                    </select>
                </div>

                <div class="formGroup">
                    <label for="bName">Branch Name </label>
                    <input type="text" id="bName" class="inputField form-control" name="branch_name" />
                </div>

                <div class="formGroup">
                    <label for="government">Government</label>
                    <select id="government" class="form-select" onchange="handleGovernmentChange(event)" name="government" >
                        <option>Select a government</option>
                        <option value="Cairo">Cairo</option>
                        <option value="Dakahlia">Dakhlia</option>
                    </select>
                </div>
                <div class="formGroup">
                    <label for="city">City</label>
                    <select id="city" class="form-select" name="city">
                        <option>Select a city</option>
                    </select>
                </div>
                <div class="formGroup">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="tel" id="phoneNumber" class="inputField form-control" name="phone_number"/>
                </div>
                <div class="formGroup">
                    <label for="comRegNum">Commercial Registration Number</label>
                    <input type="text" id="comRegNum" class="inputField form-control" name="commercial_registration_number" />
                </div>
                <div class="formGroup">
                    <label for="taxIdNum">Tax ID Number</label>
                    <input type="text" id="taxIdNum" class="inputField form-control" name="tax_id_number"  />
                </div>
                <div class="formGroup">
                    <label for="creditCrdNum">Credit Card Number</label>
                    <input type="text" id="creditCrdNum" class="inputField form-control" name="credit_card_number" />
                </div>
                <div class="text-center">
                    <button type="submit" class="form-control submitButton">Add</button>
                </div>
            </form>

        </div>

    </div>
</body>

</html>
@endsection
