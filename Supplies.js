let navbar = document.getElementsByClassName("navbar_container")[0];

let showNavbar = false;
let previousShowNavbar = false;

window.onscroll = function () {
    if (window.scrollY > 50) {
        showNavbar = true;
    }
    else {
        showNavbar = false;
    }

    if (previousShowNavbar !== showNavbar) {
        if (showNavbar === true) {
            navbar.className = "navbar_container navbar_container--show";
        }
        else {
            navbar.className = "navbar_container";
        }
    }

    previousShowNavbar = showNavbar;
}