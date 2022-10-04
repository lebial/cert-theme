import getNavHeight, { createObserver } from "./utils/utils";

jQuery(document).ready(function ($) {
  let intuitiveData = {};
  let activeData = {};

  function setNullMargin() {
    const { navHeight } = getNavHeight();
    $(".solutions__header").css("margin-top", `${navHeight}px`);
  }

  function handleSolutionsPlayButtonClick(version) {
    const id = `solutions${version}VideoButton`;
    const button = document.getElementById(id);
    const evtHandler = function () {
      $(`.solutions__${version}__video__overlay`).toggle();
      $(`#decisionMaking${version}Video`).get(0).play();
    };
    button.addEventListener('click', evtHandler);
  }

  function addTopBanner() {
    const header = $('header');
    $(header).after(`<div class="w-full p-1 text-center md:text-left md:p-4 flex flex-col md:flex-row justify-center text-white" style="background-color: rgb(87, 134, 228); font-size: 20px;">
    Maximize the Impact of Your Point Solutions Programs. 
    <div class=""><a class="font-bold underline" style="margin: 0 10px; position: static;" href="#clinicalPointSolutions">Learn More </a> &rarr;</div>
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
    const buttons = $('.option__button');
    Object.values(buttons).forEach(button => {
      if ($(button.children).text() === activeData['option_title']) return $(button).addClass('active__option');
      return $(button).removeClass('active__option');
    });
  }

  function setIntuitiveData(data) {
    activeData = data;
    $('#intuitiveDescription').html(data['option_description']);
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
    $('.option__action__button').click((function () {
      setIntuitiveData(intuitiveData[this.name]);
      const buttonsOverlay = $('.container__overlay');
      const { top } = $(this).parent().position();
      buttonsOverlay.animate({
        'background-position-y': `${top}px`,
      }, 300, 'linear');
    }));
  }

  function handleMobileOption() {
    const options = {
      // root: document.querySelector('.insights__button__container'),
      threshold: 0.9,
    };
    const buttons = document.querySelectorAll('.option__button');
    const observer = createObserver(entries => {
      entries.forEach(entry => {
        entry.isIntersecting ? $(entry.target).fadeTo(300, 1) : $(entry.target).fadeTo(300, 0.4);
      }
      );
    }, options);

    buttons.forEach(button => observer.observe(button));

  }

  if (window.location.href.includes("solutions")) {
    addTopBanner();
    createBrochureCarousel();
    parseInsightsData();
    handleOptionChange();
    handleMobileOption();
    handleSolutionsPlayButtonClick('Desktop');
    handleSolutionsPlayButtonClick('Mobile');
    // generateVerticalOptionsSlider();
  }


});
