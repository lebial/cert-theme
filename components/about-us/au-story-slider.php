<?php
function render_story_slides()
{
  $slides = get_field('story_slides');
  foreach ($slides as $slide) {
    if ($slide['description']) {
      echo '<div class="au__quote__slide relative z-20">';
      echo '<p class="text-center text-dark-blue-background">';
      echo '<span>&ldquo;</span>';
      echo strip_tags($slide['description'], '<a><b><strong>');
      echo '<span>&rdquo;</span>';
      echo '</p>';
      echo '<p class="font-bold text-lg lg:text-xl text-center text-dark-blue-background">' . $slide['author'] . '</p>';
      echo '</div>';
    }
  }
}

function render_title()
{
  if (get_field('grow_book_title')) {
    echo '<h3 class="text-center font-extralight max-w-[200px] md:max-w-none mx-auto">' . get_field('grow_book_title') . '</h3>';
    echo '<div class="w-56 border border-primary border-solid mx-auto mt-8"></div>';
  }
}

?>
<section class="au__story__section pt-4 pb-16 w-full bg-cover relative bg-light-blue-background ">
  <div class="section__body w-9/12 lg:w-7/12 mx-auto">
    <?php render_title() ?>
    <div class="w-full relative">
      <div class="au__story__slider mt-8 lg:mt-16 relative z-30">
        <?php render_story_slides()
        ?>
      </div>
      <div class="au__story__slider__arrows w-[100vw] lg:w-[79vw] absolute flex justify-between top-1/2 left-1/2 z-20" style="transform: translate(-50%, -50%)">
        <?php custom_slider_arrows('au__story__slider') ?>
      </div>
    </div>
  </div>
</section>