<?php
$GLOBALS['ai_buttons'] = get_field('ai_buttons');

function render_report_buttons()
{
  global $ai_buttons;
  foreach ($ai_buttons as $idx => $button) {
    echo '<button class="ai__driven__report__option py-4 border-b-gray-header border-b text-gray-header text-left relative
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
    echo '<div class="report-' . $idx . '-image ai__report__image w-full absolute transition-all duration-150 max-h-[300px] max-w-xl top-3">
      <img src="' . $button['report_image'] . '" alt="report-' . $idx . '"  class=" w-full max-h-80">
    </div>';
  }
}
?>
<section class="ai__driven__section w-full px-6">
  <h3 class="reveal-text text-gray-header font-bold"><?php the_field('ai_heading') ?></h3>
  <h4 class="reveal-text text-2xl text-gray-header"><?php the_field('ai_subheading') ?></h4>

  <div class="w-full px-28 flex justify-center my-20" data-aos="fade-in">
    <div class=" max-w-5xl flex w-full">
      <div class="w-4/12 flex flex-col">
        <?php render_report_buttons() ?>
      </div>
      <div class="w-8/12 pl-20 flex flex-col">
        <div class="w-full relative"><?php render_report_images() ?></div>
      </div>
    </div>
  </div>
</section>