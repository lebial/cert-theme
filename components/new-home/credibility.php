<?php
function render_partners()
{
    $partnerOpts = get_field('partners_title');
    foreach ($partnerOpts as $idx => $glitch) {
        echo '<span class="glitch hidden font-bold" name="glitch-text-' . $idx . '" data-text="' . $glitch['title'] . '">' . $glitch['title'] . '</span>';
    }
}

function render_cards()
{
    $cards = get_field('credibility_cards');
    foreach ($cards as $card) {
        echo '<div class="card flex flex-col w-1/3 items-center">';
        echo '<div class="card__data flex flex-col h-48">';
        echo '<h4 class="reveal-text font-bold text-xl text-dark-blue-background text-center pb-6">' . $card['title'] . '</h4>';
        echo '<div class="card__point text-center">';
        foreach ($card['point_description'] as $pointDescription) {
            echo '<p class="mb-0 text-dark-blue-background">' . $pointDescription['point'] . '</p>';
        }
        echo '</div>';
        echo '</div>';
        echo '<div class="text-center p-0 pt-6">';
        echo '<a class="px-3 py-2 border-primary border border-solid rounded-3xl text-dark-blue-background font-bold hover:cursor-pointer transition-all duration-300 hover:bg-primary hover:text-white text-center" href="' . $card['explore_button_link'] . '" target="_blank">Explore More</a>';
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
?>

<section class="w-full h-full">
    <div class=" w-10/12 mx-auto max-w-4xl lg:pt-20 mb-0 lg:mb-4 flex justify-center">
        <h2 class="font-normal text-2xl lg:text-5xl text-center text-gray-header">
            <?php the_field('first_main_title_section') ?>
            <div class="">
                <?php render_partners() ?>
            </div>
            <span class="text-left"><?php the_field('second_main_title_section') ?></span>
        </h2>
    </div>

    <div class="credibility__body w-7/12 mx-auto pb-20 flex justify-center">
        <?php the_field('description') ?>
    </div>

    <div class="w-full h-full bg-light-blue-background">
        <div class="cards__container w-11/12 mx-auto flex py-16 max-w-7xl text-gray-header">
            <?php render_cards() ?>
        </div>
    </div>
</section>