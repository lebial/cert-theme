<?php
function render_points()
{
  $points = get_field('value_points');

  foreach ($points as $point) {
    echo '<div class="flex items-center mb-4 w-6/12 lg:w-full">';
    echo '<div class="border-t-[9px] border-b-[9px] border-l-[14px]
                border-t-transparent border-solid border-b-transparent border-l-primary mr-4"></div>';
    echo '<p class="evaluator__triangle text-white text-xl">' .  $point['point_text'] . '</p>';
    echo '</div>';
  }
}
?>

<section class="new_approach_to_value w-full flex flex-col lg:flex-row mt-10">
  <div class="w-full lg:w-1/2 bg-dark-blue-background mx-auto pl-0 py-12 lg:pl-24 lg:py-14">
    <p class="text-white text-4xl text-center lg:text-left font-bold lg:text-5xl">A New Approach to Value-Based <br> Decision-Making:</p>
    <div class="points__list pt-14 flex flex-col items-center">
      <?php render_points(); ?>
    </div>
  </div>
  <div class="w-full lg:w-1/2">
    <img class="w-full h-full" src="<?php the_field('value_points_background') ?>" alt="value points">
  </div>
</section>