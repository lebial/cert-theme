import getNavHeight, { createObserver, makeElementsSameHeight } from "./utils/utils";

jQuery(document).ready(function ($) {
  let intuitiveData = {};
  let activeData = {};
  let touchstartY = 0;
  let touchendY = 0;

  function handleSolutionsPlayButtonClick(version) {
    const id = `solutions${version}VideoButton`;
    const button = document.getElementById(id);
    const evtHandler = function () {
      $(`.solutions__${version}__video__overlay`).toggle();
      $(`#decisionMaking${version}Video`).get(0).play();
    };
    button.addEventListener('click', evtHandler);
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
      const buttons = $('.brochure-next');
      $(buttons[i]).click(() => {
        if (i === option.length - 1) return $(option[0]).click();
        return $(option[i + 1]).click();
      });
    });
  }

  function setActiveStyles() {
    const buttons = $('.option__button');
    Object.values(buttons).forEach(button => {
      if ($(button.children).text().includes(activeData['option_title'])) return $(button).addClass('active__option');
      return $(button).removeClass('active__option');
    });
  }

  function setIntuitiveData(data) {
    activeData = data;
    $('#intuitiveDescription').html(data['option_description']);
    $('.intuitive__dynamic__content').html(data['option_description']);
    const brochureDescription = $('.download__brochure__text');
    const brochureLink = $('.download__brochure__link');
    if (data['option_brochure_description']) {
      const [firstLink, secondLink] = Object.values(data['option_brochure_links']);
      brochureDescription.show();
      brochureLink.show();
      brochureDescription.html(data['option_brochure_description']);
      brochureLink.attr('href', firstLink);
      // if (secondLink) brochureLink.attr('onclick', `location.href = '${secondLink}';`);
      if (secondLink) brochureLink.attr('onclick', `window.open('${secondLink}');`);
    } else {
      brochureDescription.hide();
      brochureLink.hide();
    }
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
      const overlayHeight = -buttonsOverlay.height() / 4;
      const { top } = $(this).parent().position();
      buttonsOverlay.animate({
        'background-position-y': `${overlayHeight + top}px`,
      }, 300, 'linear');
    }));
  }

  function handleHealthPlansOptionChange() {
    $('.hp__option__action__button').click((function () {
      setIntuitiveData(intuitiveData[this.name]);
      const navDot = $('.navigation__dot');
      const buttonHeight = $($(this).parent()).height();
      const { top } = $(this).parent().position();
      const calculatedTop = buttonHeight / 2 + top;
      navDot.animate({
        'top': `${calculatedTop}px`,
      }, 300, 'linear');
    }));
  }

  function setInsightsOverlay() {
    const buttonsOverlay = $('.container__overlay');
    const overlayHeight = buttonsOverlay.height();
    const initialPoint = overlayHeight / 4;
    buttonsOverlay.css('background-position-y', `-${initialPoint}px`);
  }

  function setInitialNavPoint() {
    const navDot = $('.navigation__dot');
    const [firstButton] = $('.hp__option__action__button');
    const buttonHeight = $(firstButton).parent().height();
    const { top } = $(firstButton).parent().position();
    const calculatedTop = buttonHeight / 2 + top;
    navDot.animate({
      'top': `${calculatedTop}px`,
    }, 300, 'linear');
  }


  function createInsightsSlider() {
    $('.solutions__insights__slider').slick({
      vertical: true,
      slidesToScroll: 1,
      slidesToShow: 1,
      centerMode: true,
      arrows: false,
      dots: false,
      verticalSwiping: true,
      infinite: false,
    });

    $('.solutions__insights__slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
      const newSlide = $(slick.$slides[nextSlide]);
      newSlide.find('button').click();
      if ((nextSlide === slick.$slides.length - 1 || !nextSlide)) {
        $('body').css('overflow', 'auto');
        const gestureZone = document.querySelector('body');
        gestureZone.removeEventListener('touchstart', handleTouchStart);
        gestureZone.removeEventListener('touchend', handleTouchEnd);
      }
    });
  }

  function handleMobileInsightsScrollLock() {
    const element = document.querySelector('.insights__container');
    const options = {
      threshold: 1,
    }
    const observer = createObserver(([entry]) => {
      if (entry.isIntersecting && $(window).width() < 1024) {
        $('body').css('overflow', 'hidden');
        addScrollToSlide();
        observer.unobserve(element);
      }
    }, options);
    observer.observe(element);
  }


  function handleGesture() {
    if (touchendY < touchstartY) {
      // console.log('Swiped up');
      $('.solutions__insights__slider').slick('slickNext');
    }

    if (touchendY > touchstartY) {
      // console.log('Swiped down');
      $('.solutions__insights__slider').slick('slickPrev');
    }
  }

  function handleTouchStart(event) {
    touchstartY = event.changedTouches[0].screenY;
  }

  function handleTouchEnd(event) {
    touchendY = event.changedTouches[0].screenY;
    handleGesture();
  }

  function addScrollToSlide() {
    const gestureZone = document.querySelector('body');
    gestureZone.addEventListener('touchstart', handleTouchStart, false);
    gestureZone.addEventListener('touchend', handleTouchEnd, false);
  }

  function fixSlideHeight() {
    makeElementsSameHeight($, '.slick-slide');
  }

  function fixElementsHeight() {
    makeElementsSameHeight($, '.option__container', false);
    if (screen.width > 1080) makeElementsSameHeight($, '.solutions__card', false);
  }

  if (window.location.href.includes("solutions")) {
    createBrochureCarousel();
    fixElementsHeight();
    parseInsightsData();
    handleOptionChange();
    handleHealthPlansOptionChange();
    if (window.location.href.includes('health-plans')) setInitialNavPoint();
    // handleSolutionsPlayButtonClick('Desktop');
    // handleSolutionsPlayButtonClick('Mobile');
    setInsightsOverlay();
    createInsightsSlider();
    fixSlideHeight();
    handleMobileInsightsScrollLock();
  }

});
