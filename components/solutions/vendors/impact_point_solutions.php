<section class="impact__point__solutions__section w-full">
    <div class="section__divider_gray border-b-2 border-gray-200 border-solid w-11/12 mx-auto h-0"></div>
    <div class="impact__heading w-full flex flex-col items-center mt-12">
        <p class="text-center text-3xl text-gray-header font-bold mb-6"><?php the_field('vendor_impact_heading')?></p>
        <div class="small__divider border-b-2 border-primary border-solid w-24 h-0 mb-12"></div>
        <p class="text-xl"><?php the_field('vendors_impact_subheading')?></p>
    </div>
    <div class="impact__evaluator__container w-full flex flex-col lg:flex-row mt-1 md:mt-6 lg:mt-12">
        <div class="image__container w-full lg:w-1/2 lg:flex items-center">
            <img src="<?php the_field('vendors_impact_evaluator_image')?>" alt="<?php the_field('vendors_impact_evaluator_image_alt')?>laptop image from impact evaluator">
        </div>
        <div class="impact__text__content w-full lg:w-1/2 px-12 md:px-28 lg:px-0 lg:pr-32 2xl:pr-16">
            <h3 class="text-4xl text-center lg:text-left pb-5 pt-8 lg:pt-0"><?php the_field('vendors_impact_evaluator_header')?></h3>
            <p class="evaluator__triangle mb-4 leading-7">
                <?php the_field('impact_evaluator_bullet_1')?>
            </p>
            <p class="evaluator__triangle mb-4 leading-7">
                <?php the_field('impact_evaluator_bullet_2')?>
            </p>
        </div>
    </div>
    <div class="impact__maximizer__container w-full flex mt-12 pb-12">
        <div class="impact__text__content px-12 md:px-28 lg:px-0 w-full lg:w-7/12 lg:pr-4 lg:pl-28 2xl:pl-40 2xl:pr-16">
            <h3 class="text-4xl text-center lg:text-left pb-6"><?php the_field('vendors_impact_maximizer_header')?></h3>
            <p class="evaluator__triangle mb-4 leading-7">
                <?php the_field('impact_maximizer_bullet_1')?>
            </p>
            <p class="evaluator__triangle mb-4 leading-7">
                <?php the_field('impact_maximizer_bullet_2')?>
            </p>
            <p class="evaluator__triangle mb-4 leading-7">
                <?php the_field('impact_maximizer_bullet_3')?>
            </p>
        </div>
        <div class="case__study__form w-full lg:w-5/12 hidden lg:flex items-center mt-10 lg:mt-0 mx-auto">
            <div class="w-full max-w-lg flex justify-center">
                <div class="w-full max-w-sm 2xl:max-w-lg"><img src="<?php the_field('vendors_impact_maximizer_image')?>" alt="<?php the_field('vendors_impact_maximizer_image_alt')?>"></div>
            </div>
        <div>
    </div>
</section>