var slides = document.querySelectorAll('#testimonials .testimonial');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide, 4000);

let navbar = document.getElementsByClassName("navbar_container")[0];
let newNavbar = navbar.cloneNode(true);
newNavbar.removeChild(newNavbar.childNodes[1]); //remove the top bar
newNavbar.className = "navbar_container--fixed";
document.body.appendChild(newNavbar);
let jumbotron = document.getElementsByClassName("jumbotron_container")[0];

let pastJumbotron = false;
let previousPastJumbotron = false;

window.onscroll = function() {    
    if (window.scrollY > (jumbotron.offsetTop + jumbotron.offsetHeight)) {
        pastJumbotron = true;
    }
    else {
        pastJumbotron = false;
    }

    if(previousPastJumbotron !== pastJumbotron) {
        if(pastJumbotron === true) {
            newNavbar.className = "navbar_container--fixed navbar_container--show";
        }
        else {
            newNavbar.className = "navbar_container--fixed";  
        }
    }

    previousPastJumbotron = pastJumbotron;
}

function nextSlide() {
    slides[currentSlide].className = 'testimonial';
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].className = 'testimonial showing';
}