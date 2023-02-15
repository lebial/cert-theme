jQuery(document).ready(function ($) {

  function setActiveNavOption() {
    const options = $('.post__navigation__option');
    if (!options.length) return null;
    $(options).each(function () {
      $(this).click(function () {
        const activeOption = $('.active__post__nav__option');
        if (activeOption.length) $(activeOption).removeClass('active__post__nav__option');
        $(this).addClass('active__post__nav__option');
      });
    });
  }

  function handleOurTeamExpand() {
    $('.team__member__button').click(function () {
      const parent = $(this).parent();
      const isExpanded = $(parent).prev().hasClass('team__member--expanded');
      const height = isExpanded ? '100px' : `${$($(parent).prev().children()[0]).height() + 10}px`;
      const rotate = isExpanded ? '0deg' : '180deg';
      $(parent).prev().toggleClass('team__member--expanded line-clamp-3');
      $(parent).prev().animate({ height }, 300, "linear");
      $(this).animate({ rotate }, 300, "linear");
    });
  }

  handleOurTeamExpand();
  setActiveNavOption();
});