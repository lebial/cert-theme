import getNavHeight, { addArrowToSlider } from "./utils/utils";

jQuery(document).ready(function ($) {
  function setNullMargin() {
    const { navHeight } = getNavHeight();
    $(".solutions__header").css("margin-top", `${navHeight}px`);
  }

  if (window.location.href.includes('solutions')) {
    setNullMargin();
  }
});
