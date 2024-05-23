import { handleAjaxPosts, getParams } from "./utils/utils";
jQuery(document).ready(function ($) {
  function handleLoadMore() {
    $('.load__more__button').click(function () {
      handleAjaxPosts('news_insights_scroll', this);
    });
  }

  function handleCustomTitle() {
    const params = getParams();
    const tag = params.get('tag');
    const title = document.getElementById('dynamicHeader');
    const sections = {
      'product-news': 'Product News',
      'press-release': 'Press Releases',
      'in-the-news': 'In the News'
    };

    if (tag) title.innerHTML = sections[tag];
  }

  const { href } = window.location;
  if (href.includes('newsroom')) {
    handleLoadMore();
    handleCustomTitle();
  }
});