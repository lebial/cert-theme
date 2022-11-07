<?php
function render_points()
{
  $points = get_field('points');
  $check_mark = get_field('checkmark_icon');;;;

  foreach ($points as $point) {
    echo '<div class="list__item__container flex w-fit items-center">';
    echo '<div class="text-primary mr-2"><img class="w-3 lg:w-4" src="'.$check_mark.'" alt="checkmark icon"></div>';
    echo '<p class=" text-base max-w-[250px] lg:max-w-fit lg:text-2xl">' . $point . '</p>';
    echo '</div>';
  }
}
?>
<section class="ai_powered__section w-full py-16 w-">
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