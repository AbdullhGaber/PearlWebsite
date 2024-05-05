// Define variables to store selected options and input values
let selectedGovernment = null;
let selectedCity = null;
let selectedBranchType = null;
let selectedPaymentPlan = null;
let commercialNumber = "";
let taxIdNumber = "";
let branchMobileNumber = "";
let branchName = "";
let creditCard = "";

// Define an object to store error messages
let errors = {
  commercialNumber: "",
  taxIdNumber: "",
  branchType: "",
  government: "",
  city: "",
  paymentPlan: "",
  branchMobileNumber: "",
  branchName: "",
  creditCard: "",
};

// Function to handle previous step
function handlePreviousStep() {
  PreviousStep(); // Assuming this function is defined elsewhere
}

// Event handler for government selection change
function handleGovernmentChange(event) {
  const governmentValue = event.target.value;

  errors.government = "";

  if (!governmentValue.trim()) {
    errors.government = "Government is required";
  } else {
    selectedGovernment = governmentValue;
  }

  updateErrorMessages();
}

// Event handler for city selection change
function handleCityChange(event) {
  const cityValue = event.target.value;
  selectedCity = cityValue;

  errors.city = "";

  updateErrorMessages();
}

// Event handler for branch type selection change
function handleBranchTypeChange(event) {
  const branchTypeValue = event.target.value;
  selectedBranchType = branchTypeValue;

  errors.branchType = "";

  updateErrorMessages();
}

// Event handler for payment plan selection change
function handlePaymentPlanChange(event) {
  const paymentPlanValue = event.target.value;
  selectedPaymentPlan = paymentPlanValue;

  errors.paymentPlan = "";

  updateErrorMessages();
}

// Event handler for commercial number input change
function handleCommercialNumberChange(event) {
  const value = event.target.value.replace(/\D/g, "");
  if (/^\d{0,3}(\d{0,3})?(\d{0,3})?$/.test(value)) {
    commercialNumber = value.replace(/(\d{0,3})(\d{0,3})?(\d{0,3})?/, (_, p1, p2, p3) =>
      p1 ? p1 + (p2 ? "-" + p2 : "") + (p3 ? "-" + p3 : "") : ""
    );
    errors.commercialNumber = "";
  } else {
    errors.commercialNumber = "Invalid format";
  }

  updateErrorMessages();
}

// Event handler for tax ID number input change
function handleTaxIdNumberChange(event) {
  const value = event.target.value.replace(/\D/g, "");
  if (/^\d{0,3}(\d{0,3})?(\d{0,3})?$/.test(value)) {
    taxIdNumber = value.replace(/(\d{0,3})(\d{0,3})?(\d{0,3})?/, (_, p1, p2, p3) =>
      p1 ? p1 + (p2 ? "-" + p2 : "") + (p3 ? "-" + p3 : "") : ""
    );
    errors.taxIdNumber = "";
  } else {
    errors.taxIdNumber = "Invalid format";
  }

  updateErrorMessages();
}

// Event handler for branch mobile number input change
function handleBranchMobileNumberChange(event) {
  const value = event.target.value;
  branchMobileNumber = value;
  const phoneRegex = /^\+20(122|127|128|120|100|106|109|101|111|114|112|155|102)\d{7}$/;
  if (!phoneRegex.test(value.trim())) {
    errors.branchMobileNumber = "Phone number must start with +20 and be a valid number";
  } else {
    errors.branchMobileNumber = "";
  }

  updateErrorMessages();
}

// Event handler for branch name input change
function handleBranchNameChange(event) {
  const value = event.target.value.trim();
  const arabicRegex = /^[\u0600-\u06FF\s]*$/; // Regex for Arabic characters

  if (arabicRegex.test(value) || value === "") {
    branchName = value;
    errors.branchName = "";
  } else {
    errors.branchName = "Arabic characters only";
  }

  updateErrorMessages();
}

// Function to validate form inputs
function validateForm() {
  let isValid = true;
  const newErrors = { ...errors };

  if (commercialNumber.trim() === "") {
    newErrors.commercialNumber = "Commercial number is required";
    isValid = false;
  }

  if (taxIdNumber.trim() === "") {
    newErrors.taxIdNumber = "Tax ID number is required";
    isValid = false;
  }

  if (!selectedBranchType) {
    newErrors.branchType = "Branch Type is required";
    isValid = false;
  }

  if (!selectedGovernment) {
    newErrors.government = "Government is required";
    isValid = false;
  }

  if (!selectedCity) {
    newErrors.city = "City is required";
    isValid = false;
  }

  if (!selectedPaymentPlan) {
    newErrors.paymentPlan = "Payment Plan is required";
    isValid = false;
  }

  if (branchMobileNumber.trim() === "") {
    newErrors.branchMobileNumber = "Phone number is required";
    isValid = false;
  }

  if (branchName.trim() === "") {
    newErrors.branchName = "Branch name is required";
    isValid = false;
  }

  if (creditCard.trim() === "") {
    newErrors.creditCard = "Credit card number is required";
    isValid = false;
  }

  errors = newErrors;

  updateErrorMessages();

  return isValid;
}

// Function to handle form submission
function handleSubmit(e) {
  e.preventDefault();
  const isValid = validateForm();

  if (isValid) {
    console.log("Registration Done");
    // Perform further actions if form is valid
  }
}

// Function to handle key press events
function handleKeyPress(e) {
  if (e.key === "Enter") {
    e.preventDefault();
  }
}

// Attach event listeners to form elements
document.getElementById("dropdownBranch").addEventListener("change", handleBranchTypeChange);
document.getElementById("dropdownGov").addEventListener("change", handleGovernmentChange);
document.getElementById("dropdownCity").addEventListener("change", handleCityChange);
document.getElementById("CommercialNumber").addEventListener("input", handleCommercialNumberChange);
document.getElementById("taxId").addEventListener("input", handleTaxIdNumberChange);
document.getElementById("branchMobNum").addEventListener("input", handleBranchMobileNumberChange);
document.getElementById("branchName").addEventListener("input", handleBranchNameChange);
document.getElementById("regBtn").addEventListener("click", handleSubmit);
document.addEventListener("keypress", handleKeyPress);

function updateErrorMessages() {
  console.log("Updating error messages...");
  console.log("Errors:", errors);

  document.getElementById("branchTypeErrMsg").innerText = errors.branchType;
  document.getElementById("governmentErrMsg").innerText = errors.government;
  document.getElementById("cityErrMsg").innerText = errors.city;
  document.getElementById("branchNameErrMsg").innerText = errors.branchName;
  document.getElementById("branchMobileNumberErrMsg").innerText = errors.branchMobileNumber;
  document.getElementById("commercialNumberErrMsg").innerText = errors.commercialNumber;
  document.getElementById("taxIdNumberErrMsg").innerText = errors.taxIdNumber;
  document.getElementById("creditCardErrMsg").innerText = errors.creditCard;
}
