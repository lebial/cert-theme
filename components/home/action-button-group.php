<?php
  function render_action_buttons() {
    $buttons = get_field('action_group_buttons');
    foreach($buttons as $button) {
      echo '<a href="'. get_bloginfo('wpurl').'/'. $button['link'].'"';
        echo' class=" flex-1 text-center border border-solid border-primary bg-primary outline-none text-white font-bold p-3 transition-all hover:text-primary hover:bg-white rounded-md mb-4 sm:mb-0 mr-0 sm:mr-4">';
        echo $button['text'];
      echo '</a>';
    };
  };
?>

<section class="w-full">
  <div class="w-full pt-12 sm:pt-20" data-aos="fade-up">
    <div class="flex justify-center px-12 md:px-0">
      <p class="text-xl 2xl:text-2xl sm:text-center w-full sm:w-6/12 px-6 sm:px-0">
        <?php echo get_field('action_group_description') ?>
      </p>
    </div>
    <div class="w-1/2 mx-auto py-12 px-4 sm:px-0 flex flex-col sm:flex-row sm:justify-center">
      <?php render_action_buttons() ?>
    </div>
  </div>
</section>