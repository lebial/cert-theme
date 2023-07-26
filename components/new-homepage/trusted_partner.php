<?php
function render_partners()
{
  $partnerOpts = get_field('partners_title');
  foreach ($partnerOpts as $partner) {
    echo '<span>' . $partner['title'] . '</span>';
  }
}
?>

<section class="trusted__partner__section w-full ">
  <div class=" w-10/12 mx-auto max-w-4xl pt-12 mb-0 lg:mb-4 flex justify-center">
    <h2 class="font-normal text-3xl lg:text-5xl text-center text-dark-blue-background">
      <?php the_field('first_main_title_section') ?><br>
      <span class="typed font-bold"></span><br>
      <span><?php the_field('second_main_title_section') ?></span>
    </h2>

    <div id="string-text">
      <?php render_partners() ?>
    </div>
  </div>

  <div class="credibility__body w-11/12 md:w-10/12 lg:w-8/12 2xl:w-7/12 mx-auto pb-12 flex justify-center">
    <p class="text-center text-dark-blue-background max-w-none" style="color: #180f36;"><?php echo strip_tags(get_field('description')) ?></p>
  </div>
</section>