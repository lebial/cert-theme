
jQuery(document).ready(function ($) {
  const cardSelector = '.logistics__point__card';

  function handleOptionClick() {
    $(cardSelector).removeClass('is-card-active');
    $(this).addClass('is-card-active');
  }

  function handleValidationOptionSelect() {
    const cards = document.querySelectorAll(cardSelector);
    cards.forEach(card => $(card).click(handleOptionClick));
  }


  if (window.location.href.includes("data-logistics")) {
    handleValidationOptionSelect();
  }
});