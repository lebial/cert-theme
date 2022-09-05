<section class="lg:min-h-[60vh] bg-light-blue">
  <div class="w-full lg:min-h-[60vh] relative text-center flex justify-center items-center">
    <p>Image</p>
    <!-- <img src="<?php //the_field('demo_image') ?>" class="w-full absolute top-0 left-0 z-[-1] h-full object-cover" alt=""> -->
    <div class="w-2/4">
      <div class="w-full flex flex-col items-center px-8 md:px-32 lg:px-0 pt-16 lg:pt-0">
        <h3 class="tracking-widest text-black font-normal text-center lg:text-5xl" ><?php the_field('demo_description') ?></h3>
        <div class="w-full mx-auto mt-8 flex lg:px-1 xl:px-2 justify-center">
          <a target="_blank" rel="noopener noreferrer" href="<?php the_field('demo_link_button')?>" class=" w-7/12 lg:w-4/12 bg-primary text-white font-bold rounded-lg text-xl text-center py-3"><?php the_field('demo_text_button') ?></a>
        </div>
      </div>
    </div>
  </div>
</section>