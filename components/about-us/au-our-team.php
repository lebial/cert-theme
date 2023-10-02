<?php
function render_team_groups()
{
  $teams = get_field('members');
  $button_image = get_field('button_arrow');
  foreach ($teams as $idx => $team) {
    $first_slider = $idx == 0 ? 'hidden lg:block' : '';
    echo '<div class="team__group lg:mb-36 last-of-type:mb-10 ' . $first_slider . '">
        <div class="team__group__header flex mb-7">
          <div class="group__header__divider w-2/12 lg:w-4/12 flex items-center pr-3 lg:pr-0">
            <div class="flex-1 h-px bg-white"></div>
            <div class=" w-3 h-3 rounded-full bg-primary"></div>
          </div>
          <div class="group__header__title w-8/12 lg:w-4/12">
            <p class="text-4xl text-white text-center">' . $team['team_group_name'] . '</p>
          </div>
          <div class="group__header__empty w-2/12 lg:w-4/12"></div>
        </div>';
    foreach ($team['group_members'] as $member) {
      $description = $member['description'];
      $show = $description ? 'block' : 'hidden';
      $margin = $description ? 'mb-20' : 'mb-0';
      echo '<div class="team__member w-6/12 max-w-5xl mx-auto py-8  ' . $margin . ' flex flex-col items-center">
              <p class="text-white font-bold text-center mb-0 text-3xl">' . $member['name'] . '</p>
              <p class="text-white text-center">' . $member['title'] . '</p>

              <div class="w-full border-t-[1px] border-solid border-primary mt-4 py-4 relative ' . $show . '">
                <div class=" overflow-y-hidden h-[65px] line-clamp-2">
                  <p class="text-white max-w-none ">
                    <span>
                      ' . $description . '
                    </span>
                  </p>
                </div>
                <div class="absolute -bottom-14 left-1/2 -translate-x-1/2">
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
function render_team_groups_mobile()
{
  $team = get_field('members')[0];
  echo '<div class="team__group block lg:hidden">
          <div class="team__group__header flex items-center mb-14">
            <div class="group__header__divider w-3/12 flex items-center pr-3">
              <div class="flex-1 h-px bg-white"></div>
              <div class=" w-3 h-3 rounded-full bg-primary"></div>
            </div>
            <div class="group__header__title w-6/12 lg:w-4/12 ">
              <p class="text-4xl text-white text-center">' . $team['team_group_name'] . '</p>
            </div>
            <div class="group__header__empty w-3/12 lg:w-4/12"></div>
          </div>';
  echo '<div class="our__team__slider block lg:hidden mt-10 mb-0" >';
  foreach ($team['group_members'] as $member) {
    $description = $member['description'];
    // echo '<div class="team__member w-full max-w-5xl mx-auto px-14 flex flex-col items-center pb-20">
    //           <p class="text-white font-bold text-center mb-0 text-3xl">' . $member['name'] . '</p>
    //           <p class="text-white text-center">' . $member['title'] . '</p>

    //           <div class="w-full border-t-[1px] border-solid border-primary mt-4 py-4 relative ">
    //             <div class="member__description overflow-y-hidden h-[95px] line-clamp-3">
    //               <p class="text-white max-w-none text-center lg:text-left">
    //                 <span>
    //                   ' . $description . '
    //                 </span>
    //               </p>
    //             </div>
    //             <div class="absolute -bottom-14 left-1/2 -translate-x-1/2">
    //               <button type="button" class=" team__member__button member__mobile__button w-36 py-2 text-white hover:text-primary hover:border-primary transition-colors duration-300 border border-white border-solid rounded-md">
    //                 Read More
    //               </button>
    //             </div>
    //           </div>
    //         </div>';
    echo '<div class="team__member w-full max-w-5xl mx-auto px-14 flex flex-col items-center pb-10">
              <p class="text-white font-bold text-center mb-0 text-3xl">' . $member['name'] . '</p>
              <p class="text-white text-center">' . $member['title'] . '</p>

              <div class="w-full border-t-[1px] border-solid border-primary mt-4 py-4 relative ">
                <div class="member__description overflow-y-hidden h-[95px] line-clamp-3">
                  <p class="text-white max-w-none text-center lg:text-left">
                    <span>
                      ' . $description . '
                    </span>
                  </p>
                </div>
              </div>

              <div class="w-full flex justify-center"> 
                <button type="button" class="team__member__button member__mobile__button w-36 py-2 mx-auto text-white hover:text-primary hover:border-primary transition-colors duration-300 border border-white border-solid rounded-md">
                  Read More
                </button>
              </div>
            </div>';
  }
  echo '</div>';
  echo '</div>';
}
?>
<section class="about__us__our__team w-full bg-dark-blue-background pb-8 ">
  <div class="our__team__header min-h-[20vh] lg:min-h-[30vh] flex flex-col justify-end relative">
    <img class="top-0 left-0 absolute w-full h-full lg:h-[190%]" src="<?php the_field('our_team_background') ?>" alt="our team background">
    <h2 class="text-6xl font-bold text-white text-center"><?php the_field('section_title') ?></h2>
  </div>
  <div class="our__team__content w-full">
    <div class="relative mb-10">
      <?php render_team_groups_mobile() ?>
      <div class="absolute w-full lg:hidden flex justify-between top-[140px]">
        <?php custom_slider_arrows('our__team__slider') ?>
      </div>
    </div>
    <?php render_team_groups() ?>
  </div>
</section>