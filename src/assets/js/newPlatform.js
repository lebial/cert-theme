import { makeElementsSameHeight, triggerGtagEvent } from "./utils/utils";

function initPlatform($) {
  const insightsSliderSelector = '.platform__insights__slider';
  const sliderSelector = '.highlight__slider';
  const cardBodySelector = '.platform__highlight__card__body';
  const nextArrow = `
    <button type="button" class="slick-next !inline-block">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="69" viewBox="0 0 40 69" fill="none">'
          <path fill-rule="evenodd" clip-rule="evenodd" d="M6.4664 1.51669C5.09958 0.149872 2.88351 0.149872 1.51669 1.51669C0.149872 2.88358 0.149872 5.09964 1.51669 6.46646L29.7027 34.6525L1.47482 62.8805C0.108002 64.2473 0.108002 66.4633 1.47482 67.8302C2.84164 69.1971 5.05771 69.1971 6.42453 67.8302L34.6521 39.6018L39.305 34.9497L39.6018 34.6521L6.4664 1.51669Z" fill="#787878"/>
      </svg>
    </button>`;

  const prevArrow = `
  <button type="button" class="slick-prev ">
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="69" viewBox="0 0 40 69" fill="none">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M33.5851 67.8302C34.9519 69.1971 37.168 69.1971 38.5348 67.8302C39.9016 66.4633 39.9016 64.2473 38.5348 62.8805L10.3488 34.6944L38.5767 6.46646C39.9435 5.09964 39.9435 2.88358 38.5767 1.51675C37.2099 0.149872 34.9938 0.149871 33.627 1.51675L5.39945 29.7451L0.746493 34.3972L0.449741 34.6949L33.5851 67.8302Z" fill="#787878"/>
    </svg>
  </button>`;

  function handleHeroPlatformOption() {
    const buttons = document.querySelectorAll('.platform__hero__option__button');
    buttons.forEach(btn => {
      $(btn).click(function () {
        const { name } = this;
        $(`.platform__detail__button [name="${name}"]`).click();
      });
    });
  }

  function createHighlightSlider() {
    $(sliderSelector).slick({
      centerMode: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      centerPadding: 0,
      dots: true,
      arrows: true,
      nextArrow,
      prevArrow,
      responsive: [
        {
          breakpoint: 700,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            arrows: false,
            centerPadding: '60px',
          },
        }
      ]
    });
  }

  function setSlideVisibility() {
    //Find the visible slides i.e. where aria-hidden="false"
    const visibleSlides = $('.slick-slide[aria-hidden="false"]');
    //Make sure all of the visible slides have an opacity of 1
    $(visibleSlides).each(function () {
      $(this).css('opacity', 1);
    });
    //Set the opacity of the first and last partial slides.
    if (visibleSlides.length >= 3) {
      $(visibleSlides).first().prev().animate({ 'opacity': 0 });
      $($(visibleSlides).get(2)).next().animate({ 'opacity': 0 });
    }

  }

  function handleSlickOnInit() {
    $(sliderSelector).on('init', function (event, slick) {
      const currentSlide = $(slick.$slides[slick.currentSlide]);
      const prevCardBody = $(currentSlide.prev()[0]).find(cardBodySelector);
      const nextCardBody = $(currentSlide.next()[0]).find(cardBodySelector);
      prevCardBody.addClass('left__card__rotated');
      prevCardBody.find('img').animate({ opacity: 0 });
      nextCardBody.addClass('right__card__rotated');
      nextCardBody.find('img').animate({ opacity: 0 });
      setSlideVisibility();
      makeElementsSameHeight($, `${sliderSelector} .slick-slide`)
    });
  }
  function handleInfiniteLastScroll(slick, currentSlide, nextSlide) {
    if (!currentSlide && nextSlide === slick.slideCount - 1) {
      $($('[data-slick-index=0]')[0]).find(cardBodySelector).addClass('right__card__rotated');
      $($('[data-slick-index=0]')[0]).find('img').animate({ opacity: 0 });
      $($('[data-slick-index=-1]')[0]).find('img').animate({ opacity: 1 });
      $($('[data-slick-index=-2]')[0]).find(cardBodySelector).addClass('left__card__rotated');
      $($('[data-slick-index=-2]')[0]).find('img').animate({ opacity: 0 });
    }
    if (currentSlide === slick.slideCount - 1 && !nextSlide) {
      $($('[data-slick-index=7]')[0]).find(cardBodySelector).addClass('right__card__rotated');
      $($('[data-slick-index=7]')[0]).find('img').animate({ opacity: 0 });
      $($('[data-slick-index=6]')[0]).find('img').animate({ opacity: 1 });
      $($('[data-slick-index=5]')[0]).find(cardBodySelector).addClass('left__card__rotated');
      $($('[data-slick-index=5]')[0]).find('img').animate({ opacity: 0 });
    }
  }

  function handleCustom3DSlider() {
    $(sliderSelector).on('beforeChange', function (event, slick, currentSlide, nextSlide) {
      const cardClass = '.platform__highlight__card__body';
      const currentSlideEl = $(slick.$slides[nextSlide]);
      $('.platform__highlight__card__body').removeClass('left__card__rotated right__card__rotated');
      handleInfiniteLastScroll(slick, currentSlide, nextSlide)
      $(currentSlideEl.prev()[0]).find(cardClass).addClass('left__card__rotated');
      $(currentSlideEl.prev()[0]).find('img').animate({ opacity: 0 });
      $(currentSlideEl.next()[0]).find(cardClass).addClass('right__card__rotated');
      $(currentSlideEl.next()[0]).find('img').animate({ opacity: 0 });
      $(currentSlideEl).find('img').animate({ opacity: 1 });
      $('.slick-slide').each(function () {
        // $(this).animate({ 'opacity': 1 }, 250);
        $(this).animate({ 'opacity': 1 });
      });
      triggerGtagEvent('platform_by_numbers_slide_change', {
        fromSlide: currentSlide,
        toSlide: nextSlide
      });

    });

    $(sliderSelector).on('afterChange', function () {
      // setSlideVisibility();
    });

  }

  function handlePlatformButtonClick(event) {
    const selected = this.name;
    const activeBtnClasses = 'active__button';
    const activeContainerClasses = 'active__details container__animated';
    //buttons management
    $('.platform__detail__button').removeClass(activeBtnClasses);
    $(this).parent().addClass(activeBtnClasses);

    //data containers logic
    $('.details__container').removeClass(activeContainerClasses);
    const selectedContainer = $(`.details__container[name="${selected}"]`)
    $(selectedContainer).addClass(activeContainerClasses);
  }

  function handlePlatformsDetails() {
    const buttons = document.querySelectorAll('.platform__detail__button button');
    buttons.forEach(button => $(button).click(handlePlatformButtonClick));
  }

  function createPlatformInsightsSlider() {
    $(insightsSliderSelector).slick({
      slidesToShow: 3, //remove after having more than 3;
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

  function handleInsightsOnInit() {
    $(insightsSliderSelector).on('init', function (event, slick) {
      makeElementsSameHeight($, `${insightsSliderSelector} .slick-slide`);
    });
  }

  function handleMainMenuNav() {
    const { search } = window.location;
    if (search) {
      const urlParam = new URLSearchParams(search);
      const btn = urlParam.get('btn');
      $(`.platform__detail__button button[name="platform-button-${btn}"]`).click();
    }
  }

  function addPlatformNameToVideo() {
    $('.home__secondary__video').attr('name', 'platform');
  }

  function handleGoogleEventTriggerOnDetailCard(cardSelector, name) {
    // const cards = document.querySelectorAll('.platform__detail__card');
    const cards = document.querySelectorAll(cardSelector);
    cards.forEach(card => {
      if ($(card).is('a')) {
        $(card).click(function () {
          triggerGtagEvent(name, {
            linkClicked: card.attributes['href'],
          });
        });
      }
    });
  }


  handleHeroPlatformOption();
  handleSlickOnInit();
  createHighlightSlider();
  handleCustom3DSlider();
  handlePlatformsDetails();
  handleInsightsOnInit();
  createPlatformInsightsSlider();
  handleMainMenuNav();
  addPlatformNameToVideo();
  handleGoogleEventTriggerOnDetailCard('.paltform__detail__card', 'pdf_download');
  handleGoogleEventTriggerOnDetailCard('.ai__insights__card', 'ai_insights_link');
}

export default initPlatform;