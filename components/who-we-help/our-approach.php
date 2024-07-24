<?php
$options = get_field('data_options');
function render_buttons($opts)
{
    foreach ($opts as $option) {
        $button = $option['button'];
        echo '
            <button type="button" name="' . $button['button_text'] . '" class="our__approach__button text-left text-white text-2xl border-b border-gray-400 border-solid py-6 first-of-type:pt-0 pr-10 opacity-50 transition-all duration-300 hover:opacity-100">
            ' . $button['button_text'] . '
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="69" viewBox="0 0 40 69" fill="none" class="w-2 h-3 inline">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.0167 1.02513C4.64987 -0.341709 2.43379 -0.341709 1.06696 1.02513C-0.299879 2.39196 -0.299879 4.60804 1.06696 5.97487L29.253 34.1609L1.02513 62.3889C-0.341709 63.7557 -0.341709 65.9718 1.02513 67.3386C2.39196 68.7054 4.60804 68.7054 5.97487 67.3386L38.8553 34.4581L38.8549 34.4577L39.1521 34.1605L6.0167 1.02513Z" fill="#F4695B"/>
                </svg>
            </button>
        ';
    }
}

function render_content($opts)
{
    foreach ($opts as $option) {
        $content = $option['content'];
        echo '
          <div class="option__content__container w-full text-white" name="' . $option['button']['button_text'] . '">
            <p class="text-primary font-bold text-2xl uppercase mb-0 pb-4">
            ' . $content['content_title'] . '
            </p>
            <p class="font-bold text-white text-xl pb-4">
            ' . $content['content_subtitle'] . '
            </p>
            <div class="our__approach__content__body">
            ' . $content['content_body'] . '
            </div>
            </div>
        ';
    }
}
?>
<section class="our__approach bg-dark-blue-background py-20" id="our__approach__section">
    <h3 class="text-white text-center pb-20 reveal-text"><?php the_field('approach_title') ?></h3>
    <div class="options__container flex px-20">
        <div class="w-1/2 flex flex-col items-end pr-28">
            <div class="flex flex-col">
                <?php render_buttons($options); ?>
            </div>
        </div>
        <div class="w-1/2 relative min-h-[80vh]">
            <?php render_content($options); ?>
        </div>
    </div>
</section>