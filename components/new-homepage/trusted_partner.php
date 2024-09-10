<?php
function render_partners()
{
  $partnerOpts = get_field('partners_title');
  foreach ($partnerOpts as $partner) {
    echo '<span>' . $partner['title'] . '</span>';
  }
}
$quote = get_field('main_quote');
?>

<section class="trusted__partner__section w-full flex flex-col lg:items-center lg:flex-row py-12 lg:py-24"
  id="<?php the_field('video_section_id') ?>">
  <div class="w-full lg:w-1/2 flex justify-center lg:justify-end mb-0 lg:mb-8">
    <div class="lg:mb-4 w-7/12 mr-0 lg:mr-12">
      <h2 class="font-normal text-2xl xl:text-4xl text-dark-blue-background mx-auto lg:mx-0 text-center lg:text-left">
        <?php the_field('first_main_title_section') ?><br>
        <span class="typed font-bold"></span><br>
        <span><?php the_field('second_main_title_section') ?></span>
      </h2>

      <div id="string-text">
        <?php render_partners() ?>
      </div>
      <div name="mobile_main_video"
        class="w-[150%] md:w-full flex relative left-1/2 -translate-x-1/2 lg:hidden justify-center mb-8">
        <?php get_template_part('components/new-homepage/main_video') ?>
      </div>
      <p class="text-dark-blue-background max-w-xl text-center lg:text-left mx-auto lg:mx-0 text-lg mb-8 font-light">
        &ldquo;<?php echo $quote[0]['body'] ?>&rdquo;</p>
      <div class="divider w-full lg:w-20 h-px bg-primary mb-4"></div>
      <p class="text-dark-blue-background max-w-xl text-center lg:text-left mx-auto lg:mx-0 text-xl font-normal">
        <?php echo $quote[0]['author'] ?></p>
    </div>
  </div>
  <div name="desktop_main_video" class="h-full hidden w-1/2 lg:flex justify-start ">
    <?php get_template_part('components/new-homepage/main_video') ?>
  </div>

</section>