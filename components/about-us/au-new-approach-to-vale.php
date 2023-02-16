<?php
function render_points()
{
  $points = get_field('value_points');

  foreach ($points as $point) {
    echo '<div class="flex items-center mb-4">';
    echo '<div class="border-t-[9px] border-b-[9px] border-l-[14px]
                border-t-transparent border-solid border-b-transparent border-l-primary mr-4"></div>';
    echo '<p class="evaluator__triangle text-white text-2xl">' .  $point['point_text'] . '</p>';
    echo '</div>';
  }
}
?>

<section class="new_approach_to_value w-full flex mt-20 max-h-[552px]">
  <div class="w-1/2 bg-dark-blue-background pl-24 pr-4 py-14">
    <p class="text-white text-5xl font-bold">A New Approach to Value-Based <br> Decision-Making:</p>
    <div class="points__list pt-14">
      <?php render_points(); ?>
    </div>
  </div>
  <div class="w-1/2">
    <img class="w-full h-full" src="<?php the_field('value_points_background') ?>" alt="value points">
  </div>
</section>