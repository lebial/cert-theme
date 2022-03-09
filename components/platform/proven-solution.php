<?php
function render_solutions_data() {
  $solutions = get_field('a_proven_solution');
  foreach($solutions as $solution) {
    echo '<div class="solution__content__data flex items-center ">';
      echo '<h3 class="text-4xl">'.$solution['number_value'].'</h3> <p>'.$solution['value_description'].'</p>';
    echo '</div>';
  }
}
?>
<section class="solutions__section w-screen h-screen  bg-blue-600 mt-8">
  <h2 class="solution__title text-white pt-8 mb-5 text-center"><?php the_field('solution_title')?></h2>
  <div class="solution__content flex flex-col justify-evenly items-center">
    <?php render_solutions_data() ?>
  </div>
</section>