jQuery(document).ready(function ($) {
  let currentHeroButton = "Health Plans";
  let currentReport = "report-0";
  const buttons = document.querySelectorAll(".ai__driven__report__option");
  const activeClass = "ai__active__button";

  function handleHeroButtonClick() {
    const heroButtons = document.querySelectorAll(".hero__option__button");
    const heroButtonActiveClass = "new_home__active__report";
    heroButtons.forEach((button) =>
      $(button).click(function () {
        $(`button[name="${currentHeroButton}"]`).removeClass(
          heroButtonActiveClass
        );
        $(this).addClass(heroButtonActiveClass);
        currentHeroButton = this.name;
      })
    );
    $(`button[name="${currentHeroButton}"]`).click();
  }
  function handleAiOptionClick() {
    $(`button[name=${currentReport}]`).removeClass(activeClass);
    $(`.${currentReport}-image`).css("opacity", 0);
    $(`.${this.name}-image`).css("opacity", 1);
    $(this).addClass(activeClass);
    currentReport = this.name;
  }

  function AiOPtionsInit() {
    buttons.forEach((button) => $(button).click(handleAiOptionClick));
    $(`button[name=${currentReport}]`).click();
  }

  function createVerticalSlider() {
    $(".vertical-slider-options").slick({
      vertical: true,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      slidesToShow: 1,
      centerMode: true,
      arrows: false,
      dots: false,
      verticalSwiping: true,
      infinite: true,
    });
  }

  function handleNextClick() {
    $(".vertical__silder__next").click(function () {
      $(".vertical-slider-options").slick("slickNext");
    });
  }

  function handleTypingEffect() {
    const typed = new Typed(".typed", {
      stringsElement: "#string-text",
      typeSpeed: 5,
      startDelay: 0,
      backSpeed: 5,
      smartBackspace: true,
      shuffle: false,
      backDelay: 2000,
      loop: true,
      loopCount: false,
      showCursor: true,
      cursorChar: "|",
      contentType: "html",
    });

    const typed2 = new Typed(".vertical-option", {
      stringsElement: "#string-text2",
      typeSpeed: 5,
      startDelay: 0,
      backSpeed: 5,
      smartBackspace: true,
      shuffle: false,
      backDelay: 2000,
      loop: true,
      loopCount: false,
      showCursor: false,
      cursorChar: "|",
      contentType: "html",
    });
  }

  function addTemporaryNavToNavBar() {
    const marketSegments = $('.new__home__button__container');
    const placeToPut = $('header>div')[0];
    $(placeToPut).prepend(marketSegments);
  }

  handleTypingEffect();
  AiOPtionsInit();
  handleHeroButtonClick();
  createVerticalSlider();
  handleNextClick();
  if (location.href.includes('alternate2')) {
    addTemporaryNavToNavBar();
  }
});
