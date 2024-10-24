<section class="min-h-[60vh] 2xl:min-h-[45vh]">
  <div
    class="contact__us__image__container w-full min-h-[60vh] 2xl:min-h-[45vh] relative text-center flex justify-end items-center">
    <video playsinline autoplay muted loop id="HomeBackgroundVideo"
      class=" object-cover w-full h-full absolute top-0 left-0 z-10">
      <source src="<?php the_field('contact_video') ?>" type="video/mp4">
    </video>
    <div
      class=" min-h-[60vh] 2xl:min-h-[45vh] w-full opacity-100 z-20 bg-dark-blue-background bg-opacity-70 flex justify-end items-center">
      <div class="action__quote__container w-full lg:w-7/12 opacity-100 z-20 " data-aos="fade-up">
        <div class="w-full flex flex-col items-center px-4 md:px-32 lg:px-0 pt-4 lg:pt-0">
          <div class="w-full lg:w-8/12">
            <h3 class="action__quote__container__text text-2xl xl:text-4xl font-bold text-white text-center mb-0 mt-8">
              <?php the_field('contact_us_title') ?>
            </h3>
          </div>
          <div class="action__quote__container__button w-full mx-auto mt-10 pb-10 flex lg:px-1 xl:px-2 justify-center">
            <button class="schedule__demo__button px-3 py-2  border-solid border-primary border rounded-3xl
      text-white font-bold hover:cursor-pointer transition-all duration-300
      hover:bg-primary text-xs lg:text-base " type="button">Let's Talk</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>