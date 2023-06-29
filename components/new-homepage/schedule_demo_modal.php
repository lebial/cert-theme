<div class="schedule__demo__modal w-full flex h-screen fixed top-0 left-0 bg-black bg-opacity-60 justify-center items-center z-[999]" style="display: none; opacity: 0;">
  <div class="schedule__demo__modal__body w-11/12 md:w-1/2 relative h-fit bg-white flex flex-col lg:flex-row">
    <button type="button" class="schedule__demo__modal__close__button absolute left-4 top-4 text-black lg:text-white">X</button>
    <div class="w-1/2 h-full bg-dark-blue-background px-10 py-16 hidden lg:block ">
      <p class="text-white text-2xl font-bold"> See how our platform <br> can help you achieve <br> your value-based <br> care goals.</p>
      <p class="text-white text-sm">During our 30-minute dem, share your <br> challenges with us and we'll show you how <br> our predictive insights can help. </p>
      <div class="contact__image__container flex justify-center">
        <img src="<?php the_field('contact_us_modal_laptop_image', 'options') ?>" alt="contact us report image">
      </div>
      <p class="text-white text-sm ">Today, our solutins are helping <br> healthcare organizations: </p>
      <div class="points__container mt-5 mb-4">
        <div class="flex mb-2">
          <svg height="20" id="triangle-right" viewBox="0 0 32 32" width="20" class="fill-primary mr-1" xmlns="http://www.w3.org/2000/svg">
            <path d="M8 4 V28 L26 16 z" />
          </svg>
          <p class="text-white text-sm">Unify and add power to their <br> data</p>
        </div>
        <div class="flex mb-2">
          <svg height="20" id="triangle-right" viewBox="0 0 32 32" width="20" class="fill-primary mr-1" xmlns="http://www.w3.org/2000/svg">
            <path d="M8 4 V28 L26 16 z" />
          </svg>
          <p class="text-white text-sm">Unify and add power to their <br> data</p>
        </div>
        <div class="flex mb-2">
          <svg height="20" id="triangle-right" viewBox="0 0 32 32" width="20" class="fill-primary mr-1" xmlns="http://www.w3.org/2000/svg">
            <path d="M8 4 V28 L26 16 z" />
          </svg>
          <p class="text-white text-sm">Predict emerging clinical and <br> financial risk</p>
        </div>
        <div class="flex mb-2">
          <svg height="20" id="triangle-right" viewBox="0 0 32 32" width="20" class="fill-primary mr-1" xmlns="http://www.w3.org/2000/svg">
            <path d="M8 4 V28 L26 16 z" />
          </svg>
          <p class="text-white text-sm">Optimize programs and <br> strategies to lower coest and <br> improve outcomes</p>
        </div>
        <div class="flex mb-2">
          <svg height="20" id="triangle-right" viewBox="0 0 32 32" width="20" class="fill-primary mr-1" xmlns="http://www.w3.org/2000/svg">
            <path d="M8 4 V28 L26 16 z" />
          </svg>
          <p class="text-white text-sm">Measure results and <br> demosntrate value</p>
        </div>
      </div>
    </div>
    <div class="w-full lg:w-1/2 h-full">
      <div class="schedule__demo__form__container px-10 py-16">
        <div class="w-full flex justify-center mb-5">
          <div class="w-full border border-solid border-black rounded-2xl flex">
            <div class="first__step__pill w-7/12 bg-dark-blue-background rounded-2xl flex justify-center py-1 text-white font-bold text-base text-center">
              Step 1
            </div>
            <div class="second__step__pill w-5/12 flex justify-center py-1 rounded-2xl text-center font-bold text-base ">
              Step 2
            </div>
          </div>
        </div>
        <div class="mb-5">
          <p class="text-center text-base">Fill out the form below - then choose a <br> time to meet with our team</p>
        </div>
        <?php echo FrmFormsController::get_form_shortcode(array('id' => get_field('contact_modal_form_id', 'options'), 'title' => false, 'description' => false)) ?>
      </div>
    </div>
  </div>
</div>