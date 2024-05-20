@extends('layouts.auth.main_auth')
@section('content')
    <div class="container">
        <div class="authWrapper">
            <div class="authWrapper2">
                <form class="p-4"
                onsubmit="return handleSubmit(event)" onkeypress="handleKeyPress(event)"
                action="{{ route('auth.sign_up')}}" method="POST">
                @csrf
                    <h1 class="mb-1 text-center text-dark fw-bold authHeader">Register</h1>
                    <h6 class="mb-4 text-center">Create Your Branch</h6>
                    <div class="text-center mb-4">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="branchName" id="branchName" class="form-control" placeholder="Branch Name"
                            onchange="handleBranchNameChange(event)" />
                        <p class="error-message ms-2" id="branchNameErrMsg"></p>
                    </div>

                    <div class="mb-3">
                        <select name="branchType" class="form-select" id="dropdownBranch" onchange="handleBranchTypeChange(event)">
                            <option value="" class="firstOp">Branch Type</option>
                            <option value="Clinic">Clinic</option>
                            <option value="Center">Center</option>
                            <option value="Center">Hospital</option>
                        </select>
                        <p class="error-message ms-2" id="branchTypeErrMsg"></p>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="government" class="form-control" placeholder="Government" />
                        <p class="error-message ms-2"></p>
                    </div>
                     <div class="mb-3">
                        <input type="text" name="city" class="form-control" placeholder="City" />
                        <p class="error-message ms-2"></p>
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="mobile" id="branchMobNum" class="form-control" placeholder="Branch Mobile Number"
                            onchange="handleBranchMobileNumberChange(event)" />
                        <p class="error-message ms-2" id="branchMobileNumberErrMsg"></p>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="CRN" id="CommercialNumber" class="form-control"
                            onchange="handleCommercialNumberChange(event)"
                            placeholder="Commercial Registration Number" />
                        <p class="error-message ms-2" id="commercialNumberErrMsg"></p>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="taxId" id="taxId" class="form-control" placeholder="Tax ID Number"
                            oninput="formatTaxId(this)" />
                        <p class="error-message ms-2" id="taxIdNumberErrMsg"></p>
                    </div>
                    <div>
                        <a href="{{ route('auth.second_register') }}" class="arrow-button float-start">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                        <button type="submit" class="btn-navy float-end" id="regBtn">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Define cities for each government
        const citiesByGovernment = {
            Cairo: ["Nasr City", "Giza"],
            Dakahlia: ["Mansoura", "Bilqas"]
        };

        // Function to update city dropdown options
        function updateCityDropdown(selectedGovernment) {
            const cityDropdown = document.getElementById('dropdownCity');
            cityDropdown.innerHTML = '<option value="" class="firstOp">Select City</option>';
            if (selectedGovernment) {
                const cities = citiesByGovernment[selectedGovernment];
                cities.forEach(city => {
                    const option = document.createElement('option');
                    option.value = city;
                    option.textContent = city;
                    cityDropdown.appendChild(option);
                });
                cityDropdown.removeAttribute('disabled');
            } else {
                cityDropdown.setAttribute('disabled', 'disabled');
            }
        }

        // Event listener for government dropdown change
        function handleGovernmentChange(event) {
            const selectedGovernment = event.target.value;
            updateCityDropdown(selectedGovernment);
        }

        const governmentDropdown = document.getElementById('dropdownGov');
        governmentDropdown.addEventListener('change', handleGovernmentChange);
        updateCityDropdown(governmentDropdown.value);

        // Function to format tax ID as xxx-xxx-xxx
        function formatTaxId(input) {
            let value = input.value.replace(/\D/g, '');
            value = value.slice(0, 9);
            let formattedValue = '';
            for (let i = 0; i < value.length; i++) {
                if (i > 0 && i % 3 === 0) {
                    formattedValue += '-';
                }
                formattedValue += value[i];
            }
            input.value = formattedValue;
        }
    </script>

@endsection
