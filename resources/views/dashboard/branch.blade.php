@extends('layouts.dashboard.dashboard_main.dashboard_main')
@section('content')
    <div class="content container">
        <div class="contenttWrapper">
            <h2>Edit {{ $branch['branch_type'] }}</h2>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <form class="newForm" method="POST" action="{{ route('dashboard.updateBranch', ['uid' => $branchKey]) }}"">
                @csrf
                @method('PUT')
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
                    <button type="submit" class="form-control submitButton">Update</button>
                </div>
            </form>

        </div>

    </div>
</body>

</html>
@endsection
