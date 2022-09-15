import getNavHeight, { addArrowToSlider } from "./utils/utils";

jQuery(document).ready(function ($) {
  function setNullMargin() {
    const { navHeight } = getNavHeight();
    $(".solutions__header").css("margin-top", `${navHeight}px`);
  }

  if (window.location.href.includes("solutions")) {
    setNullMargin();
  }

  //brochure carousel

  const slider = document.querySelector(".slider__container");
  const option = document.querySelectorAll(".nav__options--option");

  option.forEach((opt, i) => {
    option[i].addEventListener("click", () => {
      let position = i;
      let operation = position * -33.3;

      slider.style.transform = `translateX(${operation}%)`;

      option.forEach((opt, i) => {
        option[i].classList.remove("active");
      });
      option[i].classList.add("active");
    });
  });
});
