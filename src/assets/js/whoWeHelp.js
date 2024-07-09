jQuery(document).ready(function ($) {

    function handleOptionClick() {
        $('.our__approach__button').click(function () {
            debugger;
            $('.option__content__container').hide();
            $(`.option__content__container[name="${this.name}"]`).show();
            $('.our__approach__button').removeClass('opacity-100');
            $(this).addClass('opacity-100');
        });
    }
    function handleOptionsInit() {
        const button = document.querySelectorAll('.our__approach__button')[0];
        $(button).click();
    }

    const { location: { href } } = window;
    if (href.includes("who-we-help")) {
        handleOptionClick();
        handleOptionsInit();
    }
});
