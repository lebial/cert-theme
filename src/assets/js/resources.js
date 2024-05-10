import { handleAjaxPosts, getCustomArrows, getParams } from "./utils/utils";

jQuery(document).ready(function ($) {

  function createResourcesHeroVideoSlider() {
    $('.resources__video__slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autosSpeed: 4000,
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

  function handleFilterHighlight() {
    const params = getParams();
    let tag = params.get('tag');
    if (!tag) return null;
    const option = $(`[data-option=${tag}]`);
    option.find('svg').removeClass('fill-dark-blue-background');
    option.find('svg').addClass('fill-primary');
    option.removeClass('text-dark-blue-background');
    option.addClass('text-primary');
  }

  const { href } = window.location;
  if (href.includes('resources')) {
    createResourcesHeroVideoSlider();
    handeleLoadMore();
    handleFilterHighlight();
  }
  createResourcesRelatedSlider();
});
