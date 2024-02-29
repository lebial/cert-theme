<?php
function renderBulletPoints()
{
    $points = get_field('brochure_points');
    foreach ($points as $point) {
        echo '<div class="flex mt-2">
       <p class="text-white  mb-0 text-sm lg:text-lg">' . strip_tags($point, '<a><strong>') . '</p>
      </div>';
    }
}
?>

<?php if (get_field('brochure_section_title')) : ?>
    <section id="clinicalPointSolutions" class="download__brochure w-full pb-16 lg:pb-24 flex flex-col items-center " style="background-image: url(<?php the_field('brochure_section_background') ?>); background-size: cover;">
        <div class="graphic__row w-10/12 mt-16 lg:mt-24">
            <div class="graphic__data flex flex-col lg:flex-row">
                <div class="data w-full lg:w-6/12 flex justify-center lg:justify-end">
                    <div class="max-w-lg">
                        <h2 class="text-white text-2xl lg:text-4xl font-bold text-center lg:text-left" style="line-height: 1.3;"><?php the_field('brochure_section_title') ?></h2>
                        <div class="text-sm lg:text-base w-full flex ">
                            <div class="w-full">
                                <p class="text-white text-sm lg:text-lg">
                                    <?php the_field('brochure_section_description_1') ?>
                                </p>
                                <p class="text-white text-sm lg:text-lg">
                                    <?php the_field('brochure_section_description_2') ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="data__image w-full lg:w-6/12 flex justify-center lg:justify-start items-center relative">
                    <img class="w-[90%] max-w-2xl mt-8 lg:mt-0" src="<?php the_field('laptop_image') ?>" alt="report laptop image">
                </div>
            </div>
        </div>
        <div class="graphic__row w-10/12 flex flex-col items-center lg:flex-row mt-10">
            <div class="graphic__content w-full lg:w-1/2 flex justify-end">
                <div class="lg:max-w-lg relative  w-full flex justify-center min-h-[1px] lg:justify-start ">
                    <!-- <p class="text-white text-2xl lg:text-4xl font-bold leading-snug text-center lg:text-left" style="line-height: 1.3;"><?php //the_field('brochure_section_subtitle') 
                                                                                                                                                ?></p> -->
                    <div><img class="relative left-0 top-0 lg:absolute lg:top-[-41px] lg:left-1/2 lg:-translate-x-1/2 style-svg w-[300px]" src="<?php the_field('impact_evaluator_logo') ?>" alt="impact evaluator logo"></div>
                </div>
            </div>
            <div class="graphic__content brochure__points w-full lg:w-1/2 mt-10 lg:mt-0 flex justify-center lg:justify-start">
                <span class="block ml-[10%] w-full">
                    <?php renderBulletPoints() ?>
                </span>
            </div>
        </div>
        <div class="graphic__row w-full flex justify-center mt-10 lg:mt-20">
            <div class="button__container w-9/12 md:w-4/12 flex justify-center">
                <a href="<?php the_field('brochure_download_link') ?>" download class="action__button rounded-xl px-8 py-4 bg-white text-primary font-bold text-xl"><?php the_field('brochure_button_text') ?></a>
            </div>
        </div>

    </section>
<?php endif; ?>