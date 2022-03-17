<?php
  function render_platforms() {
    $slug = get_page_by_path('platform');
    $platforms_data = get_field('platforms_group', $slug->ID);

    foreach($platforms_data as $platform_data) {
      echo '<div class="platform-container px-12">';
        echo '<div class="icon__container flex justify-center">';
          echo '<div class=" w-10/12 h-48 mb-10" >';
            echo '<img class="style-svg w-full" src="'.$platform_data['main_icon'].'" data-aos="fade-up">';
          echo '</div>';
        echo '</div>';
        echo '<div class="platform__submenu">';
          foreach($platform_data['buttons'] as $button) {
          echo '<div class="platform__submenu__item py-10 mb-4" data-aos="fade-up">';
            echo '<div class="submenu__button w-full flex items-center justify-between">';
              echo '<div class="flex items-center">';
                // replace nextline with real icon $button['icon']
                echo '<div class="button__icon__container flex flex-col justify-center mr-2">';
                  echo '<img class=" w-12 max-w-none style-svg" src="'.$button['icon'].'" >';
                echo '</div>';
                echo '<p class="text-lg mb-0">'.$button['text'].'</p>';
              echo '</div>';
              echo '<p class="platforms__arrow text-2xl"></p>';
            echo '</div>';
            echo '<div class="platforms__content__body mt-4 w-full">';
              echo '<p class="platforms__content__description text-lg">'.$button['description'].'</p>';
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

