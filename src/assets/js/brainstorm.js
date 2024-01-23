import { createObserver } from "./utils/utils";

jQuery(document).ready(function ($) {
  const timelineSlider = '.cert-timeline-slider';
  function createTimelineSlider() {
    $(timelineSlider).on('init', function (slick) {
      $($(this).find('.slick-current .point__container')).addClass('point-active');
    });
    $(timelineSlider).slick({
      vertical: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: false,
      asNavFor: '.cert-timeline-data-slider',
      focusOnSelect: true,
      speed: 500,
    });
    $('.cert-timeline-data-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: false,
      draggable: false,
      asNavFor: timelineSlider,
      fade: true,
      speed: 500,
    });
    $(timelineSlider).on('beforeChange', function (ev, slick, currentSlide, nextSlide) {
      // debugger;
      const slides = slick.$slides;
      $(slides[currentSlide]).find('.point__container').removeClass('point-active');
      $(slides[nextSlide]).find('.point__container').addClass('point-active');

    });
    $(timelineSlider).on('afterChange', function (ev, slick, currentSlide) {
      const slides = slick.$slides;
      if (!currentSlide || currentSlide === slides.length - 1) {
        $('body').css('overflow-y', 'auto');
        $('body').removeClass('scroll__lock');
      }
    })
  }

  function handleScrollSlide(ev) {
    const scrollUp = ev.wheelDelta > 0;
    const direction = scrollUp ? 'slickPrev' : 'slickNext';
    if ($('body').hasClass('scroll__lock')) $(timelineSlider).slick(direction);

  }

  function handleScrollLock() {
    const element = document.querySelector('.cert-timeline-slider');
    const options = {
      threshold: 1,
      rootMargin: '-200px 0px 0px 0px',
    }
    const observer = createObserver(([entry]) => {
      if (entry.isIntersecting) {
        $('body').css('overflow-y', 'hidden');
        $('body').addClass('scroll__lock');
        window.addEventListener('wheel', handleScrollSlide);
      }
    }, options);
    observer.observe(element);
  }

  if (window.location.href.includes("brainstorm")) {
    createTimelineSlider();
    handleScrollLock();
  }
});