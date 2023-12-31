/*  Slideshow */
let slideIndex = 1;
showSlides(slideIndex);

let slideTimer = setInterval(() => {
  plusSlides(1);
}, 5000);

// Next/previous controls
function plusSlides(n) {
  clearInterval(slideTimer);
  slideTimer = setInterval(() => {
    plusSlides(1);
  }, 5000);
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  clearInterval(slideTimer);
  slideTimer = setInterval(() => {
    plusSlides(1);
  }, 5000);
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = slides.length }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex - 1].style.display = "block";
}
