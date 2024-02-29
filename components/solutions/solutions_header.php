<div class="w-full p-1 text-center text-lg lg:text-xl md:text-left md:p-4 flex flex-col md:flex-row justify-center text-white" style="background-color: rgb(87, 134, 228);">
  <?php the_field('banner_text') ?>
  <div class=""><a class="font-bold underline" style="margin: 0 10px; position: static;" href="<?php the_field('banner_learn_more_ref') ?>">Learn More </a> &rarr;</div>
</div>
<section class="solutions__header w-full bg-dark-blue-background flex justify-center items-center bg-cover" style="background-image:url(<?php the_field('header_background') ?>); background-size: cover; margin-top: 0;">
  <div class="w-full px-4 lg:px-0 text-center my-12 lg:my-32 relative">
    <h1 class="text-white font-normal"><?php the_field('headline') ?></h1>
    <div class="w-11/12 md:w-1/2 mx-auto">
      <p class="text-white max-w-none mt-4 md:mt-12 text-xl lg:text-2xl">
        <?php the_field('headline_description') ?>
      </p>
    </div>
  </div>
  <div class="md:p-4 hidden"></div>
</section>