<?php function renderHeaderQuotes()
{
  $header_quotes = get_field('carousel_section');

  foreach ($header_quotes as $quote) {
    echo '<div class="carousel__quote text-dark-blue-background font-bold text-lg lg:text-xl text-center leain leading-tight">' . $quote['copy'] . '</div>';
  };
}
?>

<section class="h-[47vh] w-full bg-white mt-0 md:mt-8 lg:mt-12">
  <div class="h-[47vh] w-full mx-auto relative flex items-center">
    <div class="w-full lg:w-full flex justify-center absolute lg:static">
      <div class="flex flex-col w-10/12 lg:w-5/12 pt-12">
        <div class="h-[20vh] md:h-[10vh] lg:h-[20vh]">
          <div class="copy-carousel">
            <?php renderHeaderQuotes() ?>
          </div>
        </div>
        <div class="about__us__hero__dots carousel-dots text-center pt-4 md:pt-2"></div>
      </div>
    </div>
  </div>
</section>