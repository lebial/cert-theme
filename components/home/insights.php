<?php

function render_cards()
{
  $card_data = get_field('insights_cards');
  $post_options = array('numberposts' => 3);
  $posts = get_posts($post_options);
  $card_array = array();
  foreach ($card_data as $card) {
    array_push($card_array, $card);
  }
  foreach ($posts as $key => $post) {
    echo '<div class="h-full ml-1" >';
    echo '<a class="insights__card rounded-md custom-shadow flex flex-col items-center my-4 mx-2.5 text-black p-8" style="height: 98%;" href="' . get_permalink($post) . '">';
    echo '<img class="w-16 h-16 my-2" src="' . $card_array[$key]['icon'] . '"/>';
    echo '<h2 class="mx-auto pt-6 font-bold text-xl 2xl:text-2xl" >' . $post->post_title . '</h2>';
    echo '<p class="mb-4 mt-auto transition-all" href="' . get_permalink($post) . '">
                Learn More 
                <span class="text-gray-500 hover:text-gray-500 text-lg font-bold">&rarr;</span>
              </p>';
    echo '</a>';
    echo '</div>';
  }
  ;
}
;

?>
<div class="w-full h-full relative py-16 mt-14" id="<?php the_field('insights_section_id') ?>">
  <div class="flex justify-center w-full mb-12">
    <h2 class="text-2xl 2xl:text-4xl font-bold" data-aos="fade-up"><?php echo get_field('insights_title') ?></h2>
  </div>
  <div class="insights-carousel w-10/12 mx-auto my-4 relative z-30" data-aos="fade-up">
    <?php render_cards() ?>
  </div>
  <div class="arrows__container w-full absolute flex z-20 justify-between fill-black">
    <?php custom_slider_arrows("insights-carousel") ?>
  </div>
</div>