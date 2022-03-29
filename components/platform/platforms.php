<?php
    $slug = get_page_by_path('platform');
    $platforms_data = get_field('platforms_group', $slug->ID);
  function render_platforms($data) {
    foreach($data as $platform_data) {
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

  function render_desktop_platforms($data) {
    $accelerator_data = $data['platform_1'];
    $nucleus_data = $data['platform_2'];
    echo '<div class="platforms__container flex w-full">';
      echo '<div class="w-1/2 bg-primary">';
        echo '<div class="platforms__icon__container w-full flex justify-end py-10">';
          echo '<img class="w-8/12" src="'.$accelerator_data['main_icon_desktop'].'" >';
        echo '</div>';
      echo '</div>';
      echo '<div class="nucleus__content w-1/2 bg-secondary">';
        echo '<div class="platforms__icon__container w-full flex justify-start py-10">';
          echo '<img class=" w-8/12" src="'.$nucleus_data['main_icon_desktop'].'" >';
        echo '</div>';
      echo '</div>';
    echo '</div>';
    echo '<div class="platforms__container w-full flex mb-28">';
      echo '<div class="w-1/2 bg-primary flex justify-end relative">';
        echo '<div class="w-full platforms__dots">';
          echo '<div class="platforms__dots__animation"></div>';
        echo '</div>';
        echo '<div class="w-11/12 flex justify-evenly max-h-10 pt-1">';
          foreach($accelerator_data['buttons'] as $accelerator_button) {
            echo '<div class="platforms__icons--red platforms__icon__button rounded-full w-12 h-12 bg-white relative flex justify-center items-center" >';
              echo '<img src="'.$accelerator_button['icon_desktop'].'">';
              echo '<div class="platforms__button__content absolute text-center" style="width: 240%;">';
                echo '<p class="text-base leading-tight" name="'.$accelerator_button['text'].'">'.$accelerator_button['text'].'</p>';
              echo '</div>';
            echo '</div>';
          };
        echo '</div>';
      echo '</div>';
      echo '<div class="w-1/2 bg-secondary flex justify-start relative">';
        echo '<div class="w-full platforms__dots">';
          echo '<div class="platforms__dots__animation"></div>';
        echo '</div>';
        echo '<div class="w-11/12 flex justify-evenly max-h-10 pt-1">';
          foreach($nucleus_data['buttons'] as $nucleus_button) {
            echo '<div class="platforms__icons--blue platforms__icon__button rounded-full w-12 h-12 bg-white relative flex justify-center items-center" >';
              echo '<img src="'.$nucleus_button['icon_desktop'].'">';
              echo '<div class="platforms__button__content absolute text-center" style="width: 240%;">';
                echo '<p class="text-base leading-tight" name="'.$nucleus_button['text'].'">'.$nucleus_button['text'].'</p>';
              echo '</div>';
            echo '</div>';
          };
        echo '</div>';
      echo '</div>';
    echo '</div>';
  };

?>
<section id="platforms" class="w-screen mt-28 block lg:hidden" >
  <?php render_platforms($platforms_data) ?>
</section>

<section class="platforms w-screen mt-28 hidden lg:block">
  <script id="platforms-data" type="application/json"><?php echo json_encode($platforms_data)?></script>
  <?php render_desktop_platforms($platforms_data) ?>
  <div class="w-full flex justify-center">
    <div id="platforms-slide" class=" w-9/12 flex items-center">
      <button class="platforms__button left" name="platformsPrev">
        <img class="w-11/12" src="<?php the_field('platforms_button_arrow') ?>" alt="">
      </button>
      <p class="platforms__slide__title font-bold mb-0 ml-10">Connect Data</p>
      <div class="platforms__slide__icon px-5"><img class="w-full" src="" alt=""></div>
      <p class="platforms__slide__description pr-10 text-base mb-0">
        all forms of data are mapped, standarized, cleansed, validated and enriched through our market-leading
        data platform, with vendor agnositc interfaces and existing connectors to hundreds of sources.
      </p>
      <button class="platforms__button right" name="platformsNext">
        <img class="w-11/12" src="<?php the_field('platforms_button_arrow') ?>" alt="">
      </button>
    </div>
  </div>
</section>

