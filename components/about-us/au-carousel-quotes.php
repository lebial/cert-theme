<?php function renderHeaderQuotes()
{
  $header_quotes = get_field('carousel_section');

  foreach ($header_quotes as $quote) {
    echo '<div class="carousel__quote text-dark-blue-background font-bold text-lg lg:text-xl text-center leain leading-tight">' . $quote['copy'] . '</div>';
  };
}
?>

<section class="h-[50vh] lg:h-[54vh] 2xl:h-[47vh] lg: w-full bg-white mt-0 md:mt-8 lg:mt-12 2xl:mt-16">
  <div class="h-[47vh] w-full mx-auto relative flex items-center">
    <div class="w-full lg:w-full flex justify-center flex-col items-center absolute lg:static">
      <div class="flex flex-col w-11/12 md:w-10/12 lg:w-6/12 pt-12 pb-0 lg:pb-8 2xl:pb-0">
        <div class="h-[20vh] md:h-[10vh] lg:h-[20vh]">
          <div class="copy-carousel">
            <?php renderHeaderQuotes() ?>
          </div>
        </div>
      </div>
      <div class="about__us__hero__dots carousel-dots text-center pt-12 md:pt-6 2xl:pt-0"></div>
    </div>
  </div>
</section>