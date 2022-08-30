import getNavHeight, { addArrowToSlider } from "./utils/utils";

jQuery(document).ready(function ($) {
  function setImageMargin() {
    const { navHeight } = getNavHeight();
    $(".au__heading__image").css("margin-top", `${navHeight}px`);
  }

  function createTimelineSlider() {
    $('.au__timeline__nav').slick({
      variableWidth: true,
      centerMode: true,
      dots: false,
      infinite: false,
      slidesToShow: 3,
      focusOnSelect: true,
      asNavFor: '.au__timeline__slider',
      responsive: [
        {
          breakpoint: 600,
          slidesToShow: 3
        }
      ],
    });
    $(".au__timeline__slider").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: false,
      arrows: false,
      fade: true,
      draggable: false,
      asNavFor: ".au__timeline__nav",
    });
  }

  function createCareersSlider() {
    $(".au__careers__slider").slick({
      centerMode: true,
      dots: false,
      infinite: false,
      slidesToShow: 5,
      focusOnSelect: true,
      asNavFor: ".au__careers__slider",
    });
  }

  if (window.location.href.includes("who-we-are")) {
    setImageMargin();
    createTimelineSlider();
    addArrowToSlider(".au__timeline__nav");
    createCareersSlider();
    addArrowToSlider(".au_careers__arrows");
  }
});
