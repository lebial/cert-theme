<?php if (have_posts()):
  while (have_posts()):
    the_post(); ?>
    <div class="ai_insight_card rounded-lg mb-4 p-4 transition-all duration-300 hover:scale-105">
      <div class="image__container">
        <img src="<?php the_field('post_hero_image', get_the_ID()) ?>" class="rounded-xl" />
      </div>
      <div class="ai_card_body">
        <p class="text-gray-400 text-xs my-2"><?php echo get_the_date('m/d/o'); ?></p>
        <h3 class=" text-dark-blue-background text-sm font-bold mb-2"> <?php the_title(); ?></h3>
        <p class="text-dark-blue-background text-xs">
          <?php render_excerpt_or_post_content(get_the_ID(), excerpt(20)) ?>
        </p>
        <a href="<?php the_permalink(); ?>"
          class="py-1 px-2 border border-solid rounded-3xl border-primary text-primary text-xs inline-block mt-4 transition-all duration-300 hover:bg-primary hover:text-white">Read
          More</a>
      </div>
    </div>

  <?php endwhile;
endif; ?>