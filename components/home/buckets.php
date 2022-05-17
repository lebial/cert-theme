<?php

function render_bucket_cards() {
  $buckets = get_field('home_buckets');
  $idx = 0;
  foreach($buckets as $bucket) {
    echo '<div class="bucket__card lg:mr-14 last-of-type:mr-0 mt-28" data-aos="fade-up" data-aos-delay="'.intval($idx) * 150 .'">';
      echo '<div class="bucket__card__icon w-full flex justify-center "><img class=" w-40 lg:w-28" src='.$bucket['bucket_icon'].'></div>';
      echo '<p class="mt-6 text-2xl font-bold text-center">'.$bucket['bucket_title'].'</p>';
      echo '<p class="text-xl lg:text-base px-3.5 lg:px-0 leading-normal">'.$bucket['bucket_description'].'</p>';
    echo '</div>';
    $idx++;
  };
};

?>
<section class="buckets__section w-screen flex justify-center pb-44 border-b-2 border-gray-500 border-solid">
  <div class="hidden lg:flex flex-col lg:flex-row lg:justify-between" style="width: 95%">
    <?php render_bucket_cards() ?>
  </div>
  <div class="w-full relative lg:hidden block ">
    <div class="bucket__slider mx-14" style="height: 100%;">
      <?php render_bucket_cards() ?>
    </div>
    <div class="arrows__container w-full absolute flex justify-between fill-black">
      <?php custom_slider_arrows("bucket__slider") ?>
    </div>
  </div>
</section>