import { handleAjaxPosts } from "./utils/utils";
jQuery(document).ready(function ($) {
  function handleLoadMore() {
    $('.load__more__button').click(function () {
      handleAjaxPosts('news_insights_scroll', this);
    });
  }

  function handleCustomTitle() {
    const currentHeder = document.querySelector('#dynamicHeader');
    const { href } = window.location;
    const currentUrlTag = href.split("=");

    const sections = {
      'product-news': 'Product News',
      'press-release': 'Press Releases',
      'in-the-news': 'In the News'
    };

    const header = sections[currentUrlTag[1]] ?? 'Latest News';
    currentHeder.innerHTML = header;
  }

  const { href } = window.location;
  if (href.includes('newsroom')) {
    handleLoadMore();
    handleCustomTitle();
  }
});