<?php
$GLOBALS['ai_buttons'] = get_field('ai_buttons');

function render_report_buttons()
{
  global $ai_buttons;
  foreach ($ai_buttons as $idx => $button) {
    echo '<button class="ai__driven__report__option py-4 border-gray-300  border-b text-dark-blue-background text-left relative line-reveal-animation
              transition-all duration-300 hover:text-primary" type="button" name="report-' . $idx . '">
                ' . $button['button_text'] . '
              <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" class="absolute w-14 top-1 right-1 opacity-0 fill-primary transition-all duration-150">
                <g data-name="Layer 2" id="Layer_2">
                  <path d="M12,25a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42L18.59,16l-7.3-7.29a1,1,0,1,1,1.42-1.42l8,8a1,1,0,0,1,0,1.42l-8,8A1,1,0,0,1,12,25Z" />
                </g>
              </svg>
            </button>';
  }
}

function render_report_images()
{
  global $ai_buttons;
  foreach ($ai_buttons as $idx => $button) {
    echo '<div class="report-' . $idx . '-image ai__report__image w-full absolute transition-all duration-150 max-h-[300px] max-w-xl top-3 shadow-xl">
      <img src="' . $button['report_image'] . '" alt="report-' . $idx . '"  class=" w-full max-h-80">
    </div>';
  }
}

function get_delay($idx, $duration)
{
  $delay = $duration + 0.2;
  $delay2 = $delay * $idx;
  return $delay2 + 2;
}

function render_subheader()
{
  $phraseInput = get_field('ai_subheading');
  $phraseArray = explode('.', $phraseInput);
  $duration =  2 / 3;
  foreach ($phraseArray as $idx => $phrase) {
    echo '<p data-animate-delay="' . get_delay($idx, $duration) . '" data-animate-duration="' . $duration . '" class="reveal-text ml-4 text-lg lg:text-2xl mb-0 text-dark-blue-background">' . $phrase . '.</p>';
  }
}

function render_report_mobile_buttons()
{
  global $ai_buttons;
  foreach ($ai_buttons as $idx => $button) {
    echo '<div class="report__button__container w-full">
            <button class="ai__driven__report__option py-4 border-gray-300  border-b text-dark-blue-background text-left relative line-reveal-animation w-full
              transition-all duration-300 hover:text-primary mobile__button" type="button" name="report-' . $idx . '">
                ' . $button['button_text'] . '
              <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" class="absolute w-14 top-1 right-1 opacity-0 fill-primary transition-all duration-150">
                <g data-name="Layer 2" id="Layer_2">
                  <path d="M12,25a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42L18.59,16l-7.3-7.29a1,1,0,1,1,1.42-1.42l8,8a1,1,0,0,1,0,1.42l-8,8A1,1,0,0,1,12,25Z" />
                </g>
              </svg>
            </button>
            <div class="mobile__image__container w-full  justify-center flex h-0 mt-2 shadow-xl">
              <img src="' . $button['report_image'] . '" alt="report-' . $idx . '"  class=" w-full max-h-80">
            </div>
          </div>';
  }
}

?>
<section class="ai__driven__section w-full px-6 mt-14 mb-20">
  <h3 class="mx-auto w-fit reveal-text text-dark-blue-background font-bold hidden lg:block"><?php the_field('ai_heading') ?></h3>
  <h3 class="mx-auto w-fit reveal-text text-dark-blue-background font-bold block lg:hidden"><?php the_field('ai_heading_mobile') ?></h3>
  <div class="solutions__subheader flex flex-col lg:flex-row mx-auto justify-center">
    <?php render_subheader() ?>
  </div>
  <div class="w-full px-4 lg:px-28 flex justify-center my-10 lg:my-20" data-aos="fade-in">
    <div class=" max-w-5xl flex flex-col lg:flex-row w-full">
      <div class="w-full lg:w-4/12 flex-col hidden lg:flex">
        <?php render_report_buttons() ?>
      </div>
      <div class="w-full lg:w-8/12 lg:pl-20 flex-col min-h-[160px] mt-4 lg:mt-0 hidden lg:flex">
        <div class="w-full relative"><?php render_report_images() ?></div>
      </div>
      <div class="mobile__report__options w-full block lg:hidden">
        <?php render_report_mobile_buttons() ?>
      </div>
    </div>
  </div>
</section>