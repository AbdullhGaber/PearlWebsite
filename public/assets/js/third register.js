let selectedGovernment = null;
let selectedCity = null;
let selectedBranchType = null;
let selectedPaymentPlan = null;
let commercialNumber = "";
let taxIdNumber = "";
let branchMobileNumber = "";
let branchName = "";

let errors = {
  commercialNumber: "",
  taxIdNumber: "",
  branchType: "",
  government: "",
  city: "",
  paymentPlan: "",
  branchMobileNumber: "",
  branchName: "",
};

function handlePreviousStep() {
  PreviousStep();
}

function handleGovernmentChange(event) {
  const governmentValue = event.target.value;

  errors.government = "";

  if (!governmentValue.trim()) {
    errors.government = "Government is required";
  } else {
    selectedGovernment = governmentValue;
  }
}

function handleCityChange(event) {
  const cityValue = event.target.value;
  selectedCity = cityValue;

  errors.city = "";
}

function handleBranchTypeChange(event) {
  const branchTypeValue = event.target.value;
  selectedBranchType = branchTypeValue;

  errors.branchType = "";
}

function handlePaymentPlanChange(event) {
  const paymentPlanValue = event.target.value;
  selectedPaymentPlan = paymentPlanValue;

  errors.paymentPlan = "";
}

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
}

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
}

function handleBranchMobileNumberChange(event) {
  const value = event.target.value;
  branchMobileNumber = value;
  const phoneRegex = /^\+20(122|127|128|120|100|106|109|101|111|114|112|155|102)\d{7}$/;
  if (!phoneRegex.test(value.trim())) {
    errors.branchMobileNumber = "Phone number must start with +20 and be a valid number";
  } else {
    errors.branchMobileNumber = "";
  }
}

function handleBranchNameChange(event) {
  const value = event.target.value.trim();
  const arabicRegex = /^[\u0600-\u06FF\s]*$/;

  if (arabicRegex.test(value) || value === "") {
    branchName = value;
    errors.branchName = "";
  } else {
    errors.branchName = "Arabic characters only";
  }
}

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

  errors = newErrors;

  return isValid;
}

function handleSubmit(e) {
  e.preventDefault();
  const isValid = validateForm();

  if (isValid) {
    console.log("Registration Done");
  }
}

function handleKeyPress(e) {
  if (e.key === "Enter") {
    e.preventDefault();
  }
}
