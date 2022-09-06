<?php
    function render_cards() {
        $cards = get_field('cards');
        foreach($cards as $card) {
               echo '<div class="card lg:px-20 lg:py-8 2xl:px-40">';
                    echo '<div class="card__image w-full flex justify-center">';
                        echo '<p>Image</p>';
                        //echo '<!-- <img src="'.$card['image'].'" alt="" class="card__image"> -->';
                    echo '</div>';
                    echo '<div class="card__content">';
                        echo '<div class="card__content--title text-center lg:px-12">';
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
    <div class="text-center">
        <h3 class="w-full lg:mb-12 2xl:mb-24"><?php the_field('title')?></h3>
    </div>
    <div class="cards w-full my-0 mx-auto grid lg:grid-cols-3 lg:gap-1 2xl:gap-20">
        <?php render_cards()?>
    </div>
</section>