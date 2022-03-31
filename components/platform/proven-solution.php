<?php
$solutions_data = get_field('solution_group');
function renderSolutions($data)
{
  foreach ($data as $solution) {
    echo '<div class="solutions__section__separator w-full flex mt-20" data-aos="fade-up">';
    echo '<div class="separator__dots w-2/12 relative"></div>';
    echo '<div class="separator__line w-10/12"></div>';
    echo '</div>';
    echo '<p class="text-white text-3xl font-bold mt-8" data-aos="fade-up">' . $solution['title'] . '</p>';
    echo '<p class="text-white text-lg" data-aos="fade-up">' . $solution['description'] . '</p>';
    foreach ($solution['solutions_data'] as $solution_data) {
      echo '<div class="solutions__data" data-aos="fade-up">';
      echo '<p class="text-primary mb-2 mt-14 font-bold text-5xl text-center">' . $solution_data['value'] . '</p>';
      echo '<p class="text-white text-center">' . $solution_data['value_description'] . '</p>';
      echo '</div>';
    }
  }
}

function renderDesktopSolutions($data) {
  foreach($data as $solution) {
    echo '<div class="first__slide w-full flex">';
      echo '<div class="w-1/2">';
        echo '<div class="sticky top-1/4 w-10/12 ml-auto">';
          echo '<div class="solutions__section__separator w-full flex mt-20" data-aos="fade-up">';
            echo '<div class="separator__dots w-2/12 relative"></div>';
            echo '<div class="separator__line w-10/12"></div>';
          echo '</div>';
          echo '<p class="text-white text-4xl mt-10">'.$solution['title'].'</p>';
          echo '<p class="text-white text-lg">'.$solution['description'].'</p>';
        echo '</div>';
        echo '<div></div>';
      echo '</div>';
      echo '<div class="w-1/2">';
      foreach ($solution['solutions_data'] as $solution_data) {
        echo '<div class="h-screen w-full">';
          echo '<div class="w-full h-full flex flex-col items-center justify-center">';
            echo '<p data-aos="fade-up" class="text-6xl text-primary font-bold mb-3">'.$solution_data['value'].'</p>';
            echo '<p data-aos="fade-up" class="text-white text-lg">'.$solution_data['value_description'].'</p>';
            echo '<div data-aos="proven-anim" class="" style="width: 5%;">';
              echo '<svg class="proven-solution-graph" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.08 359.89">';
                echo '<g>';
                  echo '<polyline data-aos="proven-line" data-aos-duration="2500" data-aos-delay="500" points="14.86 13.23 14.86 18.21 14.86 30.63 14.86 167.49 5.66 179.94 5.66 292.31 14.86 303.5 14.86 336.88" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1.24" />';
                  echo '<circle class="proven-dot-red" data-aos="proven-dot" data-aos-duration="500" data-aos-delay="900" cx="14.86" cy="347.79" r="4.32" fill="#f5695c" />';
                  echo '<circle class="proven-dot-2" data-aos="proven-dot" data-aos-duration="500" data-aos-delay="1000" cx="26.8" cy="227.09" r="4.32" fill="#fff" opacity=".76" />';
                  echo '<circle class="proven-dot-1" data-aos="proven-dot" data-aos-duration="500" data-aos-delay="900" cx="26.8" cy="207.3" r="4.32" fill="#fff" opacity=".26" />';
                  echo '<circle class="proven-dot-4" data-aos="proven-dot" data-aos-duration="500" data-aos-delay="1200" cx="26.8" cy="266.66" r="4.32" fill="#fff" />';
                  echo '<circle class="proven-dot-3" data-aos="proven-dot" data-aos-duration="500" data-aos-delay="1100" cx="26.8" cy="246.87" r="4.32" fill="#fff" opacity=".9" />';
                echo '</g>';
              echo '</svg>';
            echo '</div>';
          echo '</div>';
        echo '</div>';
      }
      echo '</div>';
    echo '</div>';
  };
}
?>
<section class="block lg:hidden solutions__section w-screen min-h-screen bg-dark-blue-background mt-11">
  <div class="solutions__section__container px-8 py-10">
    <?php renderSolutions($solutions_data) ?>
  </div>
</section>

<section class="hidden lg:block solutions__section w-screen min-h-screen bg-dark-blue-background mt-11">
  <div class="solutions__section__container px-8">
    <?php renderDesktopSolutions($solutions_data) ?>
  </div>
</section>
