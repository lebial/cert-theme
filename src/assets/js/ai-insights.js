import { handleAjaxPosts, getParams } from "./utils/utils";
jQuery(document).ready(function ($) {

  function handleFilterHighlightOnLoad() {
    const params = getParams();
    let tag = params.get('tag');
    if (!tag) tag = 'all';
    $(`[data-option=${tag}] a`).removeClass('border-gray-400 text-gray-400');
    $(`[data-option=${tag}] a`).addClass('border-primary text-primary');
  }

  function handleLoadMore() {
    $('.load__more__button').click(function () {
      handleAjaxPosts('ai_insights_scroll', this);
    });
  }

  const { href } = window.location;
  if (href.includes('ai-insights')) {
    handleFilterHighlightOnLoad();
    handleLoadMore();
  }
});