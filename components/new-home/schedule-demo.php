<section class="min-h-[60vh] 2xl:min-h-[45vh]">
  <div class="contact__us__image__container w-full min-h-[60vh] 2xl:min-h-[45vh] relative text-center flex justify-end items-center">
    <img src="<?php the_field('ofast_image') ?>" class="w-full absolute top-0 left-0 z-[-1] h-full object-cover" alt="">
    <div class="action__quote__container w-full lg:w-6/12" data-aos="fade-up">
      <div class="w-full flex flex-col items-center px-4 md:px-32 lg:px-0 lg:pr-20 pt-4 lg:pt-0">
        <div class="w-full lg:w-10/12 2xl:w-7/12">
          <h3 class="action__quote__container__text text-3xl 2xl:text-5xl text-white font-bold text-center mb-0 mt-8"><?php the_field('schedule_demo_title') ?></h3>
        </div>
        <div class="action__quote__container__button w-full mx-auto mt-10 pb-10 flex lg:px-1 xl:px-2 justify-center">
          <button class="schedule__demo__button px-3 py-2  border-solid border-primary border rounded-3xl
			text-white font-bold hover:cursor-pointer transition-all duration-300
			hover:bg-primary text-xs lg:text-base " type="button">Let's Talk</button>
        </div>
        <div class="w-full flex justify-center">
          <!-- <h3 class="action__quote__container__text text-3xl 2xl:text-5xl text-white font-bold text-center mb-0 mt-8"><?php the_field('schedule_demo_title') ?></h3> -->
          <p class=" text-base text-white font-bold text-center pb-8 max-w-[450px]">
            Schedule a meeting with us for a 15-minute brief introduction, 30-minute presentation or a 60-minute deep dive deep into our solutions.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>