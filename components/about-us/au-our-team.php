<?php
function render_team_groups()
{
  $teams = get_field('members');
  $button_image = get_field('button_arrow');
  foreach ($teams as $team) {
    echo '<div class="team__group mb-36">
        <div class="team__group__header flex">
          <div class="group__header__divider w-4/12 flex items-center">
            <div class="flex-1 h-px bg-white"></div>
            <div class=" w-3 h-3 rounded-full bg-primary"></div>
          </div>
          <div class="group__header__title w-4/12">
            <p class="text-4xl text-white text-center">' . $team['team_group_name'] . '</p>
          </div>
          <div class="group__header__empty w-4/12"></div>
        </div>';
    foreach ($team['group_members'] as $member) {
      $description = $member['description'];
      $show = $description ? 'block' : 'hidden';
      $margin = $description ? 'mb-20' : 'mb-0';
      echo '<div class="team__member w-6/12 max-w-5xl mx-auto mt-10 ' . $margin . ' flex flex-col items-center">
              <p class="text-white font-bold text-center mb-0 text-3xl">' . $member['name'] . '</p>
              <p class="text-white text-center">' . $member['title'] . '</p>

              <div class="w-full border-t-[1px] border-solid border-primary mt-4 py-4 relative ' . $show . '">
                <div class="overflow-y-hidden h-[100px] line-clamp-3">
                  <p class="text-white max-w-none ">
                    ' . $description . '
                  </p>
                </div>
                <div class="absolute -bottom-10 left-1/2 -translate-x-1/2">
                  <button type="button" class=" team__member__button w-10 h-10 rounded-full bg-primary">
                    <img src="' . $button_image . '" alt="">
                  </button>
                </div>
              </div>
            </div>';
    }
    echo '</div>';
  }
}
?>
<section class="about__us__our__team w-full bg-dark-blue-background pb-20">
  <div class="our__team__header min-h-[30vh] flex flex-col justify-end">
    <h2 class="text-6xl font-bold text-white text-center"><?php the_field('section_title') ?></h2>
  </div>
  <div class="our__team__content w-full">
    <?php render_team_groups() ?>
  </div>
</section>