jQuery(document).ready(function ($) {
    function handleSearchToggle() {
        const searchButton = $('.header__search__button');
        const searchBar = $('.search__bar__container');

        searchButton.click(function () {
            searchButton.addClass('hidden');
            $(searchBar).fadeIn();
        });
    }

    function handleNavigationToggle() {
        const burgerMenu = $('.new__burger__menu');
        const sideCloseButton = $('.menu__side__bar__close');
        const sideBarMenu = $('.main__menu__sidebar');
        sideCloseButton.click(function () {
            sideBarMenu.animate({ right: '-100%' });
        });
        burgerMenu.click(function () {
            sideBarMenu.animate({ right: 0 });
        });
    }

    function handleScheduleFormToggle() {
        const buttons = document.querySelectorAll('.schedule__demo__button');
        const closeButton = $('.schedule__demo__modal__close__button');
        const contactModal = $('.schedule__demo__modal');
        buttons.forEach(button => $(button).click(function () {
            contactModal.css('display', 'flex')
            contactModal.animate({ opacity: 1 })
        }));
        closeButton.click(function () {
            contactModal.animate({ opacity: 0 }, 400, function () {
                contactModal.css('display', 'none')
            })
        })

    }

    handleSearchToggle();
    handleNavigationToggle();
    handleScheduleFormToggle();
});