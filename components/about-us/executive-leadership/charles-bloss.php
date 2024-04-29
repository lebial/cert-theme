<section class="w-full h-full bg-white">
  <div class="w-8/12 flex mx-auto py-12">
    <div class="executive__image">
      <div class="mr-8">
        <img src="<?php the_field('image_url') ?>" alt="executive_image" class="w-36 h-36 lg:w-60 lg:h-56 2xl:w-52 2xl:h-52" />
      </div>
    </div>
    <div class="executive__description">
      <p class="text-sm pb-4"><?php the_field('title') ?></p>
      <p class="font-bold text-2xl"><?php the_field('executive_name') ?></p>
      <p class="font-bold text-base pb-8"><?php the_field('executive_position') ?></p>
      <p class="text-lg"><?php the_field('description') ?></p>
      <a href="<?php the_field('social_network_url') ?>" target="_blank" rel="noopener noreferer">
				<img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/footer/linkedin.svg" class="mt-4 style-svg w-8 fill-black-background" alt="">
			</a>
    </div>
  </div>
</section>