import { handleAjaxPosts } from "./utils/utils";
jQuery(document).ready(function ($) {
  function handleLoadMore() {
    $('.load__more__button').click(function () {
      handleAjaxPosts('news_insights_scroll', this);
    });
  }

  const { href } = window.location;
  if (href.includes('newsroom')) {
    handleLoadMore();
  }
});