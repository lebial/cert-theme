jQuery(document).ready(function ($) {
    $('.footer__links__toggle').click(function () {
        $(this).toggleClass('arrow--rotate');
        // $(this).next().toggle();
        $(this).parent().next().toggle();

    });

    function moveSocialIcons() {
        const lastGroup = $('.footer__links__group').last();
        $('.social__icons__clone').appendTo(lastGroup);
        $('.corp__info__clone').appendTo(lastGroup);
    }


    function addTargetBlankToCareers() {
        $('[name="footer-Careers"]').attr('target', '_blank');
    }

    // moveSocialIcons();
    addTargetBlankToCareers();
});