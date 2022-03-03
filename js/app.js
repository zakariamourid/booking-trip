const slides = document.querySelectorAll(".slide");
const next = document.querySelector(".right-arrow");
const prev = document.querySelector(".left-arrow");

let compteur = 0;
next.addEventListener("click", function () {
  compteur++;
  if (compteur > slides.length - 1) {
    compteur = 0;
  }

  slideFunction();
});
prev.addEventListener("click", function () {
  compteur--;
  if (compteur < 0) {
    compteur = slides.length - 1;
  }

  slideFunction();
});
function slideFunction() {
  slides.forEach(function (slide) {
    slide.style.transform = `translateX(-${compteur * 100}%)`;
  });
}
console.log(124124);
