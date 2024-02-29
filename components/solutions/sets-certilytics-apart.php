<?php
function render_cards()
{
    $cards = get_field('cards');
    foreach ($cards as $card) {
        //    echo '<div class="solutions__card card px-12 pt-8 space-x-8 md:space-x-0 flex md:flex-col lg:px-8 lg:pt-8">';
        echo '<div class="card solutions__card w-full lg:w-1/3 flex mt-8 lg:mt-0 flex-col items-center px-5">';
        // echo '<div class="card__image w-4/12 md:w-full h-[45%] md:h-[27%] flex justify-end md:justify-center">';
        echo '<div class="card__body flex flex-col items-center ">';
        // echo '<div class="card__image__container w-4/12 md:w-full flex justify-end md:justify-center">';
        echo '<div class="card__image__container w-full flex justify-center">';
        echo '<img class="card__image w-28 h-16" src="' . $card['image'] . '" alt="card image">';
        echo '</div>';
        // echo '<div class="card__content w-7/12 md:w-full">';
        echo '<div class="card__content w-full">';
        // echo '<div class="card__content--title text-left md:text-center pt-0 pb-4 md:pt-4 md:pb-4 lg:px-8">';
        echo '<div class="card__content--title text-center pt-4 pb-4 ">';
        echo '<h4 class="text-lg leading-tight font-bold text-[#5E5E5E]">' . $card['title'] . '</h4>';
        echo '</div>';
        echo '<div class="flex justify-center">';
        echo '<p class="text-xs lg:text-sm text-center max-w-[268px] ">' . strip_tags($card['description'], '<a><strong>') . '</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}
?>

<section class="sets_apart_section w-full h-full bg-[#c7d7f6] bg-opacity-20 py-16 lg:py-24">
    <div class="w-full lg:w-11/12 flex flex-col items-center mx-auto">
        <p class="text-2xl md:text-4xl text-gray-header pb-0 mb-0 text-center font-bold hidden lg:block"><?php the_field('title') ?></p>
        <p class="text-2xl md:text-4xl text-center font-bold block lg:hidden">What Sets <br> Certilytics Apart</p>
        <!-- <div class="cards w-full grid lg:grid-cols-3 lg:gap-1 2xl:gap-20"> -->
        <div class="cards mt-6 lg:mt-14 w-full flex flex-col lg:flex-row lg:flex-wrap items-center lg:justify-center">
            <?php render_cards() ?>
        </div>
    </div>
</section>