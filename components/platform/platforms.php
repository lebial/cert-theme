<?php
  function render_platforms() {
    $slug = get_page_by_path('platform');
    $platforms_data = get_field('platforms_group', $slug->ID);

    foreach($platforms_data as $platform_data) {
      echo '<div class="platform-container px-12">';
        echo '<div class="icon__container flex justify-center">';
        //add real image url through $platform['main_icon']
          echo '<div class=" w-10/12 h-48 mb-5" >';
            echo '<img class="style-svg w-full" src="'.$platform_data['main_icon'].'" >';
          echo '</div>';
        echo '</div>';
        // echo '<h2 class="uppercase text-center mt-5 font-normal tracking-wide">'.$platform_data['title_platform'].'</h2>';
        echo '<div class="platform__submenu">';
          foreach($platform_data['buttons'] as $button) {
          echo '<div class="platform__submenu__item py-10 mb-4">';
            echo '<div class="submenu__button w-full flex items-center justify-between">';
              echo '<div class="flex items-center">';
                // replace nextline with real icon $button['icon']
                echo '<div class="button__icon__container flex flex-col justify-center mr-3">';
                  echo '<img class="w-full style-svg" src="'.$button['icon'].'" >';
                echo '</div>';
                echo '<p class="text-3xl mb-0">'.$button['text'].'</p>';
              echo '</div>';
              echo '<p class="platforms__arrow text-2xl">&#9654;</p>';
            echo '</div>';
            echo '<div class="platforms__content__body mt-4 w-full">';
              echo '<p class="platforms__content__description text-2xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur unde dolore dolorem laudantium, totam et. Eaque magni vel quasi dolores voluptas. Beatae, excepturi sequi ipsam sunt placeat exercitationem laudantium nam.</p>';
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

