<?php
  $intuitive_insights_data = get_field('intuitive_insights_options');

  function render_options($data) {
    foreach ($data as $option) {
        echo '
            <div class="option__button flex w-full">
                <button class="hp__option__action__button text-left text-sm lg:text-base flex text-[#7c7c7c]" type="button" name="'.$option['option_title'].'">
                    <img src="'.$option['option_image'].'" class="style-svg w-6 mr-2" alt="">
                    '.$option['option_title'].'
                </button>
            </div>
        ';
    };
  }

  function get_striped_text($data) {
    foreach ($data as $key => $value) {
        $data[$key]['option_description'] = strip_tags($data[$key]['option_description'], '<a>');
    }
    return $data;
  }

?>
<section class="intuitive__insights health__plans__insights w-full py-16 lg:py-24">
    <script id="intuitiveInsightsData" type="application/json"><?php echo json_encode(get_striped_text($intuitive_insights_data))?></script>
    <div class="description__container w-10/12 lg:w-7/12 mx-auto flex flex-col items-center">
        <div class="text-center lg:text-left">
            <p class="text-base lg:text-4xl text-center">
                Whether you're looking for pre-built reports or self-service <br>
                tools, we can help you make better decisions, faster.
            </p>
        </div>
    </div>
    <div class="insights__container content__box w-11/12 max-w-fit mx-auto bg-[#b2b2b2] bg-opacity-10 mt-20 p-8 lg:p-12 shadow-lg flex flex-col lg:flex-row">
        <div class="insights__button__container w-full lg:max-h-fit  lg:w-1/2 max-w-sm overflow-y-scroll lg:overflow-y-clip relative">
            <div class="absolute h-full w-px block -left-5 border-r border-black border-solid">
                <div class="navigation__dot absolute rounded-full w-4 h-4 bg-primary left-[-7.3px]"></div>
            </div>
            <div class="w-full h-full hidden lg:block ">
                <?php render_options($intuitive_insights_data) ?>
            </div>
            <div class="w-full h-full block lg:hidden solutions__insights__slider">
                <?php render_options($intuitive_insights_data) ?>
            </div>
        </div>
        <div class="w-full lg:w-1/2 lg:pl-10 hidden lg:flex items-center">
            <div class="content__description max-w-sm flex flex-col justify-center">
                <div class="mb-5">
                    <p id="intuitiveDescription" class="intuitive__dynamic__content text-sm lg:text-base">
                        loading..
                    </p>
                </div>
                <div class="red__divider w-1/3 mx-auto lg:mx-0 lg:mb-5 lg:mt-0 border border-primary border-solid"></div>
                <p>Download our population <br> health management brochure</p>
                <a class="bg-primary mt-4 w-fit rounded-lg px-6 py-2 text-white text-sm" href="#">Download Brochure</a>
            </div>
        </div>
        
    </div>
    <div class="w-full px-5 flex lg:hidden items-center mt-10">
        <div class="content__description max-w-sm flex flex-col justify-center">
            <div class="mb-5">
                <p id="intuitiveDescription" class="intuitive__dynamic__content text-sm lg:text-base">
                    loading..
                </p>
            </div>
            <div class="red__divider w-1/3 mx-auto lg:mx-0 lg:mb-5 lg:mt-0 border border-primary border-solid"></div>
            <p class="mx-auto mt-4 text-center">Download our population <br> health management brochure</p>
            <a class="bg-primary mt-4 mx-auto w-fit rounded-lg px-6 py-2 text-white text-sm" href="#">Download Brochure</a>
        </div>
</div>
    
</section>