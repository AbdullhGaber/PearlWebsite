let showPassword = false;

function handleTogglePasswordVisibility() {
    const passwordInput = document.getElementById("password");
    const eyeIcon = document.getElementById("showPass");

    if (!eyeIcon) {
        console.error("Element with ID 'showPass' not found");
        return;
    }

    showPassword = !showPassword;
    passwordInput.type = showPassword ? "text" : "password";

    eyeIcon.classList.toggle("fa-eye", !showPassword);
    eyeIcon.classList.toggle("fa-eye-slash", showPassword);
}