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

  setActiveNavOption();
});