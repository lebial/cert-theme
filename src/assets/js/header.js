//share session between tabs;
function handleSessionStorage() {
  window.addEventListener('storage', (event) => {
    const visited = window.sessionStorage.getItem('firstVisit');
    if (event.key === 'requestShare' && visited) {
      window.localStorage.setItem('shareSession', 'true');
      window.localStorage.removeItem('shareSession');
    }
    if (event.key === 'shareSession' && !visited) {
      {
        window.sessionStorage.setItem('firstVisit', event.newValue);
      }
    }
  });
}
function handleTabOpen() {
  window.localStorage.setItem('requestShare', 'true');
  window.localStorage.removeItem('requestShare');
};
handleSessionStorage();
handleTabOpen();

//header logic
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
    const dropdownOptions = document.querySelectorAll('#field_meetingoptionsdrop option');
    const select = document.getElementById('field_meetingoptionsdrop');

    buttons.forEach((button) =>
      $(button).click(function () {
        contactModal.css("display", "flex");
        contactModal.animate({ opacity: 1 });
        select.value = $(dropdownOptions[1]).attr('value');
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


  function handleDirectDemoOptionsClick() {
    const directOptionButtons = document.querySelectorAll('.direct__schedule__button');
    directOptionButtons.forEach(button => $(button).click(function () {
      $('.schedule__demo__button')[0].click();
      const dropdownOptions = document.querySelectorAll('#field_meetingoptionsdrop option');
      const select = document.getElementById('field_meetingoptionsdrop');
      select.value = $(dropdownOptions[this.dataset.value]).attr('value');
    }))
  }

  function handleDemoOptions() {
    const firstVisit = sessionStorage.getItem('firstVisit');
    const buttonContainer = $('.fade__in__container');
    const navScheduleButton = $('.nav__schedule__demo__button');
    const isMobile = window.matchMedia("only screen and (max-width: 1023px)").matches;
    if (!firstVisit) {
      navScheduleButton.addClass('pulse__animate');
      if (!isMobile) buttonContainer.delay(4000).fadeIn("slow", handleDirectDemoOptionsClick);
      sessionStorage.setItem('firstVisit', 'true');
    }

  };

  handleTabOpen();
  // handleSearchToggle();
  handleNavigationToggle();
  handleScheduleFormToggle();
  handleMenuItemClickCloseNav();
  handleDemoOptions();
});
