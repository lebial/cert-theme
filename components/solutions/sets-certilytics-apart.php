<?php
    function render_cards() {
        $cards = get_field('cards');
        foreach($cards as $card) {
               echo '<div class="card px-12 py-4 lg:px-8 lg:py-8 2xl:px-40">';
                    echo '<div class="card__image w-full flex justify-center">';
                        echo '<p>Image</p>';
                        //echo '<!-- <img src="'.$card['image'].'" alt="" class="card__image"> -->';
                    echo '</div>';
                    echo '<div class="card__content">';
                        echo '<div class="card__content--title text-center py-4 lg:px-12">';
                            echo '<h4 class="text-base font-bold">'.$card['title'].'</h4>';
                        echo '</div>';
                        echo '<div class="">';
                            echo '<p class="lg:text-sm">'.$card['description'].'</p>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
        }
    }
?>

<section class="w-full h-full bg-gray-primary pb-20">
    <div class="w-full md:w-8/12 lg:w-9/12 flex flex-col items-center mx-auto">
        <p class="text-2xl md:text-4xl font-bold py-8 md:py-12 text-center"><?php the_field('title')?></p>
        <div class="cards w-full grid lg:grid-cols-3 lg:gap-1 2xl:gap-20">
            <?php render_cards()?>
        </div>
    </div>
</section>