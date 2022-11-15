"use strict";
const slides_1 = document.querySelectorAll(".slide_1");
const btnLeft_1 = document.querySelector(".slider__btn--left_1");
const btnRight_1 = document.querySelector(".slider__btn--right_1");
let curSlide_1 = 0;
const maxSlide_1 = slides_1.length;

const goToSlide_1 = function (slide) {
  slides_1.forEach(
    (s, i) => (s.style.transform = `translateX(${100 * (i - slide)}%)`)
  );
};
goToSlide_1(0);

const nextSlide_1 = function () {
  if (curSlide_1 === maxSlide_1 - 1) {
    curSlide_1 = 0;
  } else {
    curSlide_1++;
  }
  goToSlide_1(curSlide_1);
};

const privSlide_1 = function () {
  if (curSlide_1 === 0) {
    curSlide_1 = maxSlide_1 - 1;
  } else {
    curSlide_1--;
  }
  goToSlide_1(curSlide_1);
};

btnRight_1.addEventListener("click", nextSlide_1);
btnLeft_1.addEventListener("click", privSlide_1);
document.addEventListener("keydown", function (e) {
  if (e.key === "ArrowLeft") privSlide_1();
  e.key === "ArrowRight" && nextSlide_1();
});

let fill = document.querySelectorAll(".heart-boxx");
let heart = document.querySelectorAll(".section-5 .box .content .end-box path.heart-box");
const fillHeart = function(){
  heart.classList.remove("focus");
}
for(let i = 0; i < fill.length; i++){
  fill[i].addEventListener("click", fillHeart)
}

