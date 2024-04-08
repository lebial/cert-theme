<section class="w-full h-fit lg:h-[calc(100vh-80px)] flex flex-col justify-center bg-dark-background" style="background-image: url(<?php the_field('background_image')?>); background-size: cover;">
  <div class="max-w-10/12 h-64">
    <div class="w-10/12 flex mx-auto">
      <div class="contact__us__header w-7/12 flex flex-col">
        <h1 class="text-white mb-12"><?php the_field('title') ?></h1>
        <?php the_field('description') ?>
      </div>
      <div class="w-5/12 flex justify-end">
        <div class="cu__header__form px-12 py-0 lg:w-[28rem] lg:mt-0 2xl:w-[33rem] 2xl:mt-12 2xl:py-4 rounded-2xl bg-white border border-black">
          <?php echo FrmFormsController::get_form_shortcode(array('id' => get_field('contact_us_form_id'), 'title' => false, 'description' => false)) ?>
        </div>
      </div>
    </div>
  </div>
</section>