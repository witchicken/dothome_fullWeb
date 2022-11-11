const Home_slide_left = document.getElementById("Home_slide_left");
const Home_slide_right = document.getElementById("Home_slide_right");

const Home_slide_1 = document.querySelector(".Home_slide_1");
const Home_slide_2 = document.querySelector(".Home_slide_2");
const Home_slide_3 = document.querySelector(".Home_slide_3");
const Home_slide_4 = document.querySelector(".Home_slide_4");

function toLeft() {
  const Home_slide_num = document.getElementById("Home_slide_num");
  const Home_main_description_1 = document.querySelector(
    ".Home_main_description_1"
  );
  const Home_main_description_2 = document.querySelector(
    ".Home_main_description_2"
  );
  const Home_main_description_3 = document.querySelector(
    ".Home_main_description_3"
  );
  const Home_main_description_4 = document.querySelector(
    ".Home_main_description_4"
  );
  Home_slide_num.innerText = Number(Home_slide_num.innerText) - 1;
  if (Home_slide_num.innerText == 0) {
    Home_slide_num.innerText = 4;
  }
  Home_slide_1.classList.remove("visible");
  Home_slide_2.classList.remove("visible");
  Home_slide_3.classList.remove("visible");
  Home_slide_4.classList.remove("visible");

  switch (Number(Home_slide_num.innerText)) {
    case 1:
      Home_slide_1.classList.add("visible");
      Home_main_description_1.style.left = "200px";
      Home_main_description_2.style.left = "-200px";
      Home_main_description_3.style.left = "-200px";
      Home_main_description_4.style.left = "-200px";
      break;
    case 2:
      Home_slide_2.classList.add("visible");
      Home_main_description_1.style.left = "-200px";
      Home_main_description_2.style.left = "200px";
      Home_main_description_3.style.left = "-200px";
      Home_main_description_4.style.left = "-200px";
      break;
    case 3:
      Home_slide_3.classList.add("visible");
      Home_main_description_1.style.left = "-200px";
      Home_main_description_2.style.left = "-200px";
      Home_main_description_3.style.left = "200px";
      Home_main_description_4.style.left = "-200px";

      break;
    case 4:
      Home_slide_4.classList.add("visible");
      Home_main_description_1.style.left = "-200px";
      Home_main_description_2.style.left = "-200px";
      Home_main_description_3.style.left = "-200px";
      Home_main_description_4.style.left = "200px";
      break;
    default:
      break;
  }
}
function toRight() {
  const Home_slide_num = document.getElementById("Home_slide_num");
  const Home_main_description_1 = document.querySelector(
    ".Home_main_description_1"
  );
  const Home_main_description_2 = document.querySelector(
    ".Home_main_description_2"
  );
  const Home_main_description_3 = document.querySelector(
    ".Home_main_description_3"
  );
  const Home_main_description_4 = document.querySelector(
    ".Home_main_description_4"
  );
  Home_slide_num.innerText = Number(Home_slide_num.innerText) + 1;
  if (Home_slide_num.innerText == 5) {
    Home_slide_num.innerText = 1;
  }
  Home_slide_1.classList.remove("visible");
  Home_slide_2.classList.remove("visible");
  Home_slide_3.classList.remove("visible");
  Home_slide_4.classList.remove("visible");

  switch (Number(Home_slide_num.innerText)) {
    case 1:
      Home_slide_1.classList.add("visible");
      Home_main_description_1.style.left = "200px";
      Home_main_description_2.style.left = "-200px";
      Home_main_description_3.style.left = "-200px";
      Home_main_description_4.style.left = "-200px";
      break;
    case 2:
      Home_slide_2.classList.add("visible");
      Home_main_description_1.style.left = "-200px";
      Home_main_description_2.style.left = "200px";
      Home_main_description_3.style.left = "-200px";
      Home_main_description_4.style.left = "-200px";
      break;
    case 3:
      Home_slide_3.classList.add("visible");
      Home_main_description_1.style.left = "-200px";
      Home_main_description_2.style.left = "-200px";
      Home_main_description_3.style.left = "200px";
      Home_main_description_4.style.left = "-200px";

      break;
    case 4:
      Home_slide_4.classList.add("visible");
      Home_main_description_1.style.left = "-200px";
      Home_main_description_2.style.left = "-200px";
      Home_main_description_3.style.left = "-200px";
      Home_main_description_4.style.left = "200px";

      break;
    default:
      break;
  }

  //move text
}

Home_slide_left.addEventListener("click", toLeft);
Home_slide_right.addEventListener("click", toRight);
setInterval(toRight, 7000);

//moveTO
let main_offsetTop = document.getElementById("move_main").offsetTop;
let skill_offsetTop = document.getElementById("move_skill").offsetTop;
let portfolio_offsetTop = document.getElementById("move_portfolio").offsetTop;

let Home_movebtn_main = document.querySelector(".Home_movebtn_main");
let Home_movebtn_skill = document.querySelector(".Home_movebtn_skill");
let Home_movebtn_portfolio = document.querySelector(".Home_movebtn_portfolio");
let headerHeight = document.querySelector(".header").offsetHeight;

function scrollfunc(targ) {
  window.scrollTo({ top: targ - headerHeight, behavior: "smooth" });
  console.log(document.body.offsetHeight);
  console.log(document.body.clientHeight);
}

Home_movebtn_main.addEventListener("click", () => scrollfunc(main_offsetTop));
Home_movebtn_skill.addEventListener("click", () => scrollfunc(skill_offsetTop));
Home_movebtn_portfolio.addEventListener("click", () =>
  scrollfunc(portfolio_offsetTop)
);
