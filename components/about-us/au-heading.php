<section class="au__heading w-full bg-dark-blue-background flex justify-center items-center bg-cover" style="background-image:url(<?php the_field('banner_image') ?>); background-size: cover; margin-top: 0;">
  <div class="w-full px-4 lg:px-0 text-center my-12 lg:my-32 relative">
    <h1 class="text-white font-normal"><?php the_field('heading_title') ?></h1>
    <div class="au__heading__description w-11/12 md:w-8/12 lg:w-10/12 2xl:w-8/12 mx-auto mt-7 ">
      <p class="text-white text-center lg:text-left">
        <?php the_field('heading_description') ?>
      </p>
    </div>
  </div>
</section>