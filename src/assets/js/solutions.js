import getNavHeight, { addArrowToSlider } from "./utils/utils";

jQuery(document).ready(function ($) {
  let intuitiveData = {};
  let activeData = {};

  function setNullMargin() {
    const { navHeight } = getNavHeight();
    $(".solutions__header").css("margin-top", `${navHeight}px`);
  }

  function addTopBanner() {
    const header = $('header');
    $(header).after(`<div class="w-full p-8 flex justify-center text-white" style="background-color: #c05454; font-size: 20px;">
    Maximize the Impact of Your Clinical Point Solutions. 
    <a class="font-bold underline" style="margin: 0 10px; position: static;" href="#clinicalPointSolutions">Learn More </a> &rarr;
    </div>`);
  }

  function createBrochureCarousel() {
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
  }

  function setActiveStyles() {
    debugger;
    const buttons = $('.option__button');
    Object.values(buttons).forEach(button => {
      if ($(button.children).text() === activeData['option_title']) $(button).addClass('active__option');
      $(button).removeClass('active__option');
    });
  }

  function setIntuitiveData(data) {
    activeData = data;
    $('#intuitiveImage').attr('src', data['option_image']);
    $('#intuitiveDescription').innerHTML = data['option_description'];
    $('#intuitiveLink').attr('src', data['option_link']);
    setActiveStyles();
  }

  function parseInsightsData() {
    const data = JSON.parse(
      document.getElementById("intuitiveInsightsData").innerHTML
    );
    activeData = Object.values(data)[0];

    intuitiveData = Object.values(data).reduce((acc, value) => {
      acc[value['option_title']] = value
      return acc;
    }, {});

    setIntuitiveData(activeData);
  }

  function handleOptionChange() {
    $('.option__action__button').click((e) => {
      setIntuitiveData(intuitiveData[e.target.name])
    });
  }

  if (window.location.href.includes("solutions")) {
    addTopBanner();
    createBrochureCarousel();
    parseInsightsData();
    handleOptionChange();
  }


});
