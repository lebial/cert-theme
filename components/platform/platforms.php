<?php
  function render_platforms() {
    $slug = get_page_by_path('platform');
    $platforms_data = get_field('platforms_group', $slug->ID);

    foreach($platforms_data as $platform_data) {
      echo '<div class="platform-container px-12">';
        echo '<div class="icon__container flex justify-center">';
        //add real image url through $platform['main_icon']
          echo '<div class=" w-10/12 h-48 bg-red-300" >place holder</div>';
        echo '</div>';
        echo '<h2 class="uppercase text-center mt-5 font-normal tracking-wide">'.$platform_data['title_platform'].'</h2>';
        echo '<div class="platform__submenu">';
          foreach($platform_data['buttons'] as $button) {
          echo '<div class="platform__submenu__item py-10 border-b-2 border-solid border-gray-300 mb-4">';
            echo '<div class="submenu__button w-full flex items-center justify-between">';
              echo '<div class="flex">';
                // replace nextline with real icon $button['icon']
                echo '<div class="rounded-full w-8 h-8 bg-red-400 mr-3"></div>';
                echo '<p class="text-3xl mb-0">'.$button['text'].'</p>';
              echo '</div>';
              echo '<p class="text-2xl">&#9654;</p>';
            echo '</div>';
          echo '</div>';
          }
        echo '</div>';
      echo '</div>';
    };
  };

?>
<section id="platforms" class="w-screen mt-28" >
  <?php render_platforms() ?>
</section>