<section class="platform__contact__us lg:min-h-[70vh]" id="<?php the_field('platform_contact_us_section_id')?>">
  <div class="contact__us__image__container w-full lg:min-h-[70vh] relative text-center flex justify-end items-center">
    <img src="<?php the_field('ofast_image') ?>" class="w-full absolute top-0 left-0 z-[-1] h-full object-cover" alt="">
    <div class="action__quote__container w-full lg:w-8/12" data-aos="fade-up">
      <div class="w-full flex flex-col items-center px-8 md:px-32 lg:px-0 lg:pr-20 pt-16 lg:pt-0">
        <h3 class="action__quote__container__text text-white font-bold text-center" ><?php the_field('contact_us_title') ?></h3>
        <div class="action__quote__container__button w-full mx-auto mt-10 pb-14 flex lg:px-1 xl:px-2 justify-center">
          <a target="_blank" rel="noopener noreferrer" href="<?php the_field('schedule_demo_link')?>" class=" w-fit bg-primary text-white font-bold rounded-lg text-xl text-center py-3 px-5 "><?php the_field('schedule_demo_text') ?></a>
        </div>
      </div>
    </div>
  </div>
</section>