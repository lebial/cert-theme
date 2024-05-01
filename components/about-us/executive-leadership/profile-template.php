<section class="w-full h-full bg-white">
  <div class="w-10/12 lg:w-8/12 flex flex-col items-center lg:flex-row lg:items-start lg:justify-center mx-auto py-12">
    <div class="executive__profile__title__mobile">
      <?php the_field('title') ?>
    </div>
    <div class="executive__image w-full lg:w-5/12 flex justify-center ">
      <div class="mb-12 rounded-full w-48 h-48 xl:w-56 xl:h-56 overflow-hidden relative">
        <img src="<?php the_field('image_url') ?>" alt="" class="w-full h-full object-cover absolute" />
      </div>
    </div>
    <div class="executive__description">
      <div class="executive__profile__title__desktop">
        <?php the_field('title') ?>
      </div>
      <p class="font-bold text-2xl"><?php the_field('executive_name') ?></p>
      <p class="font-bold text-base pb-8"><?php the_field('executive_position') ?></p>
      <p class="text-lg"><?php the_field('description') ?></p>
      <a href="<?php the_field('social_network_url') ?>" target="_blank" rel="noopener noreferer">
		    <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/footer/linkedin.svg" class="mt-8 style-svg w-8 fill-black-background" alt="">
	    </a>
    </div>
  </div>
</section>