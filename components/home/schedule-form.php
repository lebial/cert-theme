<section class="w-screen relative flex flex-col xl:flex-row p-10 2xl:p-20" id="<?php the_field('schedule_demo_section_id')?>">
  <img style="z-index: -1;" src="<?php the_field('schedule_bg_image') ?>" class="hidden md:block absolute top-0 left-0 h-full w-full object-cover" alt="">
  <div style="z-index: -1; background-image: url(<?php the_field('schedule_bg_image')?>);" class="absolute top-0 left-0 block md:hidden h-full w-full"></div>
  <div class="w-full lg:w-7/12 lg:pb-6">
    <div class="w-full font-bold"><h3 class="text-xl 2xl:text-5xl text-primary"><?php the_field('schedule_title') ?></h3></div>
    <div class="w-full h-full flex justify-center items-center px-12">
      <p class="text-white font-normal text-xl 2xl:text-4xl "><?php the_field('schedule_description') ?></p>
    </div>
  </div>
  <div class="w-full xl:w-5/12 mt-10 md:mt-0">
    <div class="schedule-demo__form p-6 bg-white rounded-lg shadow-md w-full xl:w-11/12">
      <?php echo FrmFormsController::get_form_shortcode(array('id' => get_field('schedule_demo_form_id'), 'title' => true, 'description' => true)) ?>
    </div>
  </div>
</section>