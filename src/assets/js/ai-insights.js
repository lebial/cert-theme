jQuery(document).ready(function ($) {
  function getParams() {
    const search = window.location.search;
    const params = new URLSearchParams(search);
    return params;
  }

  function handleFilterHighlightOnLoad() {
    const params = getParams();
    let tag = params.get('tag');
    if (!tag) tag = 'all';
    $(`[data-option=${tag}] a`).removeClass('border-gray-400 text-gray-400');
    $(`[data-option=${tag}] a`).addClass('border-primary text-primary');
  }

  function handleAjaxPosts() {
    $('.load__more__button').click(function () {
      const params = getParams();
      const btn = this;
      const lastPage = +btn.dataset.lastPage;
      const currentPage = +btn.dataset.currentPage;
      const page = currentPage + 1;
      debugger;
      $.ajax({
        type: 'POST',
        url: '/wp-admin/admin-ajax.php',
        dataType: 'html',
        data: {
          action: 'ai_insights_scroll',
          page,
          tag: params.get('tag'),
        },
        success: function (res) {
          if (page === lastPage) $(btn).hide();
          btn.setAttribute('data-current-page', page);
          $('#scrollContent').append(res);
        }
      });
    });
  }

  const { href } = window.location;
  if (href.includes('ai-insights')) {
    handleFilterHighlightOnLoad();
    handleAjaxPosts();
  }
});