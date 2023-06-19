<div class="schedule__demo__modal w-full flex h-screen fixed top-0 left-0 bg-black bg-opacity-60 justify-center items-center z-[999]" style="display: none; opacity: 0;">
  <div class="schedule__demo__modal__body w-11/12 md:w-1/2 relative h-fit bg-white flex">
    <button type="button" class="schedule__demo__modal__close__button absolute left-4 top-4 text-white">X</button>
    <div class="w-1/2 h-full bg-dark-blue-background px-10 py-16 ">
      <p class="text-white text-2xl font-bold"> See how our platform <br> can help you achieve <br> your value-based <br> care goals.</p>
      <p class="text-white text-sm">During our 30-minute dem, share your <br> challenges with us and we'll show you how <br> our predictive insights can help. </p>
      <div class="contact__image__container flex justify-center">
        <img src="<?php the_field('contact_us_modal_laptop_image', 'options') ?>" alt="contact us report image">
      </div>
    </div>
    <div class="w-1/2 h-full">
      <div class="schedule__demo__form__container px-10 py-16">
        <div class="w-full flex justify-center">
          <div></div>
        </div>
        <?php echo FrmFormsController::get_form_shortcode(array('id' => get_field('contact_modal_form_id', 'options'), 'title' => false, 'description' => false)) ?>
      </div>
    </div>
  </div>
</div>