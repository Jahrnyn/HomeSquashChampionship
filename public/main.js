
// Set the date we're counting down to
var countDownDate = new Date("Jul 15, 2023 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function () {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);



/* Toast notifications disappers */
var toastContainer = document.querySelector('.toast-container');
var closeButton = document.querySelector('.toast-close');

// by clicking
if (toastContainer) {
  closeButton.addEventListener('click', closeToast);

  function closeToast() {
    toastContainer.remove();
  }
}

// by timing
if (toastContainer) {
  var duration = 3000;
  setTimeout(function() {
    toastContainer.remove();
  }, duration);
}





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
  }, 3000);
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
