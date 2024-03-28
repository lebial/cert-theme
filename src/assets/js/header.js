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

  function menuClickCheck(e) {
    const bar = document.querySelector('.main__menu__sidebar');
    const isMobile = window.matchMedia("only screen and (max-width: 1023px)").matches;
    const burgerMenu = $(".new__burger__menu");
    const mainItem = $(e.target).parent();

    if (mainItem.hasClass('main-page-link') && isMobile) return false;
    //make sure it's open and it's not the burger button and the click it's outside the menu
    if (!bar.contains(e.target) && bar.classList.contains('side-bar--open') && !burgerMenu[0].contains(e.target)) return true;
  }

  function handleOutsideClick(e) {
    if (menuClickCheck(e)) {
      const headerSection = $(".header__section");
      const sideBarMenu = $(".main__menu__sidebar");
      sideBarMenu.animate({ right: "-100%" }, function () { headerSection.css("overflow", "hidden"); });
      sideBarMenu.removeClass('side-bar--open');
    }
  }

  function handleNavigationToggle() {
    const burgerMenu = $(".new__burger__menu");
    const headerSection = $(".header__section");
    const sideCloseButton = $(".menu__side__bar__close");
    const sideBarMenu = $(".main__menu__sidebar");

    //handle outside click
    $(document).click(handleOutsideClick);

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
    // menuItems.forEach(item => $(item).click(function () {
    //   $('.menu__side__bar__close').click();
    // }));
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
    // const isHome = $('body').hasClass('home');

    // if (isHome || !firstVisit) { //revert once this comes back to being just in home
    if (!firstVisit) {
      navScheduleButton.addClass('pulse__animate');
      if (!isMobile) buttonContainer.delay(4000).fadeIn("slow", handleDirectDemoOptionsClick);
      sessionStorage.setItem('firstVisit', 'true');
    }

  };

  function addTradeMarkToBrainstormLinks() {
    const links = [...document.querySelectorAll('.menu-item a[href*=brainstorm-ai]'), ...document.querySelectorAll('.footer__link[href*="brainstorm"]')];
    const trademark = '<span class="registeredSymbol" data-symbol="®"></span>'
    links.forEach(link => {
      $(link).append(trademark);
    });
  }

  function handleMobileOptionClick(ev) {
    const currentSubMenu = $(this).find('.sub-menu');
    const currentLink = $(this).find('a');
    const { href } = ev.target;
    if (!href || href?.contains('news-insights')) ev.preventDefault();
    currentLink.toggleClass('active_item_arrow');
    currentSubMenu.toggle();
  }

  function handleMobileSiteMap() {
    const isMobile = window.matchMedia("only screen and (max-width: 1023px)").matches;
    if (isMobile) {
      $('.sub-menu').hide();
      $('.main-page-link').click(handleMobileOptionClick);
      $('.current-menu-parent>a').click();
    }
  }

  handleTabOpen();
  // handleSearchToggle();
  handleNavigationToggle();
  handleMenuItemClickCloseNav();
  handleDemoOptions();
  addTradeMarkToBrainstormLinks();
  handleMobileSiteMap();
});
