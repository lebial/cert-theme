<section class="md:min-h-[30vh] lg:min-h-[60vh] bg-light-blue flex items-center">
  <div class="w-9/12 md:w-8/12 flex-col md:flex-row flex justify-center mx-auto items-center py-12 md:py-0">
    <p class="text-center">Image Image Image Image Imag Image Image Image Image Imag</p>
    <!-- <img src="<?php //the_field('demo_image') ?>" class="w-full absolute top-0 left-0 z-[-1] h-full object-cover" alt=""> -->
    <div class="w-full flex justify-center flex-col">
      <div class="w-full flex flex-col items-center px-0 lg:px-0 pt-8 md:pt-0 lg:pt-0">
        <h3 class="tracking-widest text-black font-normal text-center text-3xl lg:text-3xl 2xl:text-5xl" ><?php the_field('demo_description') ?></h3>
        <div class="w-full mx-auto mt-8 flex lg:px-1 xl:px-2 justify-center">
          <a target="_blank" rel="noopener noreferrer" href="<?php the_field('demo_link_button')?>" class=" w-11/12 lg:w-5/12 2xl:w-4/12 bg-primary text-white font-bold rounded-lg lg:text-base 2xl:text-xl text-center py-3"><?php the_field('demo_text_button') ?></a>
        </div>
      </div>
    </div>
  </div>
</section>