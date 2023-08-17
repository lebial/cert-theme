<?php
$intuitive_insights_data = get_field('intuitive_insights_options');

function render_options($data, $isMobile)
{
    $class_name = $isMobile ? 'mobile__option__svg' : '';
    foreach ($data as $option) {
        if ($option['option_title']) echo '
            <div class="' . $class_name . ' option__button flex w-full">
                <button class="hp__option__action__button text-left text-sm lg:text-base flex items-center text-[#7c7c7c] relative pl-7" type="button" name="' . $option['option_title'] . '">
                    <img src="' . $option['option_image'] . '" class="style-svg w-6 mr-2 h-auto absolute left-0" alt="" name="' . $option['option_title'] . '">
                    ' . $option['option_title'] . '
                </button>
            </div>
        ';
    };
}

function get_striped_text($data)
{
    foreach ($data as $key => $value) {
        $data[$key]['option_description'] = strip_tags($data[$key]['option_description'], '<a><strong>');
    }
    return $data;
}

function render_insights_title($mobile)
{
    $title = get_field('intuitive_insights_title');
    if (!$title) $title = 'Make better decisions, faster.';
    if ($mobile) $title = strip_tags($title);
    echo $title;
}

?>
<section class="intuitive__insights health__plans__insights w-full py-16 lg:py-24">
    <script id="intuitiveInsightsData" type="application/json">
        <?php echo json_encode(get_striped_text($intuitive_insights_data)) ?>
    </script>
    <div class="description__container w-10/12 lg:w-7/12 mx-auto flex flex-col items-center">
        <div class="text-center lg:text-left">
            <h3 class="block lg:hidden text-2xl text-center text-gray-header">
                <?php render_insights_title(true) ?>
            </h3>
            <h3 class="hidden lg:block text-4xl text-center text-gray-header">
                <?php render_insights_title(false) ?>
            </h3>
        </div>
    </div>
    <div class="insights__container content__box w-11/12 max-w-fit mx-auto bg-[#b2b2b2] bg-opacity-10 mt-8 p-8 lg:p-12 shadow-lg flex flex-col">
        <div class="mb-8">
            <p class="text-center ">Pre-built reports and self-service analytics at your fingertips</p>
        </div>
        <div class="w-full flex flex-col items-center lg:flex-row min-h-[300px]">
            <div class="insights__button__container w-full lg:max-h-fit lg:w-1/2 max-w-sm ">
                <div class="w-full h-fit hidden lg:block relative">
                    <div class="absolute h-full w-px block -left-5 border-r border-black border-solid">
                        <div class="navigation__dot absolute rounded-full w-4 h-4 bg-primary left-[-7.3px]"></div>
                    </div>
                    <?php render_options($intuitive_insights_data, false) ?>
                </div>
                <div class="mobile__insights w-full h-full block lg:hidden">
                    <div class="w-full h-44 relative">
                        <div class="insights__dropdown__body h-44 overflow-y-scroll inline-block bg-white shadow-md p-3 absolute w-[110%] left-1/2 -translate-x-1/2">
                            <?php render_options($intuitive_insights_data, true) ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 lg:pl-10 flex items-center justify-center mt-6 lg:mt-0">
                <div class="content__description max-w-sm flex flex-col justify-center">
                    <div class="mb-5">
                        <p id="intuitiveDescription" class="intuitive__dynamic__content text-sm lg:text-base">
                            loading..
                        </p>
                    </div>
                    <div class="red__divider w-1/3 mx-auto lg:mx-0 lg:mb-5 lg:mt-0 border border-primary border-solid"></div>
                    <p class="mx-auto mt-4 text-center lg:mx-0 lg:mt-0 lg:text-left download__brochure__text">Download our population <br> health management brochure</p>
                    <div class=" inline-block w-fit mx-auto">
                        <div class="flex flex-col">
                            <a class="download__brochure__link font-bold text-center w-full bg-primary mt-4 mx-auto lg:mx-0 rounded-lg px-4 py-2 text-white text-sm" href="#" target="_blank">Download Brochure</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>