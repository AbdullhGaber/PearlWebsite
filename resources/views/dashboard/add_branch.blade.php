@extends('layouts.dashboard.dashboard_main.dashboard_main')
@section('content')
    <div class="content container">
        <div class="contenttWrapper">
            <h2>Good morning Dr/ Osama</h2>
            <form class="newForm">
                <div class="formGroup">
                    <label for="bType">Branch Type</label>
                    <select id="bType" class="form-select">
                        <option>Select branch type</option>
                        <option>Clinic</option>
                        <option>Center</option>
                    </select>
                </div>
                <div class="formGroup">
                    <label for="bName">Branch Name In Arabic</label>
                    <input type="text" id="bName" class="inputField form-control" />
                </div>
                <div class="formGroup">
                    <label for="government">Government</label>
                    <select id="government" class="form-select" onchange="handleGovernmentChange(event)">
                        <option>Select a government</option>
                        <option value="Cairo">Cairo</option>
                        <option value="Dakahlia">Dakhlia</option>
                    </select>
                </div>
                <div class="formGroup">
                    <label for="city">City</label>
                    <select id="city" class="form-select">
                        <option>Select a city</option>
                    </select>
                </div>
                <div class="formGroup">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="tel" id="phoneNumber" class="inputField form-control" />
                </div>
                <div class="formGroup">
                    <label for="comRegNum">Commercial Registration Number</label>
                    <input type="text" id="comRegNum" class="inputField form-control" />
                </div>
                <div class="formGroup">
                    <label for="taxIdNum">Tax ID Number</label>
                    <input type="text" id="taxIdNum" class="inputField form-control" />
                </div>
                <div class="formGroup">
                    <label for="creditCrdNum">Credit Card Number</label>
                    <input type="text" id="creditCrdNum" class="inputField form-control" />
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
