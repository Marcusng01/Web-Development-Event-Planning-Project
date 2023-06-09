//Carousel Logic
const carousel = document.querySelector('.carousel');
const carouselItems = document.querySelector('.carousel-items');

let currentIndex = 0;

function slideCarousel() {
  carouselItemWidth = carousel.querySelector('.carousel-item').offsetWidth;
  carouselItems.style.transform = `translateX(-${currentIndex * carouselItemWidth}px)`;
}
 
function showNextItem() {
  if(!carouselItems.classList.contains("transition"))
    carouselItems.classList.add("transition");
  currentIndex++;
  if (currentIndex >= carouselItems.children.length) {
  currentIndex = 0;
  }
  slideCarousel();
}

function showPreviousItem() {
  if(!carouselItems.classList.contains("transition"))
    carouselItems.classList.add("transition");
  currentIndex--;
  if (currentIndex < 0) {
  currentIndex = carouselItems.children.length - 1;
  }
  slideCarousel();
}

// Add event listeners to navigation buttons or any other triggers
document.querySelector("#next-button").addEventListener('click', showNextItem);
document.querySelector("#previous-button").addEventListener('click', showPreviousItem);


function recalibrateCarousel() {
  if(carouselItems.classList.contains("transition"))
    carouselItems.classList.remove("transition");
  slideCarousel();
}

// Recalibrate the carousel when changing window size
window.addEventListener('resize',recalibrateCarousel, true);