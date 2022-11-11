const slidesHotel = document.querySelector(".hotel_container");
const slideHotel = document.querySelectorAll(".hotel_container li");
let currentIndexHotel = 0;
let slideCountHotel = slideHotel.length;
let slideWidthHotel = 450;
let slideMarginHotel = 25;
const prevBtnHotel = document.querySelector(".hotel_arrow_left");
const nextBtnHotel = document.querySelector(".hotel_arrow_right");

duplicateSlideHotel();

function duplicateSlideHotel() {
  for (var i = 0; i < slideCountHotel; i++) {
    let dupSlideHotel = slideHotel[i].cloneNode(true);
    dupSlideHotel.classList.add("duplicatedHotel");
    slidesHotel.appendChild(dupSlideHotel);
  }
  for (var i = slideCountHotel - 1; i >= 0; i--) {
    let dupSlideHotel = slideHotel[i].cloneNode(true);
    dupSlideHotel.classList.add("duplicatedHotel");
    slidesHotel.prepend(dupSlideHotel);
  }
  updateWidthHotel();
  setInitialPosHotel();
  setTimeout(function () {
    slidesHotel.classList.add("animatedHotel");
  }, 100);
}
function updateWidthHotel() {
  let currentSlidesHotel = document.querySelectorAll(".hotel_container li");
  let newSlideCountHotel = currentSlidesHotel.length;
  let newWidthHotel =
    (slideWidthHotel + slideMarginHotel) * newSlideCountHotel -
    slideMarginHotel +
    "px";
  slidesHotel.style.width = newWidthHotel;
}

function setInitialPosHotel() {
  let initialTranslateValueHotel =
    -(slideWidthHotel + slideMarginHotel) * slideCountHotel;
  slidesHotel.style.transform =
    "translateX(" + initialTranslateValueHotel + "px)";
}

nextBtnHotel.addEventListener("click", () => {
  moveSlideHotel(currentIndexHotel + 1);
});
prevBtnHotel.addEventListener("click", () => {
  moveSlideHotel(currentIndexHotel - 1);
});

function moveSlideHotel(num) {
  slidesHotel.style.left = -num * (slideWidthHotel + slideMarginHotel) + "px";
  currentIndexHotel = num;
  if (
    currentIndexHotel == slideCountHotel ||
    currentIndexHotel == -slideCountHotel
  ) {
    setTimeout(() => {
      slidesHotel.classList.remove("animatedHotel");
      slidesHotel.style.left = "0px";
      currentIndexHotel = 0;
    }, 500);
    setTimeout(() => {
      slidesHotel.classList.add("animatedHotel");
    }, 600);
  }
}
