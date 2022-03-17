<?php
  function renderSolutions() {
    $solutions_data = get_field('solution_group');
    foreach($solutions_data as $solution) {
      echo '<div class="solutions__section__separator w-full flex mt-20" data-aos="fade-up">';
        echo '<div class="separator__dots w-2/12 relative"></div>';
        echo '<div class="separator__line w-10/12"></div>';
      echo '</div>';
      echo '<p class="text-white text-3xl font-bold mt-8" data-aos="fade-up">'.$solution['title'].'</p>';
      echo '<p class="text-white text-lg" data-aos="fade-up">'.$solution['description'].'</p>';
      foreach($solution['solutions_data'] as $solution_data) {
        echo '<div class="solutions__data" data-aos="fade-up">';
          echo '<p class="text-primary mb-2 mt-14 font-bold text-5xl text-center">'.$solution_data['value'].'</p>';
          echo '<p class="text-white text-center">'.$solution_data['value_description'].'</p>';
        echo '</div>';
      }
    }
  }
?>
<section class="solutions__section w-screen min-h-screen bg-dark-blue-background mt-11">
  <div class="solutions__section__container px-8">
    <?php renderSolutions() ?>
  </div>
</section>