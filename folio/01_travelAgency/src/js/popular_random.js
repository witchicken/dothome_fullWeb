const btn = document.querySelector(".btn_random");
const random_view = document.querySelector(".random_view");
btn.addEventListener("click", () => {
  const randomNum = getRandomInt(0, 9);
  random_view.innerText = travel_list[randomNum];
});
const travel_list = [
  "방콕",
  "홍콩",
  "오사카",
  "세부",
  "하와이",
  "타이페이",
  "오키나와",
  "도쿄",
  "제주",
];
function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min)) + min; //최댓값은 제외, 최솟값은 포함
}
