<?php function renderHeaderQuotes() {
  $header_quotes = get_field('carousel_section');
  // js_console($header_quotes);

  foreach ($header_quotes as $quote) {
    echo '<div class="text-white font-bold text-lg lg:text-xl">'.$quote['copy'].'</div>';
  };
}
?>

<?php function renderHeaderImages() {
  $header_images = get_field('carousel_section');

  foreach ($header_images as $image) {
    echo '
    <div class="w-full relative h-[70vh]">
      <img src="'.$image['image_url'].'" alt="" class="w-full h-full object-cover" />
    </div>';
  };
}
?>

<section class="h-[70vh] w-full bg-dark-blue-background bg-cover" style="background-image:url(<?php the_field('') ?>); background-size: cover; margin-top: 0;">
  <div class="h-[70vh] w-full mx-auto flex items-center">
    <div class="w-1/2 flex justify-center">
      <div class="flex flex-col w-9/12">
        <H2 class="text-white text-3xl lg:text-6xl">About Us</H2>
        <div class="red__divider w-1/3 mx-auto lg:mx-0 lg:mb-8 lg:mt-0 border-[0.1px] border-primary border-solid"></div>
        <div class="h-[25vh]">
          <div class="copy-carousel">
              <?php renderHeaderQuotes()?>
          </div>
        </div>
      </div>
    </div>
    <div class="h-[70vh] w-1/2">
      <div class="w-full images-carousel h-[70vh] flex flex-col items-center">
        <?php renderHeaderImages()?>
      </div>
    </div>
  </div>

  <div class="carousel-dots text-center mt-[-4rem]">
    <!-- Los puntos se generarán automáticamente -->
  </div>
</section>