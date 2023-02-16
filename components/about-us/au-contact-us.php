<section class="au__contact-us w-full relative flex justify-center items-center">
  <img class="w-full absolute top-0 left-0 z-10 h-full object-cover" src="<?php the_field('contact_image')?>" alt="<?php the_field('contact_image_alt')?>">
  <div class="au__contact__form__container w-9/12 lg:w-4/12 max-w-[630px] mb-32 mt-20 pl-10 pr-10 pb-10 pt-2 rounded-2xl shadow-lg relative z-20 bg-white">
      <?php echo FrmFormsController::get_form_shortcode(array('id' => get_field('schedule_demo_form_id'), 'title' => true, 'description' => true)) ?>
  </div>
</section>