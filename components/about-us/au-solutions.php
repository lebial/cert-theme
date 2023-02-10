<?php
    function render_cards() {
        $cards = get_field('solution_images');
        foreach($cards as $card) {
            echo '<div class="au__solutions__cards--card w-64 h-36 flex justify-center items-center bg-cover m-4" style="background-image:url('.$card['image'].'); background-size: cover; margin-top: 0;">';
                echo '<p>'.$card['title'].'</p>';
                echo '<img class="ml-2 w-2 h-4" src="'.$card['arrow_image'].'" alt="">';
            echo '</div>';
        }
    }
?>

<section class="au__solutions w-full h-full py-16 lg:py-24">
    <div class="w-full lg:w-11/12 flex flex-col items-center mx-auto">        
        <h2 class="text-4xl lg:text-[#5E5E5E] md:text-6xl font-light text-center block pb-8"><?php the_field('solutions_title')?></h2>
        <div class="au__solutions__cards lg:w-[80%] 2xl:w-[48%] flex items-center justify-center flex-wrap">
            <?php render_cards()?>
        </div>
    </div>
</section>