<?php 
  $timeline = get_field('timeline');
  function render_timeline_nav($data) {
    foreach ($data as $time_period) {
      echo '<div class="date__container">';
          echo '<div class="main-year ">';
              echo '<div class="circle__container">';
                  echo '<p>'.$time_period['year'].'</p>';
              echo '</div>';
          echo '</div>';
      echo '</div>';
    }
  }

  function render_timeline_data($data) {
    foreach ($data as $time_period) {
      echo '<div>';
        echo '<div class="w-full flex flex-col sm:flex-row items-center justify-center">';
          echo '<div class="w-full md:w-1/2">';
            echo '<p>'.$time_period['description'].'</p>';
          echo '</div>';
          echo '<div class="w-full md:w-1/2 mt-5 md:mt-0">';
            echo '<p class="text-center font-bold"><span class="text-primary">'.$time_period['highlight_text'].' </span>'.$time_period['value'].'</p>';
          echo '</div>';
        echo '</div>';
      echo '</div>';
    }
  }
?>
<section class="au__timeline w-full mt-12 flex justify-center">
    <div class="au__timeline__wrapper relative w-[90%] md:w-[80%] lg:w-[60%]">
        <div class="au__timeline__nav relative px-[12%]">
           <?php render_timeline_nav($timeline)?> 
        </div>
        <div class="au__timeline__slider px-12">
           <?php render_timeline_data($timeline)?> 
        </div>

        <div class="au__timeline__buttons__container absolute w-full flex justify-between top-[10%]">
            <?php custom_slider_arrows('au__timeline__nav')?>
        </div>
    </div>
</section>