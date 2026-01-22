function toggleMenu() {
    const menu = document.querySelector(".menu-links");
    const icon = document.querySelector(".hamburger-icon");
    menu.classList.toggle("open");
    icon.classList.toggle("open");
}
let slideIndex = 0;
const AUTO_PLAY_INTERVAL = 5000; // ms

function plusSlides(n) {
  showSlides(slideIndex + n);
}

function showSlides(n) {
  const slides = document.getElementsByClassName("mySlides");
  if (!slides || slides.length === 0) return;
  // wrap index
  slideIndex = (n + slides.length) % slides.length;
  // hide all
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  // show current
  slides[slideIndex].style.display = "flex";
}

// initialize
showSlides(slideIndex);
// autoplay
setInterval(() => plusSlides(1), AUTO_PLAY_INTERVAL);