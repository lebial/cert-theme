jQuery(document).ready(function ($) {
  function handleSearchToggle() {
    const searchButton = $(".header__search__button");
    const searchBar = $(".search__bar__container");

    searchButton.click(function () {
      searchButton.addClass("hidden");
      $(searchBar).fadeIn();
    });
  }

  function handleNavigationToggle() {
    const burgerMenu = $(".new__burger__menu");
    const headerSection = $(".header__section");
    const sideCloseButton = $(".menu__side__bar__close");
    const sideBarMenu = $(".main__menu__sidebar");
    sideCloseButton.click(function () {
      sideBarMenu.animate({ right: "-100%" }, function () { headerSection.css("overflow", "hidden"); });
    });
    burgerMenu.click(function () {
      sideBarMenu.animate({ right: 0 });
      headerSection.css("overflow", "visible");
    });
  }

  function handleScheduleFormToggle() {
    const buttons = document.querySelectorAll(".schedule__demo__button");
    const closeButton = $(".schedule__demo__modal__close__button");
    const contactModal = $(".schedule__demo__modal");
    buttons.forEach((button) =>
      $(button).click(function () {
        contactModal.css("display", "flex");
        contactModal.animate({ opacity: 1 });
      })
    );
    closeButton.click(function () {
      contactModal.animate({ opacity: 0 }, 400, function () {
        contactModal.css("display", "none");
      });
    });
  }

  // temporary remove once it's demoed
  function addBlackToHeader() {
    if (location.href.includes("new-home-page-dark")) {
      $("header").removeClass("bg-dark-blue-background");
      $("header").addClass("bg-black-background");
      $("footer").removeClass("bg-dark-blue-background");
      $("footer").addClass("bg-black-background");
    }
    if (location.href.includes("new-home-page-dark-full")) {
      $("body").css("background-color", "#121621");
    } else {
      $("body").css("background-color", "white");
    }
  }

  handleSearchToggle();
  handleNavigationToggle();
  handleScheduleFormToggle();
  addBlackToHeader();
});
