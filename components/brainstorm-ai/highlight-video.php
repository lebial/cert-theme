<?php
$quote = get_field('highlight_quote');
?>
<section id="<?php the_field('video_section_id') ?>"
  class="trusted__partner__section w-full flex flex-col lg:items-center lg:flex-row pt-8 pb-14 lg:py-32">
  <div name="desktop_main_video" class="h-full hidden w-1/2 lg:flex justify-center ">
    <?php get_template_part('components/brainstorm-ai/main_video') ?>
  </div>
  <div class="w-full lg:w-1/2 flex justify-center lg:justify-start mb-8">
    <div class="mb-0 lg:mb-4 w-full px-4 lg:pl-12 mr-0 lg:mr-12">

      <h2
        class="hidden lg:block font-normal text-2xl xl:text-4xl text-dark-blue-background mx-auto lg:mx-0 text-center lg:text-left reveal-text"
        data-reveal-direction="left">
        <?php echo $quote['title'] ?>
      </h2>
      <h2
        class="block lg:hidden font-normal text-2xl xl:text-4xl text-dark-blue-background mx-auto lg:mx-0 text-center lg:text-left ">
        <?php echo $quote['title'] ?>
      </h2>

      <div id="string-text">
        <?php //render_partners() ?>
      </div>
      <div name="mobile_main_video"
        class=" w-full flex relative left-1/2 -translate-x-1/2 lg:hidden justify-center mb-8">
        <?php get_template_part('components/brainstorm-ai/main_video') ?>
      </div>
      <p class="text-dark-blue-background max-w-xl text-center lg:text-left mx-auto lg:mx-0 text-lg mb-8 font-light">
        &ldquo;<?php echo $quote['body'] ?>&rdquo;</p>
      <div class="divider w-full lg:w-20 h-px bg-primary mb-4"></div>
      <p class="text-dark-blue-background max-w-xl text-center lg:text-left mx-auto lg:mx-0 text-xl font-normal">
        <?php echo $quote['author'] ?></p>
    </div>
  </div>

</section>