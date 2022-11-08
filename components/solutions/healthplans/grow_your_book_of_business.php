<?php
  function render_grow_slides() {
    $slides = get_field('grow_slides');
    foreach ($slides as $slide) {
      echo '<div class="grow_book_slide">';
        echo '<p class="grow_slide_title font-bold text-xl lg:text-4xl text-center text-dark-blue-background">'.$slide['title'].'</p>';
          echo '<p class="grow_slide_description text-center text-black">';
            echo $slide['description'];
          echo '</p>';
      echo '</div>';
    }
  }
?>
<section class="grow__your__book__of__business__section pt-16 pb-24 w-full bg-cover relative bg-[#d3dff9] ">
    <!-- <img src="<?php// the_field('grow_background')?>" class="hidden md:block w-full h-full absolute top-0 left-0 -z-10 " alt=""> -->
    <div class="section__body w-7/12 mx-auto">
        <h3 class="text-center font-extralight max-w-[200px] md:max-w-none mx-auto"><?php the_field('grow_book_title') ?></h3>
        <div class="w-56 border border-primary border-solid mx-auto mt-8"></div>
        <div class="grow_book_slider mt-8 lg:mt-16">
          <?php render_grow_slides()?>
        </div>
    </div>
</section>