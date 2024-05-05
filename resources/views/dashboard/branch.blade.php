@extends('layouts.dashboard_main')
@section('content')

    <div class="content container">
        <div class="contenttWrapper">
            <h2>Good morning Dr/ Osama</h2>
            <form class="newForm">
                <div class="formGroup">
                    <label for="bType">Branch Type</label>
                    <select id="bType" class="form-select">
                        <option selected>Clinic</option>
                        <option>Center</option>
                    </select>
                </div>
                <div class="formGroup">
                    <label for="bName">Branch Name In Arabic</label>
                    <input type="text" id="bName" class="inputField form-control"
                        placeholder="Enter branch name in arabic" value="عيادة" />
                </div>
                <div class="formGroup">
                    <label for="government">Government</label>
                    <select id="government" class="form-select">
                        <option>Cairo</option>
                        <option selected>Dakhlia</option>
                    </select>
                </div>
                <div class="formGroup">
                    <label for="city">City</label>
                    <select id="city" class="form-select">
                        <option selected>Mansoura</option>
                        <option>Bilqas</option>
                    </select>
                </div>
                <div class="formGroup">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="tel" id="phoneNumber" class="inputField form-control"
                        placeholder="Enter your phone number" value="+201001234567" />
                </div>
                <div class="formGroup">
                    <label for="comRegNum">Commercial Registration Number</label>
                    <input type="text" id="comRegNum" class="inputField form-control"
                        placeholder="Enter your commercial registration number" value="123-456-789" />
                </div>
                <div class="formGroup">
                    <label for="taxIdNum">Tax ID Number</label>
                    <input type="text" id="taxIdNum" class="inputField form-control"
                        placeholder="Enter your  tax id number" value="324-753-286" />
                </div>
                <div class="formGroup">
                    <label for="creditCrdNum">Credit Card Number</label>
                    <input type="text" id="creditCrdNum" class="inputField form-control"
                        placeholder="Enter your credit card number" value="836-273-657" />
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
