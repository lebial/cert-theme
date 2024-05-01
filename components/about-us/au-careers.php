<section class="au__careers w-full">
    <div class="w-full px-6 md:px-2 lg:px-0 text-center my-12 lg:my-20 relative mx-auto max-w-screen-2xl">
        <h3 class="text-2xl xl:text-3xl text-dark-blue-background font-bold pb-4 reveal-text">Certilytics Is Growing!</h3>
        <div class="au__careers__description w-full text-left lg:text-center xl:w-9/12 mx-auto">
            <p class="max-w-6xl text-lg lg:text-xl text-center text-dark-blue-background"><?php the_field('careers_section_description') ?></p>
        </div>
        <div class="w-full mt-8 pb-8 flex justify-center lg:w-5/12 2xl:w-3/12 xl:px-2 mx-auto">
            <a target="_blank" rel="noopener noreferrer" href="<?php the_field('careers_button_link') ?>" class="w-8/12 sm:w-6/12 lg:w-5/12 2xl:w-8/12 border border-solid rounded-3xl border-primary bg-white text-primary hover:bg-primary hover:text-white font-bold text-lg text-center py-2"><?php the_field('careers_section_text_button') ?></a>
        </div>
        <div class="au__careers__description w-full mx-auto lg:p-0 lg:w-5/12 2xl:w-[18%]">
            <p class="text-xs leading-[15px!important] lg:leading-[18px!important] lg:text-sm text-center"><?php the_field('careers_section_text_contact') ?></p>
        </div>
    </div>
</section>