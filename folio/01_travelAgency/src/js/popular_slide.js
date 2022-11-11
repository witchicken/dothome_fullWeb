const slides = document.querySelector(".popular_container");
const slide = document.querySelectorAll(".popular_container li");
let currentIndex = 0;
let slideCount = slide.length;
let slideWidth = 450;
let slideMargin = 25;
const prevBtn = document.querySelector(".fa-arrow-left");
const nextBtn = document.querySelector(".fa-arrow-right");

duplicateSlide();

function duplicateSlide() {
  for (var i = 0; i < slideCount; i++) {
    let dupSlide = slide[i].cloneNode(true);
    dupSlide.classList.add("duplicated");
    slides.appendChild(dupSlide);
  }
  for (var i = slideCount - 1; i >= 0; i--) {
    let dupSlide = slide[i].cloneNode(true);
    dupSlide.classList.add("duplicated");
    slides.prepend(dupSlide);
  }
  updateWidth();
  setInitialPos();
  setTimeout(function () {
    slides.classList.add("animated");
  }, 100);
}
function updateWidth() {
  let currentSlides = document.querySelectorAll(".slide_container li");
  let newSlideCount = currentSlides.length;
  let newWidth =
    (slideWidth + slideMargin) * newSlideCount - slideMargin + "px";
  slides.style.width = newWidth;
}

function setInitialPos() {
  let initialTranslateValue = -(slideWidth + slideMargin) * slideCount;
  slides.style.transform = "translateX(" + initialTranslateValue + "px)";
}

nextBtn.addEventListener("click", () => {
  moveSlide(currentIndex + 1);
});
prevBtn.addEventListener("click", () => {
  moveSlide(currentIndex - 1);
});

function moveSlide(num) {
  slides.style.left = -num * (slideWidth + slideMargin) + "px";
  currentIndex = num;
  if (currentIndex == slideCount || currentIndex == -slideCount) {
    setTimeout(() => {
      slides.classList.remove("animated");
      slides.style.left = "0px";
      currentIndex = 0;
    }, 500);
    setTimeout(() => {
      slides.classList.add("animated");
    }, 600);
  }
}
