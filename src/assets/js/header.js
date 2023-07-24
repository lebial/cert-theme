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

    //handle outside click
    $(document).click((e) => {
      const bar = document.querySelector('.main__menu__sidebar');
      //make sure it's open and it's not the burger button and the click it's outside the menu
      if (!bar.contains(e.target) && bar.classList.contains('side-bar--open') && !burgerMenu[0].contains(e.target)) {
        sideBarMenu.animate({ right: "-100%" }, function () { headerSection.css("overflow", "hidden"); });
        sideBarMenu.removeClass('side-bar--open');
      }
    })

    sideCloseButton.click(function () {
      sideBarMenu.animate({ right: "-100%" }, function () { headerSection.css("overflow", "hidden"); });
      sideBarMenu.removeClass('side-bar--open');
    });
    burgerMenu.click(function () {
      if (sideBarMenu.hasClass('side-bar--open')) {
        sideBarMenu.animate({ right: "-100%" }, function () { headerSection.css("overflow", "hidden"); });
        sideBarMenu.removeClass('side-bar--open');
      }
      else {
        sideBarMenu.animate({ right: 0 });
        headerSection.css("overflow", "visible");
        sideBarMenu.addClass('side-bar--open');
      }
    });


  }

  function handleMenuItemClickCloseNav() {
    const menuItems = document.querySelectorAll('.menu-item');
    menuItems.forEach(item => $(item).click(function () {
      $('.menu__side__bar__close').click();
    }));
  }

  function handleScheduleFormToggle() {
    const buttons = document.querySelectorAll(".schedule__demo__button");
    const closeButton = $(".schedule__demo__modal__close__button");
    const sideMenuCloseButton = $(".menu__side__bar__close");
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

    //handle esc to close modal
    $(document).keydown(function (e) {
      const code = e.keyCode || e.which;
      if (code === 27) {
        closeButton.click();
        sideMenuCloseButton.click();
      }
    });

    //handle overlayClick Close
    $('.schedule__demo__modal').click((e) => {
      if ($(e.target).is($('.schedule__demo__modal'))) closeButton.click();
    })
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
  handleMenuItemClickCloseNav();
  addBlackToHeader();
});
