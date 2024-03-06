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
      speed: 300,
    });
    $('.cert-timeline-data-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: false,
      draggable: false,
      asNavFor: timelineSlider,
      fade: true,
      speed: 300,
    });
    $(timelineSlider).on('beforeChange', function (ev, slick, currentSlide, nextSlide) {
      const slides = slick.$slides;
      $(slides[currentSlide]).find('.point__container').removeClass('point-active');
      $(slides[nextSlide]).find('.point__container').addClass('point-active');

    });
    $(timelineSlider).on('afterChange', function (ev, slick, currentSlide) {
      sessionStorage.setItem('currentSlide', `${currentSlide}`);
    })
  }

  function handleSliderChangeOnScroll({ isIntersecting, target }, scrollUp) {
    const cycleSlider = dir => $(timelineSlider).slick(dir);
    const totalPoints = document.querySelectorAll('.click__control').length;
    if (!scrollUp && isIntersecting) return cycleSlider('slickNext');
    if (scrollUp && !isIntersecting && !+$(target).attr('data-position')) return cycleSlider('slickPrev');
    if (scrollUp && isIntersecting) return cycleSlider('slickPrev');
    if (!scrollUp && !isIntersecting && +$(target).attr('data-position') === totalPoints - 1) return cycleSlider('slickNext');

    //check set slider on page reload
    if (scrollUp === null) {
      $(timelineSlider).slick('slickGoTo', +sessionStorage.getItem('currentSlide'));
    }
  }

  function handleSliderScroll() {
    let scrollUp = null;
    window.addEventListener('scroll', function (ev) {
      scrollUp = this.oldScroll > this.scrollY;
      this.oldScroll = this.scrollY;
    });

    const elements = document.querySelectorAll('.click__control');
    const options = {
      threshold: 1,
    }
    const observer = createObserver(([entry]) => {
      handleSliderChangeOnScroll(entry, scrollUp);
    }, options);

    elements.forEach(element => {
      observer.observe(element);
    });
  }

  function addBrainstormToVideo() {
    $('.home__secondary__video').attr('name', 'brainstorm');
  }

  if (window.location.href.includes("brainstorm")) {
    createTimelineSlider();
    handleSliderScroll();
    addBrainstormToVideo();
  }
});