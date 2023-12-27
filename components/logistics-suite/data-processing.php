<?php


function render_cards()
{
    $cards = get_field('cards');

    foreach ($cards as $card) {
        echo '<div class="flex flex-col w-10/12 md:w-full lg:w-1/3 mx-auto items-center py-12 lg:py-0">';
            echo '<div class="flex flex-col">';
                echo '<h4 class="font-black text-4xl text-primary text-center">' . $card['title'] . '</h4>';
                echo '<div class="text-center">';
                    echo '<p class="mb-0 text-white font-semibold">' . $card['sub_title'] . '</p>';
                echo '</div>';
            echo '</div>';
            echo '<div class=" w-20 h-px bg-primary my-4"></div>';
            echo '<div class="text-center">';
                echo '<p class="mb-0 text-white leading-5 text-base">' . $card['description'] . '</p>';
            echo '</div>';
        echo '</div>';
    }
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
?>

<section class="logistics__data__processing__section w-full flex justify-center items-center flex-col bg-center md:bg-left bg-cover min-h-[40vh] lg:min-h-[45vh]" style="background-image:url(<?php the_field('data_processing_background') ?>); background-size: cover; margin-top: 0;">
    <div class="w-full text-white text-center pt-16">
        <h3 class="text-xl md:text-4xl"><?php the_field('data_processing_title') ?></h3>
    </div>
    <div class="w-9/12 mx-auto flex flex-col lg:flex-row py-4 lg:py-12 pb-4 lg:pb-16 max-w-5xl text-white space-x-0 lg:space-x-24">
        <?php render_cards() ?>
    </div>
</section>