jQuery(document).ready(function ($) {
  function handleFilterHighlightOnLoad() {
    const search = window.location.search;
    const params = new URLSearchParams(search);
    let tag = params.get('tag');
    if (!tag) tag = 'all';
    $(`[data-option=${tag}] a`).removeClass('border-gray-400 text-gray-400');
    $(`[data-option=${tag}] a`).addClass('border-primary text-primary');
  }

  const { href } = window.location;
  if (href.includes('ai-insights')) {
    handleFilterHighlightOnLoad();
  }
});