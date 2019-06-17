var slides = document.querySelectorAll('#testimonials .testimonial');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide, 4000);

let navbar = document.getElementsByClassName("navbar_container")[0];
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
            navbar.className = "navbar_container navbar_container--show";
        }
        else {
            navbar.className = "navbar_container";  
        }
    }

    previousPastJumbotron = pastJumbotron;
}

function nextSlide() {
    slides[currentSlide].className = 'testimonial';
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].className = 'testimonial showing';
}