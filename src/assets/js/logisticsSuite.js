import { getCustomArrows } from "./utils/utils";
jQuery(document).ready(function ($) {
  const insightsSliderSelector = '.data__processing__slider';

  const [prevArrow, nextArrow] = getCustomArrows();
  let cycleTime = null;


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
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        }
      ]
    });
  }

  const cardSelector = '.logistics__point__card';

  function handleOptionClick(ev) {
    $(cardSelector).removeClass('is-card-active');
    $(this).addClass('is-card-active');
    $('.copy--active').removeClass('copy--active');
    const nextPos = $(this).attr('data-dot-position');
    const nextCopy = $(`.copy__container[data-copy-position=${nextPos}]`);
    $('copy__container').removeClass('copy--active');
    nextCopy.addClass('copy--active');
    if (!ev.isTrigger) clearInterval(cycleTime);
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
    if (activeCard.attr('name') === 'first' && btnName === 'prev') {
      $(cardSelector).last().click();
      return true;
    }
    if (activeCard.attr('name') === 'last' && btnName === 'next') {
      $(cardSelector).first().click();
      return true;
    }

    return false;
  }

  function handleAutoCycle() {
    handleCardClick('auto', 'next');
  }

  function setCycle() {
    cycleTime = setInterval(handleAutoCycle, 5000);
  }

  function handleCardClick(ev, direction = null) {
    const name = direction || this.name;
    const activeCard = $('.is-card-active');
    const activeCopy = $('.copy--active');
    //name is next or prev === activeCard.next() || activeCard.prev();
    const nextCard = activeCard[name]();
    const nextCopy = activeCopy[name]();
    if (checkValidationButtonsCycle(name, activeCard)) return null;
    $(activeCard).removeClass('is-card-active');
    $(activeCopy).removeClass('copy--active');
    nextCard.addClass('is-card-active');
    nextCopy.addClass('copy--active');
    if (ev != 'auto') clearInterval(cycleTime);
  }

  function handleValidationProcessNavigation() {
    $('.process-navigation').click(handleCardClick);
  }
  function addLogisticsToVideo() {
    $('.home__secondary__video').attr('name', 'logistics_suite');
  }

  //function calls;
  const { href } = window.location;
  if (href.includes("logistics")) {
    createDataProcessSlider();
    handleValidationOptionSelect();
    createMobileSlider();
    startVideoAtSpecificTime();
    handleValidationProcessNavigation();
    setCycle();
    addLogisticsToVideo();
  }

});
