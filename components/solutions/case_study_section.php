<section class="case__study w-full flex flex-col items-center py-20">
    <div class="content__container w-10/12 md:w-7/12 flex flex-col lg:flex-row">
        <div class="case__study__description w-full lg:w-7/12">
            <p class="text-2xl lg:text-4xl">
                <?php the_field('case_study_title')?>
            </p>
            <p class="text-sm">
                <?php the_field('case_study_description')?>
            </p>
            <div><?php the_field('download_form_modal_code')?></div>
        </div>
        <div class="mx-auto case__study__form w-full md:w-6/12 lg:w-5/12 flex flex-col items-center mt-10 lg:mt-0">
            <div class="w-full lg:w-1/2"><img src="<?php the_field('form_image')?>" alt=""></div>
            <?php echo FrmFormsController::get_form_shortcode(array('id' => get_field('download_brochure_form_id'), 'title' => false, 'description' => true)) ?>
        </div>
    </div>
</section>