document.addEventListener('DOMContentLoaded', function () {
    const menuTrigger = document.querySelector('.menu-trigger');
    const navList = document.querySelector('.main-nav .nav');
    const navItems = document.querySelectorAll('.main-nav .nav li');

    menuTrigger.addEventListener('click', () => {
        menuTrigger.classList.toggle('menu-open');
        navList.classList.toggle('show');
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth > 768) {
            menuTrigger.classList.remove('menu-open');
            navList.classList.remove('show');
        }
    });

    navItems.forEach(item => {
        item.addEventListener('click', () => {
            menuTrigger.classList.remove('menu-open');
            navList.classList.remove('show');
        });
    });
});

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