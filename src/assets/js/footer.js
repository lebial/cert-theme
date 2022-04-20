jQuery(document).ready(function($) {
    $('.footer__links__toggle').click(function() {
        $(this).toggleClass('arrow--rotate');
        // $(this).next().toggle();
        $(this).parent().next().toggle();

    });
});