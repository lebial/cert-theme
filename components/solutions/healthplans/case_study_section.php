<section class="case__study w-full flex flex-col items-center py-16 lg:py-24">
    <div class="content__container w-10/12 flex flex-col lg:flex-row ">
        <div class="case__study__description w-full lg:w-6/12 flex justify-center lg:justify-end">
            <div class=" max-w-lg">
                <p class="text-2xl lg:text-4xl mb-0 font-bold text-center lg:text-left text-gray-header">
                    <?php the_field('case_study_title') ?>
                </p>
                <p class="text-lg mt-8">
                    <?php the_field('case_study_description') ?>
                </p>
                <?php if (get_field('case_study_sub_description')) : ?>
                    <p class="text-lg mt-8">
                        <?php the_field('case_study_sub_description') ?>
                    </p>
                <?php endif; ?>
                <div class="case__study__form__container max-w-lg pl-0 mt-8 hidden lg:block">
                    <?php echo FrmFormsController::get_form_shortcode(array('id' => get_field('download_brochure_form_id'), 'title' => false, 'description' => true)) ?>
                </div>
            </div>
        </div>
        <div class="case__study__form w-full md:w-6/12 flex flex-col mt-10 lg:mt-0 mx-auto lg:pl-[5%] justify-center">
            <div class="w-full max-w-lg flex justify-center">
                <div class="case__study__image__container w-full max-w-xs"><img class="w-full" src="<?php the_field('form_image') ?>" alt=""></div>
            </div>
        </div>
        <div class="case__study__form__container mx-auto max-w-lg pl-0 mt-8 block lg:hidden">
            <?php echo FrmFormsController::get_form_shortcode(array('id' => get_field('download_brochure_form_id'), 'title' => false, 'description' => true)) ?>
        </div>
    </div>
</section>