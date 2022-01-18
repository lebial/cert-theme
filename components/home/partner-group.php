
<div class="py-20  w-full border-b border-gray-400 border-solid">
  <div class="flex flex-col items-center px-8 md:px-0" data-aos="fade-up">
    <h3><?php the_field('partner_group_title') ?></h3>
    <p class="text-center"><?php the_field('partner_group_description') ?></p>
  </div>
  <section class="flex justify-center w-full mt-20" data-aos="fade-up">
    <div class="partner__group__container w-7/12">
      <?php
        custom_get_gallery_image_as_svg('partner_group');
      ?>
    </div>
  </section>
</div>