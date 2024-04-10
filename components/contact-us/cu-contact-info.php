<?php
function render_contact_details()
{
  $items = get_field('contact_info_details');
  foreach ($items as $item) {
    echo '<div class="contact__info__details">
            <div class="">
              <img src="'.$item['image'].'" alt="icon" class="w-12 h-8 2xl:w-16 2xl:h-12" />
            </div>
            <div>'.$item['description'].'</div>
          </div>';
  }
}
?>

<section class="w-full h-full">
  <div class="w-10/12 flex mx-auto py-4 lg:py-20">
    <div class="contact__us__contact__details w-full lg:w-7/12 flex flex-col">
      <?php render_contact_details() ?>
      <div class="contact__us__current__openings">
        <a href="'.<?php the_field('current_openings_url') ?>.'" target="_blank" class="px-3 py-2 border-solid border-primary border lg:border-[2px] rounded-3xl text-primary hover:text-white mr-3 font-medium hover:cursor-pointer transition-all duration-300 hover:bg-primary text-xs lg:text-sm " type="button" name="Current Openings">See Current Openings</a>
        <?php the_field('current_openings_description') ?>
      </div>
    </div>
  </div>
</section>