import getNavHeight, { addArrowToSlider } from "./utils/utils";

jQuery(document).ready(function ($) {
  function setImageMargin() {
    const { navHeight } = getNavHeight();
    $(".au__heading__image").css("margin-top", `${navHeight}px`);
  }

  function createTimelineSlider() {
    $(".au__timeline__nav").slick({
      variableWidth: true,
      centerMode: true,
      dots: false,
      infinite: false,
      slidesToShow: 3,
      focusOnSelect: true,
      asNavFor: ".au__timeline__slider",
      responsive: [
        {
          breakpoint: 600,
          slidesToShow: 3,
        },
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
      dots: false,
      infinite: true,
      slidesToShow: 1,
    });
  }

  function createStoryCarousel() {
    $(".au__story__slider").slick({
      slidesToShow: 1,
      infinte: true,
      dots: true,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 4000,
    });
  }

  function handleStoryArrowClick() {
    const slider = ".au__story__slider";
    $(`${slider}-next`).click(() => $(slider).slick("slickNext"));
    $(`${slider}-prev`).click(() => $(slider).slick("slickPrev"));
  }

  if (window.location.href.includes("who-we-are")) {
    setImageMargin();
    createTimelineSlider();
    addArrowToSlider(".au__timeline__nav");
    createCareersSlider();
    addArrowToSlider(".au__careers__slider");
    createStoryCarousel();
    handleStoryArrowClick();
  }
});
