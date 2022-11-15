let logout = document.querySelector(".logout")
document.querySelector(".profile-1").onclick = function () {
  logout.classList.toggle("open")
}

"use strict";

const modal = document.querySelector(".modal_1");
const overlay = document.querySelector(".overlay_1");
const btnCloseModel = document.querySelector(".close-modal");
const btnsOpenModel = document.querySelectorAll(".div-bar");
console.log(btnsOpenModel);
const openModal = function () {
  modal.classList.remove("hidden_1");
  overlay.classList.remove("hidden_1");
};
const closeModal = function () {
  modal.classList.add("hidden_1");
  overlay.classList.add("hidden_1");
};
for (let i = 0; i < btnsOpenModel.length; i++) {
  btnsOpenModel[i].addEventListener("click", openModal);
}
btnCloseModel.addEventListener("click", closeModal);

document.addEventListener("keydown", function (e) {
  // e ==> event
  /*   console.log(e.key); */
  if (e.key === "Escape" && !modal.classList.contains("hidden_1")) {
    closeModal();
  }
});