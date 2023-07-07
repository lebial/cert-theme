<?php
function render_partners()
{
    $partnerOpts = get_field('partners_title');
    foreach ($partnerOpts as $partner) {
        echo '<span>' . $partner['title'] . '</span>';
    }
}

function render_cards()
{
    $cards = get_field('credibility_cards');
    $duration = 2 / 3;
    $pos = 0;
    foreach ($cards as $card) {
        $delay = .800 * $pos;
        echo '<div class="card flex flex-col w-10/12 md:w-full lg:w-1/3 mx-auto items-center py-12 lg:py-0">';
        echo '<div class="card__data flex flex-col h-48">';
        echo '<h4 data-animate-delay="' . $delay . '" data-animate-duration="' . $duration . '" class="reveal-text font-bold text-xl text-white text-center pb-6">' . $card['title'] . '</h4>';
        echo '<div class="card__point text-center">';
        foreach ($card['point_description'] as $pointDescription) {
            echo '<p class="mb-0 text-white">' . $pointDescription['point'] . '</p>';
        }
        echo '</div>';
        echo '</div>';
        echo '<div class="text-center p-0 pt-6">';
        echo '<a class="px-3 py-2 border-primary border border-solid rounded-3xl text-white font-bold hover:cursor-pointer transition-all duration-300 hover:bg-primary hover:text-white text-center" href="' . $card['explore_button_link'] . '">Explore More</a>';
        echo '</div>';
        echo '</div>';
        $pos += 1;
    }
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
?>

<section class="home__credibility__section w-full h-full">
    <div class=" w-10/12 mx-auto max-w-4xl lg:pt-12 mb-0 lg:mb-4 flex justify-center">
        <h2 class="font-normal text-3xl lg:text-5xl text-center text-black-background">
            <?php the_field('first_main_title_section') ?><br>
            <span class="typed font-bold"></span><br>
            <span><?php the_field('second_main_title_section') ?></span>
        </h2>

        <div id="string-text">
            <?php render_partners() ?>
        </div>
    </div>

    <div class="credibility__body w-11/12 md:w-9/12 lg:w-7/12 mx-auto pb-12 lg:pb-20 flex justify-center">
        <p style="color: #0b0d14;" class=" text-black-background text-center"><?php echo strip_tags(get_field('description')) ?></p>
    </div>

    <div class="w-full h-full bg-black-background">
        <div class="cards__container w-11/12 mx-auto flex flex-col lg:flex-row py-4 lg:py-16 max-w-7xl text-white">
            <?php render_cards() ?>
        </div>
    </div>
</section>