<section class="md:min-h-[30vh] lg:min-h-[60vh] bg-light-blue flex items-center">
  <div class="w-9/12 lg:w-8/12 flex-col lg:flex-row flex justify-center mx-auto items-center py-12 lg:py-0">
    <img src="<?php the_field('demo_image') ?>" class="md:max-w-[55%] lg:max-w-[40%]" alt="">
    <div class="w-full flex justify-center flex-col">
      <div class="w-full flex flex-col items-center px-0 lg:px-0 pt-4 lg:pt-0">
        <h3 class="tracking-widest text-black font-normal text-center text-2xl lg:text-3xl 2xl:text-5xl" ><?php the_field('demo_description') ?></h3>
        <div class="w-full mx-auto mt-4 flex lg:px-1 xl:px-2 justify-center">
          <a target="_blank" rel="noopener noreferrer" href="<?php the_field('demo_link_button')?>" class="w-8/12 md:w-5/12 2xl:w-4/12 bg-primary text-white font-bold rounded-xl text-sm md:text-base 2xl:text-xl text-center py-3"><?php the_field('demo_text_button') ?></a>
        </div>
      </div>
    </div>
  </div>
</section>