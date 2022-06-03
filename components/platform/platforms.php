<?php
    $slug = get_page_by_path('platform');
    $platforms_data = get_field('platforms_group', $slug->ID);
  function render_platforms($data) {
    foreach($data as $platform_data) {
      echo '<div class="platform-container px-12">';
        echo '<div class="icon__container flex justify-center">';
        echo '<h2 class="visual-element-hide">'.$platform_data['title'].'</h2>';
          echo '<div class=" w-10/12 md:w-1/2 lg:w10/12 lg:10/12 h-48 mb-10 md:mb-36 lg:mb-10" >';
            echo '<img class="w-full" src="'.$platform_data['main_icon'].'" data-aos="fade-up">';
          echo '</div>';
        echo '</div>';
        echo '<div class="platform__submenu">';
          foreach($platform_data['buttons'] as $button) {
          echo '<div class="platform__submenu__item py-10 mb-4" data-aos="fade-up">';
            echo '<div class="submenu__button w-full flex items-center justify-between">';
              echo '<div class="flex items-center">';
                echo '<div class="button__icon__container flex flex-col justify-center mr-2">';
                  echo '<img class="w-12 max-w-none" src="'.$button['icon'].'" >';
                echo '</div>';
                echo '<p class="text-2xl mb-0">'.$button['text'].'</p>';
              echo '</div>';
              echo '<p class="platforms__arrow text-xl"></p>';
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
      echo '<div class="w-1/2">';
      echo '<h2 class="visual-element-hide">'.$accelerator_data['title'].'</h2>';
        // echo '<div class="platforms__icon__container w-full flex justify-end py-4">';
        echo '<div class="platforms__icon__container w-full flex justify-end">';
          echo '<img class="style-svg platforms__main__icon--red w-[70%] mr-[10%]" src="'.$accelerator_data['main_icon_desktop'].'" >';
        echo '</div>';
      echo '</div>';
      echo '<div class="nucleus__content w-1/2">';
      echo '<h2 class="visual-element-hide">'.$nucleus_data['title'].'</h2>';
        // echo '<div class="platforms__icon__container w-full flex justify-start py-4">';
        echo '<div class="platforms__icon__container w-full flex justify-start">';
          echo '<img class="style-svg platforms__main__icon--blue w-[70%] ml-[10%] " src="'.$nucleus_data['main_icon_desktop'].'" >';
        echo '</div>';
      echo '</div>';
    echo '</div>';
  };

  function render_desktop_platform_options($data) {
    $accelerator_data = $data['platform_1'];
    $nucleus_data = $data['platform_2'];
    echo '<div class="platforms__container w-full flex mb-32 relative">';
      echo '<div class="w-full absolute top-3">';
        echo '<img class="style-svg platforms__down__arrow opacity-0 mx-auto w-24 2xl:w-44 max-w-[6rem] 2xl:max-w-[11rem] negative__arrow__rotate" style="transform: rotate(-90deg);" src="'.get_field('platforms_button_arrow').'"/>';
      echo '</div>';
      echo '<div class="platforms__buttons__animated platform-slide-animate w-full absolute flex" style="top: -30px;" data-platform-anim="platforms-slide-in">';
        echo '<div class="w-1/2 flex justify-end relative mr-[6%]">';
          echo '<div class="w-11/12 flex justify-end max-h-10 pt-1">';
            echo '<div class="w-10/12 h-full flex justify-between">';
              foreach($accelerator_data['buttons'] as $accelerator_button) {
                echo '<div class="platforms__icons--red platforms__icon__button rounded-full p-1 w-14 h-14 bg-primary relative flex justify-center items-center" >';
                  echo '<img class="style-svg" src="'.$accelerator_button['icon_desktop'].'">';
                  echo '<div class="platforms__button__content absolute text-center" style="width: 240%;">';
                    echo '<p class="text-base leading-tight" name="'.$accelerator_button['text'].'">'.$accelerator_button['text'].'</p>';
                  echo '</div>';
                echo '</div>';
              };
            echo '</div>';
          echo '</div>';
        echo '</div>';
        echo '<div class="w-1/2 flex justify-start relative">';
          echo '<div class="w-11/12 flex justify-start max-h-10 pt-1">';
            echo '<div class="w-10/12 h-full flex justify-between">';
              foreach($nucleus_data['buttons'] as $nucleus_button) {
                echo '<div class="platforms__icons--blue platforms__icon__button rounded-full p-1 w-14 h-14 bg-secondary relative flex justify-center items-center" >';
                  echo '<img class="style-svg" src="'.$nucleus_button['icon_desktop'].'">';
                  echo '<div class="platforms__button__content absolute text-center" style="width: 240%;">';
                    echo '<p class="text-base leading-tight" name="'.$nucleus_button['text'].'">'.$nucleus_button['text'].'</p>';
                  echo '</div>';
                echo '</div>';
              };
            echo '</div>';
          echo '</div>';
        echo '</div>';
      echo '</div>';
    echo '</div>';
  }

?>
<section id="platforms" class="w-screen mt-28 block lg:hidden" >
  <?php render_platforms($platforms_data) ?>
</section>

<section class="platforms w-screen hidden lg:block">
  <script id="platforms-data" type="application/json"><?php echo json_encode($platforms_data)?></script>
  <div class="platforms__data__container w-full h-[65vh] 2xl:h-[80vh] px-14 flex flex-col items-center justify-evenly" style="background-image: url(<?php echo get_template_directory_uri()?>/dist/assets/images/platform/platformsbg.png)">
    <div class="w-full" data-aos="fade-up">
      <h1 class=" tracking-wide text-xl lg:text-[3rem] 2xl:text-7xl text-center text-white font-normal leading-tight"><?php the_field('head_line')?></h1>
    </div>
    <?php render_desktop_platforms($platforms_data) ?>
  </div>
  <?php render_desktop_platform_options($platforms_data) ?>
  <div class="w-full flex justify-center">
    <div id="platforms-slide" class=" w-11/12 2xl:w-8/12 flex items-center justify-between platform-slide-animate" data-aos="fade-up" data-aos-offset="200">
      <button class="platforms__button left" name="platformsPrev">
        <img class="style-svg w-24  max-w-[6rem] " src="<?php the_field('platforms_button_arrow') ?>" alt="">
      </button>
      <p class="platforms__slide__title font-bold mb-0 flex-1 text-center" style="font-size: 21.5px">Connect Data</p>
      <div class="platforms__slide__icon px-4"><img class="w-24 max-w-[6rem]" src="" alt=""></div>
      <p class="platforms__slide__description text-base mb-0 w-[52%]">
        all forms of data are mapped, standarized, cleansed, validated and enriched through our market-leading
        data platform, with vendor agnositc interfaces and existing connectors to hundreds of sources.
      </p>
      <button class="platforms__button right" name="platformsNext">
        <img class="style-svg w-24 max-w-[6rem] xl:ml-8 2xl:ml-16" src="<?php the_field('platforms_button_arrow') ?>" alt="">
      </button>
    </div>
  </div>
</section>

