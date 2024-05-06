import { handleAjaxPosts, getCustomArrows } from "./utils/utils";

jQuery(document).ready(function ($) {

  function createResourcesHeroVideoSlider() {
    $('.resources__video__slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      // autoplay: true,
      // autosSpeed: 4000,
      dots: true,

    });
  }

  function handeleLoadMore() {
    $('.load__more__button').click(function () {
      handleAjaxPosts('resources_infinite_scroll', this);
    });
  }

  function createResourcesRelatedSlider() {
    const [prevArrow, nextArrow] = getCustomArrows();
    $('.resources-related-slider').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      dots: false,
      arrows: true,
      nextArrow,
      prevArrow,
    });
  };

  const { href } = window.location;
  if (href.includes('resources')) {
    createResourcesHeroVideoSlider();
    handeleLoadMore();
  }
  createResourcesRelatedSlider();
});
