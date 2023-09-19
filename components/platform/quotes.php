<?php
function render_cards()
{
  $quotes = get_field('quotes');
  foreach ($quotes as $quote) {
    echo '<div class="slider__slide relative mx-auto shadow-none flex-col lg:flex-row lg:items-center lg:shadow-[8px_8px_0px_#011b3a51] p-8 md:p-14 lg:p-16 bg-white">';
    echo '<div class="slider__slide__image flex justify-center px-8 lg:p-0">';
    echo '<img src="' . $quote['image'] . '" alt="quote thumbnail"/>';
    echo '</div>';
    echo '<div class="slider__slide__text px-8 pt-8 lg:pr-0 lg:pt-0 lg:pl-10">';
    echo '<p class="slider__slide__text--paragraph text-black	font-bold text-2xl md:text-3xl">' . $quote['description'] . '</p>';
    echo '<p class="slider__slide__text--legend text-black italic text-2xl md:text-3xl">' . $quote['legend'] . '</p>';
    echo '</div>';
    echo '</div>';
  }
}
?>

<section class="slider__section flex justify-center p-0 bg-gray-100" id="<?php the_field('platform_quotes_section_id') ?>">
  <div class="slider__relative relative  w-full h-full">
    <div class="slider-container absolute w-full h-full md:pb-14 flex justify-between items-center z-10">
      <?php custom_slider_arrows("quotes__slider") ?>
    </div>
    <div class="quotes__slider">
      <?php render_cards() ?>
    </div>
  </div>
</section>