<section class="schedule__demo__section bg-indigo-50 pt-16 px-10 lg:px-0">
    <p class="text-2xl text-dark-blue-background font-bold text-center mx-auto reveal-text">
        <?php the_field('schedule_title') ?>
    </p>
    <p class="text-xl text-dark-blue-background max-w-[40ch] text-center mx-auto px-10 lg:px-0">
        <?php the_field('schedule_description') ?>
    </p>
    <div class="bg-white px-10 max-w-xl mx-auto pt-10 rounded-2xl mt-10 shadow-xl relative lg:top-[90px]">
        <p class="text-dark-blue-background font-bold text-center pb-4 leading-normal">Schedule a CertHLM demo <br
                class="hidden lg:block">
            with our team.</p>
        <div class="certHLM__form__container ">
            <?php echo FrmFormsController::get_form_shortcode(array('id' => get_field('form_id'), 'title' => false, 'description' => false)); ?>
        </div>
    </div>
    <div class="lg:bg-white h-20"></div>
</section>