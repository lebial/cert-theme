jQuery(document).ready(function($) {
    function handleSearchToggle() {
        const searchButton = $('.header__search__button');
        const searchBar = $('.search__bar__container');

        searchButton.click(function() {
            searchButton.addClass('hidden');
            $(searchBar).fadeIn();
        });
    }

    function handleNavigationToggle() {
        const burgerMenu = $('.new__burger__menu');
        const sideCloseButton = $('.menu__side__bar__close');
        const sideBarMenu = $('.main__menu__sidebar');
        sideCloseButton.click(function() {
            sideBarMenu.animate({ right: '-100%' });
        });
        burgerMenu.click(function() {
            sideBarMenu.animate({ right: 0 });
        });
    }

    handleSearchToggle();
    handleNavigationToggle();
});