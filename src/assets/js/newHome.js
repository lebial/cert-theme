jQuery(document).ready(function ($) {
  // let currentHeroButton = "Health Plans";
  const firstButton = "report-0";
  let currentReport = "report-0";
  const buttons = document.querySelectorAll(".ai__driven__report__option");
  const activeClass = "ai__active__button";

  //check if this is no longer needed and remove
  // function handleHeroButtonClick() {
  //   const heroButtons = document.querySelectorAll(".hero__option__button");
  //   const heroButtonActiveClass = "new_home__active__report";
  //   heroButtons.forEach((button) =>
  //     $(button).click(function () {
  //       $(`button[name="${currentHeroButton}"]`).removeClass(
  //         heroButtonActiveClass
  //       );
  //       $(this).addClass(heroButtonActiveClass);
  //       currentHeroButton = this.name;
  //     })
  //   );
  //   $(`button[name="${currentHeroButton}"]`).click();
  // }
  function handleAiOptionClick() {

    //handle mobile
    if ($(this).hasClass('mobile__button') && $(this).is(':visible')) {
      if (!$(this).hasClass('ai__active__button')) {
        $(this).addClass(activeClass);
        $($(this).next()).animate({ 'height': '150px' });
        $(this).find('svg').animate(
          { deg: 90 },
          {
            duration: 300,
            step: function (now) {
              $(this).css({ transform: 'rotate(' + now + 'deg)' });
            }
          }
        );
      }
      else {
        $(`button[name=${currentReport}]`).next().animate({ height: 0 });
        $(`button[name=${currentReport}]`).find('svg').animate(
          { deg: 0 },
          {
            duration: 300,
            step: function (now) {
              $(this).css({ transform: 'rotate(' + now + 'deg)' });
            }
          }
        );
        $(`button[name=${currentReport}]`).removeClass(activeClass);
      }
    }
    //handle desktop
    else {
      $(`button[name=${currentReport}]`).removeClass(activeClass);
      $(this).addClass(activeClass);
      $(`.${currentReport}-image`).css("opacity", 0);
      $(`.${this.name}-image`).css("opacity", 1);
    }
    currentReport = this.name;
  }

  function AiOPtionsInit() {
    const initButtons = document.querySelectorAll(`button[name=${firstButton}]`);
    buttons.forEach((button) => $(button).click(handleAiOptionClick));
    initButtons.forEach(initButton => {
      if ($(initButton).is(':visible')) initButton.click();
    });
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

    const typed2 = new Typed(".vertical-option-mobile", {
      stringsElement: "#string-text-mobile",
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

    const typed3 = new Typed(".vertical-option-desktop", {
      stringsElement: "#string-text-desktop",
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
    const marketSegments = $(".new__home__button__container");
    const placeToPut = $("header>div")[0];
    $(placeToPut).prepend(marketSegments);
  }

  function createInsightsCarousel() {
    $(".home__insights__slider").slick({
      slidesToShow: 1,
      infinte: true,
      dots: true,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 4000,
    });
  }

  function handleInsightsArrowClick() {
    const slider = ".home__insights__slider";
    $(`${slider}-next`).click(() => $(slider).slick("slickNext"));
    $(`${slider}-prev`).click(() => $(slider).slick("slickPrev"));
  }

  function handleSecondVideo() {
    const video = $('.home__secondary__video');
    const button = $('.second_video_play_button');

    video.get(0).onseeking = function () {
      this.play();
      $(this).attr('controls', true);
      $(this).prev().hide();
    };


    button.click(function () {
      video.get(0).play();
      $(this).parent().hide();
      $(video.get(0)).attr('controls', true);

      video.get(0).addEventListener('pause', function (ev) {
        ev.preventDefault();
        $(button).parent().show();
        if (!this.seeking) {
          $(video.get(0)).attr('controls', false);
        }
      });
    });
  };

  createInsightsCarousel();
  handleInsightsArrowClick();
  handleTypingEffect();
  AiOPtionsInit();
  createVerticalSlider();
  handleNextClick();
  handleSecondVideo();
});
