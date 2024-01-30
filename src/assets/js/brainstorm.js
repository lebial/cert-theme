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

  function handleSliderChangeOnScroll({ isIntersecting, target }, scrollUp) {
    const cycleSlider = dir => $(timelineSlider).slick(dir);
    if (!scrollUp && isIntersecting) return cycleSlider('slickNext');
    if (scrollUp && !isIntersecting && !+$(target).attr('data-position')) return cycleSlider('slickPrev');
    if (scrollUp && isIntersecting) return cycleSlider('slickPrev');
    // if (scrollUp )
    $(timelineSlider).slick(direction);
  }

  function handleScrollLock() {
    let scrollUp = 'null';
    window.addEventListener('scroll', function (ev) {
      scrollUp = this.oldScroll > this.scrollY;
      this.oldScroll = this.scrollY;
    });

    const elements = document.querySelectorAll('.click__control');
    const options = {
      threshold: 1,
      // rootMargin: '-50% 0px 0px 0px',
    }
    const observer = createObserver(([entry]) => {
      // debugger;
      handleSliderChangeOnScroll(entry, scrollUp);
    }, options);

    elements.forEach(element => {
      observer.observe(element);
    });
  }

  if (window.location.href.includes("brainstorm")) {
    createTimelineSlider();
    handleScrollLock();
  }
});