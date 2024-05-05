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

document.addEventListener('DOMContentLoaded', function () {
    var branchDropdown = document.getElementById('branchDropdown');
    var viewBranchesLink = document.querySelector('#branchDropdownMenu a[href="view Branches.html"]');
    var addBranchLink = document.querySelector('#branchDropdownMenu a[href="add branch.html"]');
    var profileLi = document.getElementById("profileLi");

    branchDropdown.addEventListener('click', function (event) {
        event.preventDefault();
        branchDropdown.classList.toggle('show');
        if (branchDropdown.classList.contains('show')) {
            profileLi.style.marginTop = '4.5rem';
        } else {
            profileLi.style.marginTop = '0';
        }
    });

    viewBranchesLink.addEventListener('click', function (event) {
        event.preventDefault();
        window.location.href = "/view_branch";
    });

    addBranchLink.addEventListener('click', function (event) {
        event.preventDefault();
        window.location.href = "/add_branch";
    });
});

function toggleNotifications() {
    var container = document.getElementById("notificationContainer");
    if (container.style.display === "none" || container.style.display === "") {
        container.style.display = "block";
    } else {
        container.style.display = "none";
    }
}
