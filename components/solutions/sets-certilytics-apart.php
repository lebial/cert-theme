<?php
    function render_cards() {
        $cards = get_field('cards');
        foreach($cards as $card) {
               echo '<div class="solutions__card card px-12 pt-8 space-x-8 md:space-x-0 flex md:flex-col lg:px-8 lg:pt-8 2xl:px-24">';
                    // echo '<div class="card__image w-4/12 md:w-full h-[45%] md:h-[27%] flex justify-end md:justify-center">';
                    echo '<div class="card__image__container w-4/12 md:w-full flex justify-end md:justify-center">';
                        echo '<img class="card__image w-28 h-16" src="'.$card['image'].'" alt="">';
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

<section class="sets_apart_section w-full h-full bg-white py-16 lg:py-24">
    <div class="w-full md:w-8/12 lg:w-9/12 flex flex-col items-center mx-auto">
        <p class="text-2xl md:text-4xl pb-8 md:pb-12 text-center font-bold"><?php the_field('title')?></p>
        <div class="cards w-full grid lg:grid-cols-3 lg:gap-1 2xl:gap-20">
            <?php render_cards()?>
        </div>
    </div>
</section>