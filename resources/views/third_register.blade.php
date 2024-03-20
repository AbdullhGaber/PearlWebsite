@include('layouts.header')
<html lang="en">
<head>
    <link rel="stylesheet" href="./assets/css/thirdregister.css">
</head>
<body>
    <div class="container">
        <div class="authWrapper">
            <div class="authWrapper2">
                <form class="p-4" onsubmit="handleSubmit(event)" onkeypress="handleKeyPress(event)">
                    <h1 class="mb-1 text-center text-dark fw-bold authHeader">Register</h1>
                    <h6 class="mb-4 text-center">Create Your Branch</h6>
                    <div class="text-center mb-4">
                    </div>
                    <div class="mb-3">
                        <select class="form-select" id="dropdownBranch" onchange="handleBranchTypeChange(event)">
                            <option value="" class="firstOp">Branch Type</option>
                            <option value="Clinic">Clinic</option>
                            <option value="Center">Center</option>
                        </select>
                        <p class="invalid-feedback ms-2" id="branchTypeErrMsg"></p>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" id="dropdownGov" onchange="handleGovernmentChange(event)">
                            <option value="" class="firstOp">Select Government</option>
                            <option value="Cairo">Cairo</option>
                            <option value="Dakahlia">Dakahlia</option>
                        </select>
                        <p class="invalid-feedback ms-2" id="governmentErrMsg"></p>
                    </div>

                    <div class="mb-3">
                        <select class="form-select" id="dropdownCity" onchange="handleCityChange(event)" disabled>
                            <option value="" class="firstOp">Select City</option>
                        </select>
                        <p class="invalid-feedback ms-2" id="cityErrMsg"></p>
                    </div>
                    <div class="mb-3">
                        <input type="text" id="branchName" class="form-control" placeholder="Branch Name In Arabic"
                            onchange="handleBranchNameChange(event)" />
                        <p class="invalid-feedback ms-2" id="branchNameErrMsg"></p>
                    </div>
                    <div class="mb-3">
                        <input type="tel" id="branchMobNum" class="form-control" placeholder="Branch Mobile Number"
                            onchange="handleBranchMobileNumberChange(event)" />
                        <p class="invalid-feedback ms-2" id="branchMobileNumberErrMsg"></p>
                    </div>
                    <div class="mb-3">
                        <input type="text" id="CommercialNumber" class="form-control"
                            onchange="handleCommercialNumberChange(event)"
                            placeholder="Commercial Registration Number" />
                        <p class="invalid-feedback ms-2" id="commercialNumberErrMsg"></p>
                    </div>
                    <div class="mb-3">
                        <input type="text" id="taxId" class="form-control" onchange="handleTaxIdNumberChange(event)"
                            placeholder="Tax ID Number" />
                        <p class="invalid-feedback ms-2" id="taxIdNumberErrMsg"></p>
                    </div>
                    <div class="mb-3">
                        <input type="text" id="crdtCrd" class="form-control" onchange="handleCreditCardChange(event)"
                            placeholder="Credit Card Number" />
                        <p class="invalid-feedback ms-2" id="creditCardErrMsg"></p>
                    </div>
                    <div>
                        <a href="second register.html" class="arrow-button float-start">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                        <button type="submit" class="btn-navy float-end" id="regBtn">
                            Register
                        </button>
                    </div>
            </div>
            </form>
        </div>
    </div>

    <script src="./assets/js/third register.js"></script>
    <script src="./assets/js/pearl.js"></script>
</body>

</html>
