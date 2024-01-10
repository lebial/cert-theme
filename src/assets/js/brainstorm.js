jQuery(document).ready(function ($) {
  function createTimelineSlider() {
    $('.cert-timeline-slider').slick({
      vertical: true,
      slidesToShow: 4,
      slidesToScroll: 1,
      infinite: true,
      asNavFor: '.cert-timeline-data-slider',
      focusOnSelect: true,
      speed: 500,
    });
    $('.cert-timeline-data-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      draggable: false,
      asNavFor: '.cert-timeline-slider',
      fade: true,
      speed: 500,
    });
  }

  if (window.location.href.includes("brainstorm")) {
    createTimelineSlider();
  }
});