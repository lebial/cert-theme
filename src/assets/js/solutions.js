import getNavHeight, { addArrowToSlider } from "./utils/utils";

jQuery(document).ready(function ($) {
  function setNullMargin() {
    const { navHeight } = getNavHeight();
    $(".solutions__header").css("margin-top", `${navHeight}px`);
  }

  function addTopBanner() {
    const header = $('body');
    $(header).prepend(`<div class="w-full p-8 bg-blue-400 flex justify-center text-white">
    Maximize the Impact of Your Clinical Point Solutions. 
    <a class="font-bold underline" style="margin: 0 10px; position: static;" href="#clinicalPointSolutions">Learn More </a> &rarr;
    </div>`);
  }

  if (window.location.href.includes("solutions")) {
    setNullMargin();
    addTopBanner();
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
