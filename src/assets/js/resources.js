import { handleAjaxPosts } from "./utils/utils";

jQuery(document).ready(function ($) {

  function createResourcesHeroVideoSlider() {
    $('.resources__video__slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      dots: true,
    });
  }

  function handeleLoadMore() {
    $('.load__more__button').click(function () {
      handleAjaxPosts('resources_infinite_scroll', this);
    });
  }

  const { href } = window.location;
  if (href.includes('resources')) {
    createResourcesHeroVideoSlider();
    handeleLoadMore();
  }
});
