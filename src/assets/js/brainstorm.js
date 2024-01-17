import { createObserver } from "./utils/utils";

jQuery(document).ready(function ($) {
  const timelineSlider = '.cert-timeline-slider';
  function createTimelineSlider() {
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
  }

  function handleScrollSlide(ev) {
    const scrollUp = ev.wheelDelta > 0;
    const direction = scrollUp ? 'slickPrev' : 'slickNext';
    $(timelineSlider).slick(direction);
  }

  function handleScrollLock() {
    const element = document.querySelector('.cert-timeline-slider');
    const options = {
      threshold: 1,
    }
    const observer = createObserver(([entry]) => {
      if (entry.isIntersecting) {
        $('body').css('overflow', 'hidden');
        observer.unobserve(element);
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