<?php function renderHeaderQuotes() {
  $header_quotes = get_field('carousel_section');

  foreach ($header_quotes as $quote) {
    echo '<div class="carousel__quote text-white font-bold text-lg lg:text-xl text-center lg:text-left !leading-10">'.$quote['copy'].'</div>';
  };
}
?>

<?php function renderHeaderImages() {
  $header_images = get_field('carousel_section');

  foreach ($header_images as $image) {
    echo '
    <div class="w-full relative h-[75vh] bg-cover bg-no-repeat bg-[center_-3rem]" style="background-image: url('.$image['image_url'].');"">
    </div>';
  };
}
?>

<section class="h-[75vh] w-full bg-dark-blue-background bg-cover">
  <div class="h-[75vh] w-full mx-auto relative flex items-center">
    <div class="w-full lg:w-1/2 flex justify-center absolute lg:static z-10">
      <div class="flex flex-col w-9/12">
        <h1 class="text-white mb-6 text-4xl lg:text-6xl text-center lg:text-left">About Us</h1>
        <div class="red__divider w-1/12 mx-auto lg:mx-0 mb-4 lg:mt-0 border-[0.1px] border-primary border-solid"></div>
        <div class="h-[25vh]">
          <div class="copy-carousel">
              <?php renderHeaderQuotes()?>
          </div>
        </div>
      </div>
    </div>
    <div class="h-[75vh] w-full lg:w-1/2">
      <div class="w-full images-carousel h-[75vh] flex flex-col items-center">
        <?php renderHeaderImages()?>
      </div>
    </div>
  </div>

  <div class="carousel-dots text-center mt-[-8rem] md:mt-[-21rem] lg:mt-[-4rem]">
  </div>
</section>