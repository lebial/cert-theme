<?php
  function render_action_buttons() {
    $buttons = get_field('action_group_buttons');
    foreach($buttons as $button) {
      echo '<a href="'. get_bloginfo('wpurl').'/'. $button['link'].'"';
        echo' class="home__action__group__button text-center border border-solid border-primary bg-primary outline-none text-white font-bold p-2 transition-all hover:text-primary hover:bg-white rounded-md mb-4 md:mb-0 mr-0 md:mr-8 w-fit">';
        echo $button['text'];
      echo '</a>';
    };
  };
?>

<section class="w-full" id="<?php the_field('market_segments_section_id')?>">
  <div class="w-full pt-12 sm:pt-20" data-aos="fade-up">
    <div class="flex justify-center px-12 md:px-0">
      <p class="text-xl 2xl:text-2xl sm:text-center w-full sm:w-6/12 px-6 sm:px-0">
        <?php echo get_field('action_group_description') ?>
      </p>
    </div>
    <div class="w-11/12 2xl:w-8/12 mx-auto pt-12 pb-12 lg:pb-0 px-4 lg:px-0 flex flex-col lg:flex-row lg:justify-center items-center">
      <?php render_action_buttons() ?>
    </div>
  </div>
</section>