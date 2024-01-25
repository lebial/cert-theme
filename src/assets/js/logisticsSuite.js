import { getCustomArrows } from "./utils/utils";
jQuery(document).ready(function ($) {
  const insightsSliderSelector = '.data__processing__slider';

  const [prevArrow, nextArrow] = getCustomArrows();


  function createDataProcessSlider() {
    $(insightsSliderSelector).slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      infinite: true,
      arrows: true,
      nextArrow,
      prevArrow,
      responsive: [
        {
          breakpoint: 700,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        }
      ]
    });
  }

  const cardSelector = '.logistics__point__card';

  function handleOptionClick() {
    $(cardSelector).removeClass('is-card-active');
    $(this).addClass('is-card-active');
  }

  function handleValidationOptionSelect() {
    const cards = document.querySelectorAll(cardSelector);
    cards.forEach(card => $(card).click(handleOptionClick));
  }

  function createMobileSlider() {
    const slider = $('.validation__mobile__slider');
    const breakpoint = 1024;
    const settings = {
      mobileFirst: true,
      dots: false,
      arrows: true,
      nextArrow,
      prevArrow,
      responsive: [
        {
          breakpoint,
          settings: 'unslick',
        }
      ]
    }
    if (screen.width <= breakpoint) {
      slider.slick(settings);
      slider.on('beforeChange', function (ev, slick, currentSlide, nextSlide) {
        const slides = slick.$slides;
        $(slides[currentSlide]).find('.logistics__point__card').removeClass('is-card-active');
        $(slides[nextSlide]).find('.logistics__point__card').addClass('is-card-active');
      });
    }

  };

  function startVideoAtSpecificTime() {
    const video = document.getElementById("HomeBackgroundVideo");

    video.oncanplaythrough = function () {
      video.play();
    };

    video.currentTime = 49;

    const source = document.createElement('source');
    source.setAttribute('src', 'movie.mp4');
    source.setAttribute('type', 'video/mp4');
    video.appendChild(source);
  }

  function checkValidationButtonsCycle(btnName, activeCard) {
    if (activeCard.attr('name') === 'first' && btnName === 'prev') return true;
    if (activeCard.attr('name') === 'last' && btnName === 'next') return true;
    return false;
  }

  function handleValidationProcessNavigation() {
    $('.process-navigation').click(function () {
      const activeCard = $('.is-card-active');
      //name is next or prev === activeCard.next() || activeCard.prev();
      const nextCard = activeCard[this.name]();
      if (checkValidationButtonsCycle(this.name, activeCard)) return null;
      $(activeCard).removeClass('is-card-active');
      nextCard.addClass('is-card-active');
    });
  }

  //function calls;
  const { href } = window.location;
  if (href.includes("logistics")) {
    createDataProcessSlider();
    handleValidationOptionSelect();
    createMobileSlider();
    startVideoAtSpecificTime();
    handleValidationProcessNavigation();
  }

});
