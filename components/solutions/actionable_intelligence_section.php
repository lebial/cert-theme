<?php 
  function render_data_list() {
    $data_list = get_field('data_list');
    foreach ($data_list as $item) {
        echo '<li>'.$item.'</li>';
    };
  }

  function render_results_list() {
    $result_list = get_field('results_list');
    foreach ($result_list as $result) {
        echo '<li>'.$result.'</li>';
    }
  }
?>

<section class="actionable_intelligence w-full flex flex-col justify-center bg-[#000f3a] py-24">
    <!-- <div class="data__container w-10/12 lg:w-8/12">
        <h2 class="text-white text-2xl lg:text-4xl text-center"><?php the_field('actionable_intelligence_section_title')?></h2>
        <div class="flex flex-col md:flex-row w-full mt-20 md:mt-28 ">
            <div class=" w-full md:w-3/12 text-white flex flex-col items-center">
                <div><p class="text-white font-bold text-center"><?php the_field('data_title')?></p></div>
                <ul class="data__list list-disc text-sm lg:text-base">
                    <?php //render_data_list()?>
                </ul>
            </div>
            <div class="w-full md:w-6/12 flex justify-center mt-12 md:mt-0">
                <div class="bg-white h-64 aspect-square rounded-full"><img src="<?php the_field('actionable_intelligence_graphic')?>" alt=""></div>
            </div>
            <div class="w-full md:w-3/12 text-white flex flex-col items-center mt-12 md:mt-0">
                <div><p class="text-white font-bold ttext-center"><?php the_field('results_title')?></p></div>
                <ul class="data__list text-sm lg:text-base">
                    <?php //render_results_list()?>
                </ul>
            </div>
        </div>
        <div class="flex justify-center mt-20 md:mt-28">
            <p class="text-white text-sm lg:text-base">
                <?php //the_field('results_description')?>
            </p>
        </div>
    </div> -->
    <h2 class="text-white text-2xl lg:text-4xl text-center relative z-20 mb-0 lg:-mb-20"><?php the_field('actionable_intelligence_section_title')?></h2>
    <img src="<?php the_field('actionable_intelligence_section_image_desktop')?>" class="hidden md:block relative z-10" alt="">
    <img src="<?php the_field('actionable_intelligence_section_image_mobile')?>" class="block md:hidden relative z-10" alt="">
    <div class="flex justify-center px-6 mt-0 lg:-mt-24 relative z-20">
        <p class="text-white text-sm lg:text-xl text-center">
            <?php the_field('results_description')?>
        </p>
    </div>

</section>