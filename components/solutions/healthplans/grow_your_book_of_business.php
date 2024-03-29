<?php
function render_grow_slides()
{
  $slides = get_field('grow_slides');
  foreach ($slides as $slide) {
    if ($slide['title']) {
      echo '<div class="grow_book_slide relative z-20">';
      echo '<p class="grow_slide_title font-bold text-2xl lg:text-4xl text-center text-dark-blue-background">' . $slide['title'] . '</p>';
      echo '<p class="grow_slide_description text-center text-black">';
      echo strip_tags($slide['description'], '<a><b><strong>');
      echo '</p>';
      echo '</div>';
    }
  }
}

function render_title()
{
  if (get_field('grow_book_title')) {
    echo '<h3 class="text-center font-normal max-w-[200px] md:max-w-none mx-auto">' . get_field('grow_book_title') . '</h3>';
    echo '<div class="w-56 border border-primary border-solid mx-auto mt-8"></div>';
  }
}

?>
<section class="grow__your__book__of__business__section pt-16 pb-24 w-full bg-cover relative bg-[#d3dff9] ">
  <div class="section__body w-7/12 mx-auto">
    <?php render_title() ?>
    <div class="w-full relative">
      <div class="grow_book_slider mt-8 lg:mt-16 relative z-30">
        <?php render_grow_slides() ?>
      </div>
      <div class="grow_book_slider_arrows w-[93vw] absolute flex justify-between top-1/2 left-1/2 z-20" style="transform: translate(-50%, -50%)">
        <?php custom_slider_arrows('grow_book_slider') ?>
      </div>
    </div>
  </div>
</section>