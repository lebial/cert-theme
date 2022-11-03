<?php
function render_points()
{
  $points = get_field('points');

  foreach ($points as $point) {
    echo '<div class="list__item__container flex w-fit items-center">';
    echo '<div class="text-primary mr-2">&#10004;</div>';
    echo '<p class=" text-base lg:text-2xl">' . $point . '</p>';
    echo '</div>';
  }
}
?>
<section class="ai_powered__section w-full py-16">
    <div class="mx-auto w-11/12 lg:w-7/12">
        <h3 class="text-center text-[#7d7d7d]"><?php the_field('ai_title') ?>
        </h3>
        <div class="list__container w-10/12 mx-auto mt-10">
            <div class="list__body mx-auto w-fit">
                <?php render_points() ?>
            </div>
        </div>
    </div>
</section>