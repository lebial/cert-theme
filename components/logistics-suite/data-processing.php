<?php
function render_cards()
{
    $cards = get_field('cards');

    foreach ($cards as $card) {
        echo '<div class="px-6 !flex !flex-col !justify-center !items-center py-12 lg:py-0">';
            echo '<div class="flex flex-col">';
                echo '<h4 class="font-black text-4xl text-primary text-center">' . $card['title'] . '</h4>';
                echo '<div class="text-center">';
                    echo '<p class="mb-0 text-white leading-6 font-semibold">' . $card['sub_title'] . '</p>';
                echo '</div>';
            echo '</div>';
            echo '<div class=" w-20 h-px bg-primary my-4"></div>';
            echo '<div class="text-center">';
                echo '<p class="mb-0 text-white leading-5 text-sm">' . $card['description'] . '</p>';
            echo '</div>';
        echo '</div>';
    }
}
?>

<section id="dataProcessing" class="logistics__data__processing__section w-full flex justify-center items-center flex-col bg-center md:bg-left bg-cover min-h-[40vh] lg:min-h-[45vh]" style="--logistics-section-bg-img: url('<?php the_field('data_processing_background')?>'); ">
    <div class="w-full text-white text-center pt-16">
        <h3 class="text-xl md:text-4xl"><?php the_field('data_processing_title') ?></h3>
    </div>
    <div class="w-full">
        <div class="data__processing__slider mt-8 max-w-4xl flex mx-auto pb-12">
            <?php render_cards() ?>
        </div>
    </div>
</section>