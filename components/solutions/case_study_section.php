<section class="case__study w-full flex flex-col items-center py-16 lg:py-24">
    <div class="content__container w-10/12 flex flex-col lg:flex-row ">
        <div class="case__study__description w-full lg:w-6/12 flex justify-center lg:justify-end">
            <div class=" max-w-lg">
                <p class="text-2xl lg:text-4xl mb-0 text-gray-header">
                    <?php the_field('case_study_title')?>
                </p>
                <div class=" h-0 w-32 border-b-2 border-solid border-primary my-6"></div>
                <p class="text-xl ">
                    <?php the_field('case_study_description')?>
                </p>
                <p class="text-lg">
                    <?php the_field('case_study_sub_description')?>
                </p>
                <div class="mt-4 text-primary">
                    <?php the_field('download_form_modal_code')?>
                    <button type="button" class="case__open__modal__button hover:text-secondary"><?php the_field('modal_button_text')?></button>
                </div>
            </div>
        </div>
        <div class="case__study__form w-full md:w-6/12 flex flex-col mt-10 lg:mt-0 mx-auto lg:pl-[5%]">
            <div class="w-full max-w-lg flex justify-center">
                <div class="w-full max-w-xs"><img class="w-full" src="<?php the_field('form_image')?>" alt=""></div>
            </div>
            <div class="case__study__form__container max-w-lg pl-0 md:pl-5">
                <?php echo FrmFormsController::get_form_shortcode(array('id' => get_field('download_brochure_form_id'), 'title' => false, 'description' => true)) ?>
            </div>
        </div>
    </div>
</section>