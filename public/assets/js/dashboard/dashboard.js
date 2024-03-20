function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('active');
}
document.addEventListener("DOMContentLoaded", function () {
    const sidebarLinks = document.querySelectorAll('.sidebar a');
    const currentPath = window.location.pathname;

    sidebarLinks.forEach(function (link) {
        const linkPath = link.getAttribute('href');

        if (currentPath.includes(linkPath)) {
            link.classList.add('active');
        }

        link.addEventListener('click', function () {
            sidebarLinks.forEach(function (innerLink) {
                innerLink.classList.remove('active');
            });
            link.classList.add('active');
        });
    });
});