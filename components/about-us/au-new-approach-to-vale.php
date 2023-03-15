<?php
function render_points()
{
  $points = get_field('value_points');

  foreach ($points as $point) {
    echo '<div class="flex items-start lg:items-center mb-4 w-9/12 lg:w-full">';
    echo '<div class="border-t-[9px] border-b-[9px] border-l-[14px] mt-2 lg:mt-0
                border-t-transparent border-solid border-b-transparent border-l-primary mr-4"></div>';
    echo '<p class="evaluator__triangle text-white text-xl">' .  $point['point_text'] . '</p>';
    echo '</div>';
  }
}
?>

<section class="new_approach_to_value w-full flex flex-col lg:flex-row mt-20 lg:max-h-[552px]">
  <div class="w-full lg:w-1/2 bg-dark-blue-background mx-auto py-12 lg:pl-24 lg:py-14 px-4">
    <p class="text-white text-3xl lg:text-2xl text-center lg:text-left font-bold ">A New Approach <br class="block lg:hidden"> to Value-Based <br class="block lg:hidden"> Decision-Making:</p>
    <div class="points__list pt-14 flex flex-col items-center justify-center">
      <?php render_points(); ?>
    </div>
  </div>
  <div class="w-full lg:w-1/2">
    <img class="w-full h-full" src="<?php the_field('value_points_background') ?>" alt="value points">
  </div>
</section>