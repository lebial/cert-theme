<?php
    function render_cards() {
        $cards = get_field('cards');
        foreach($cards as $card) {
               echo '<div class="card px-12 py-4 space-x-8 md:space-x-0 flex md:flex-col lg:px-8 lg:py-8 2xl:px-24">';
                    echo '<div class="card__image w-5/12 md:w-full h-[45%] md:h-[27%] flex justify-end md:justify-center">';
                        echo '<img class="card__image" src="'.$card['image'].'" alt="">';
                    echo '</div>';
                    echo '<div class="card__content w-7/12 md:w-full">';
                        echo '<div class="card__content--title text-left md:text-center pt-0 pb-4 md:pt-4 md:pb-4 lg:px-8">';
                            echo '<h4 class="text-lg font-bold text-[#5E5E5E]">'.$card['title'].'</h4>';
                        echo '</div>';
                        echo '<div class="">';
                            echo '<p class="text-xs lg:text-sm">'.$card['description'].'</p>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
        }
    }
?>

<section class="w-full h-full bg-white pb-20">
    <div class="w-full md:w-8/12 lg:w-9/12 flex flex-col items-center mx-auto">
        <p class="text-2xl md:text-4xl py-8 md:py-12 text-center"><?php the_field('title')?></p>
        <div class="cards w-full grid lg:grid-cols-3 lg:gap-1 2xl:gap-20">
            <?php render_cards()?>
        </div>
    </div>
</section>