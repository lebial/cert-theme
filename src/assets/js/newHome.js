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

  function calculateNext(currentText, length) {
    if (currentText === length) return { next: 0, prev: length - 1 };
    return { next: currentText, prev: currentText - 1 };
  }

  function handleGlitchTextChange() {
    let currentText = 0;
    const texts = document.querySelectorAll(".glitch");
    const lastText = texts.length;

    setInterval(() => {
      const queue = calculateNext(currentText, lastText);
      if (currentText === lastText) currentText = 0;
      $(`[name="glitch-text-${queue.prev}"]`).addClass("hidden");
      $(`[name="glitch-text-${queue.next}"]`).removeClass("hidden");
      currentText += 1;
    }, 2000);
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

  handleGlitchTextChange();
  AiOPtionsInit();
  handleHeroButtonClick();
  createVerticalSlider();
  handleNextClick();
});
