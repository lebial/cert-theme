<?php
function render_arrow_svg()
{
  echo '
    <svg height="20" id="triangle-right" viewBox="0 0 32 32" width="20" class="fill-primary mr-1 w-7 absolute -left-[10px] -top-[2px] 3xl:top-[2px]" xmlns="http://www.w3.org/2000/svg">
      <path d="M8 4 V28 L26 16 z" />
    </svg>
  ';
};
?>
<div class="schedule__demo__modal w-full flex h-screen fixed top-0 left-0 bg-black bg-opacity-60 justify-center items-center z-[999]" style="display: none; opacity: 0;">
  <!-- <div class="schedule__demo__modal__body w-11/12 md:w-8/12 relative h-[550px] 3xl:h-[670px]  bg-dark-blue-background 3xl:bg-white flex flex-col lg:flex-row"> -->
  <!-- <div class="schedule__demo__modal__body w-11/12 md:w-8/12 relative h-fit min-h[550px] bg-dark-blue-background 3xl:bg-white flex flex-col lg:flex-row"> -->
  <div class="schedule__demo__modal__body w-11/12 md:w-8/12 relative h-fit min-h[550px] flex flex-col lg:flex-row" style="background: linear-gradient(90deg, rgba(24,15,54,1) 0%, rgba(24,15,54,1) 50%, rgba(255,255,255,1) 50%);">
    <button type="button" class="schedule__demo__modal__close__button absolute left-4 top-4 text-black lg:text-white"><svg class=" fill-dark-blue-background lg:fill-white" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
        <polygon fill-rule="evenodd" points="8 9.414 3.707 13.707 2.293 12.293 6.586 8 2.293 3.707 3.707 2.293 8 6.586 12.293 2.293 13.707 3.707 9.414 8 13.707 12.293 12.293 13.707 8 9.414" />
      </svg></button>
    <div class="w-1/2 h-full bg-dark-blue-background px-10 pt-10 pb-6 hidden lg:block ">
      <p class="text-white text-base 3xl:text-xl font-bold mb-4"> See how we<br class="block xl:hidden"> can help you achieve <br class="block xl:hidden"> your <br class="hidden xl:block"> value-based <br class="block xl:hidden"> care goals.</p>
      <p class="text-white text-xs 3xl:text-lg mb-4">Schedule a meeting that's right for you -
        <br class="block xl:hidden"> a 15-minute introduction,
        <br class="block xl:hidden">30-minute overview of our solutions
        <br class="block xl:hidden">or a 90-minute demo. Share your challenges
        <br class="block xl:hidden">with us and we'll show you how our
        <br class="block xl:hidden">predictive insights can help.
      </p>
      <div class="contact__image__container flex justify-center">
        <img class=" max-w-[200px] xl:max-w-xs" src="<?php the_field('contact_us_modal_laptop_image', 'options') ?>" alt="contact us report image">
      </div>
      <p class="text-white text-xs 3xl:text-base ">Today, our solutions are helping healthcare organizations: </p>
      <div class="points__container mt-5 mb-4">
        <div class="flex mb-2 relative">
          <?php render_arrow_svg() ?>
          <p class="text-white text-xs 3xl:text-base pl-4">Unify and add power to their data</p>
        </div>
        <div class="flex mb-2 relative">
          <?php render_arrow_svg() ?>
          <p class="text-white text-xs 3xl:text-base pl-4">Predict emerging clinical and financial risk</p>
        </div>
        <div class="flex mb-2 relative">
          <?php render_arrow_svg() ?>
          <p class="text-white text-xs 3xl:text-base pl-4">Optimize programs and strategies to lower costs and improve outcomes</p>
        </div>
        <div class="flex mb-2 relative">
          <?php render_arrow_svg() ?>
          <p class="text-white text-xs 3xl:text-base pl-4">Measure results and demonstrate value</p>
        </div>
      </div>
    </div>
    <div class="w-full lg:w-1/2 h-full bg-white">
      <div class="schedule__demo__form__container px-5 lg:px-10 pt-10 pb-6">
        <!-- <div class="w-full flex justify-center mb-5">
           <div class="w-full border border-solid border-black rounded-2xl flex">
            <div class="first__step__pill w-7/12 bg-dark-blue-background rounded-2xl flex justify-center py-1 text-white font-bold text-base text-center">
              Step 1
            </div>
            <div class="second__step__pill w-5/12 flex justify-center py-1 rounded-2xl text-center font-bold text-base ">
              Step 2
            </div>
          </div> 
        </div> -->
        <div class="mb-5">
          <p class="text-center text-sm 2xl:text-base">Fill out the form below - and choose a meeting<br> that works for you.</p>
        </div>
        <?php echo FrmFormsController::get_form_shortcode(array('id' => get_field('contact_modal_form_id', 'options'), 'title' => false, 'description' => false)) ?>
      </div>
    </div>
  </div>
</div>