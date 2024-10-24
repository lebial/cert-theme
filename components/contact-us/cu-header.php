<section class="w-full h-[55vh] lg:h-[65vh] flex flex-col justify-center bg-dark-blue-background bg-cover bg-no-repeat bg-center lg:bg-left" style="background-image: url(<?php the_field('background_image')?>);">
  <div class="max-w-10/12 h-64">
    <div class="w-10/12 flex mx-auto">
      <div class="contact__us__header w-full lg:w-7/12 flex flex-col">
        <h1 class="text-white mb-12 text-center lg:text-left"><?php the_field('title') ?></h1>
        <?php the_field('description') ?>
      </div>
      <div class="w-5/12 hidden lg:flex justify-end">
        <div class="cu__header__form flex items-center lg:mt-[-3rem] px-12 py-0 md:w-[25rem] lg:w-[27rem] 2xl:w-[33rem] rounded-2xl bg-white border border-black">
          <?php echo FrmFormsController::get_form_shortcode(array('id' => get_field('contact_us_form_id'), 'title' => false, 'description' => false)) ?>
        </div>
      </div>
    </div>
  </div>
</section>