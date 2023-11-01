document.addEventListener("DOMContentLoaded", function () {
    var dropdownElement = document.querySelector(".dropdown");
    var submenus = document.querySelectorAll(
        ".dropdown-submenu .dropdown-toggle"
    );
    submenus.forEach(function (toggle) {
        toggle.addEventListener("click", function (e) {
            console.log('aa')
            e.stopPropagation();
            var submenu = this.nextElementSibling;
            if (submenu) {
                if (
                    submenu.style.display === "none" ||
                    submenu.style.display === ""
                ) {
                    submenu.style.display = "block";
                } else {
                    submenu.style.display = "none";
                }
            }
            e.preventDefault();
        });
    });
});
