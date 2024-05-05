let showPassword = false;
let selectedImage = null;
let formData = {
  firstName: "",
  lastName: "",
  email: "",
  password: "",
  DOB: "",
  phone: "",
  title: "",
  license: null,
};
let errors = {
  firstName: "",
  lastName: "",
  email: "",
  password: "",
  DOB: "",
  phone: "",
  title: "",
  license: "",
};

function handleInputChange(e) {
  const { name, value } = e.target;

  formData = {
    ...formData,
    [name]: value,
  };

  errors = {
    ...errors,
    [name]: "",
  };
}

function handlePasswordKeyUp(e) {
  const password = e.target.value;
  updatePasswordStrengthUI(checkPasswordStrength(password));

  const passwordStrengthIndicator = document.getElementById("passwordStrengthIndicator");
  passwordStrengthIndicator.style.display = "block";
}

function checkPasswordStrength(password) {
  const hasUpperCase = /[A-Z]/.test(password);
  const hasLowerCase = /[a-z]/.test(password);
  const hasDigit = /\d/.test(password);
  const hasSpecialChar = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/.test(password);

  const metricsAchieved = [
    password.length >= 8,
    hasUpperCase,
    hasDigit,
    hasSpecialChar,
    hasLowerCase,
  ].filter(Boolean);

  if (metricsAchieved.length === 5) {
    return "strong";
  } else if (metricsAchieved.length >= 3) {
    return "medium";
  } else if (metricsAchieved.length <= 2) {
    return "weak";
  } else {
    return "";
  }
}

function updatePasswordStrengthUI(passwordStrength) {
  const progressBar = document.getElementById("passwordStrengthBar");
  const PassPar = document.getElementById("passwordStrengthPar");
  const ErrorMsg = document.getElementById("PassErrorMsg");

  if (progressBar) {
    switch (passwordStrength) {
      case "strong":
        progressBar.style.width = "100%";
        progressBar.style.backgroundColor = "green";
        PassPar.innerText = "Strong";
        ErrorMsg.innerText = "";
        break;
      case "medium":
        progressBar.style.width = "66%";
        progressBar.style.backgroundColor = "orange";
        PassPar.innerText = "Medium";
        ErrorMsg.innerText =
          "Password must be at least 8 characters, contain capital & small letters, special characters, and digits";
        break;
      case "weak":
        progressBar.style.width = "33%";
        progressBar.style.backgroundColor = "red";
        PassPar.innerText = "Weak";
        ErrorMsg.innerText =
          "Password must be at least 8 characters, contain capital & small letters, special characters, and digits";
        break;
      default:
        progressBar.style.width = "0%";
        progressBar.style.backgroundColor = "";
        ErrorMsg.innerText =
          "Password must be at least 8 characters, contain capital & small letters, special characters, and digits";
    }
  }
}

function handleTogglePasswordVisibility() {
  showPassword = !showPassword;
}

function handleImageChange(e) {
  const file = e.target.files[0];

  if (file) {
    const reader = new FileReader();

    reader.onload = function (event) {
      selectedImage = event.target.result;
    };

    reader.readAsDataURL(file);
  } else {
    selectedImage = null;
  }
}

function validateForm(event) {
  let isValid = true;

  const newErrors = { ...errors };

  if (formData.firstName.trim() === "") {
    newErrors.firstName = "First name is required";
    isValid = false;
  }

  if (formData.lastName.trim() === "") {
    newErrors.lastName = "Last name is required";
    isValid = false;
  }

  if (formData.title.trim() === "") {
    newErrors.title = "Title is required";
    isValid = false;
  }

  if (!formData.license) {
    newErrors.license = "Professional license is required";
    isValid = false;
  }

  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(formData.email)) {
    newErrors.email = "Invalid email address";
    isValid = false;
  }
  if (formData.email.trim() === "") {
    newErrors.email = "Email is required";
    isValid = false;
  }

  if (formData.password.trim() === "") {
    newErrors.password = "Password is required";
    isValid = false;
  }

  if (formData.DOB.trim() === "") {
    newErrors.DOB = "Date of birth is required";
    isValid = false;
  } else {
    const selectedDate = new Date(formData.DOB);
    const currentDate = new Date("1998-01-01");

    if (selectedDate > currentDate) {
      newErrors.DOB = "You are not old enough to register";
      isValid = false;
    }
  }

  const phoneRegex = /^\+20(122|127|128|120|100|106|109|101|111|114|112|155|102)\d{7}$/;
  if (!phoneRegex.test(formData.phone.trim())) {
    newErrors.phone =
      "Phone number must start with +20 and be a valid number";
    isValid = false;
  }
  if (formData.phone.trim() === "") {
    newErrors.phone = "Phone number is required";
    isValid = false;
  }

  errors = newErrors;

  updateErrorMessages();

  if (!isValid) {
    if (event.preventDefault) {
      event.preventDefault();
    } else {
      event.returnValue = false;
    }
  }

  return isValid;
}

function updateErrorMessages() {
  console.log("Updating error messages...");
  console.log("Errors:", errors);

  document.getElementById("fnameError").innerText = errors.firstName;
  document.getElementById("lnameError").innerText = errors.lastName;
  document.getElementById("emailError").innerText = errors.email;
  document.getElementById("passwordError").innerText = errors.password;
  document.getElementById("dobError").innerText = errors.DOB;
  document.getElementById("phoneError").innerText = errors.phone;
  document.getElementById("titleError").innerText = errors.title;
  document.getElementById("licenseError").innerText = errors.license;
}
