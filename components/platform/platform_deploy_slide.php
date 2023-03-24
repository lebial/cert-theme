<?php
$customer_env = get_field('customer_env_icon');
$certilytics_env = get_field('certilytics_env_icon');
?>
<section class="platform__deploy__options bg-gray-100 flex flex-col lg:flex-row py-16 xl:pt-32"
    id="<?php the_field('platform_deployment_section_id')?>">
    <div data-aos="fade-up" class="w-full flex flex-col lg:flex-row">
        <div class="px-12 w-full lg:w-1/2 ">
            <div class="data__slides__content w-full lg:w-10/12 mx-auto xl:pt-3 2xl:pt-[3%]">
                <p class="data__slides__content__title text-center xl:text-left font-bold text-3xl 2xl:text-4xl">
                    Adoption & Deployment</p>
                <div class="data__slides__content__description overflow-hidden mt-9 relative ">
                    <div class="data__slide__text pb-12">
                        <?php the_field('deployment_content')?>
                    </div>
                </div>
            </div>
        </div>

        <div class=" px-8 w-full lg:w-1/2">
            <!-- <div class="sticky lg:static top-28"> -->
            <div class="mt-6 xl:mt-0">
                <img class="style-svg w-full platform__deployment__graphic hidden lg:block"
                    src="<?php the_field('desktop_graphic')?>" alt="Platform Deployment Options">
                <img class="style-svg mobile-svg-options w-full block lg:hidden"
                    src="<?php the_field('mobile_graphic')?>" alt="Platform Deployment Options">
            </div>
            <div></div>
        </div>
    </div>
</section>