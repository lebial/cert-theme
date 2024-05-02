<?php
function render_executive_leadership()
{
  $items = get_field('executive_leadership');
  foreach ($items as $item) {
    echo '<div class="!flex flex-col items-center text-white flex-1 md:flex-[0_0_50%] lg:flex-[0_0_33%] mt-14" >
            <div class="mb-8 flex justify-center md:block">
              <a href="' . $item['bio_url'] . '" target="_blank" name="' . $item['name'] . '" class=" group">
                <img src="' . $item['image_url'] . '" alt="executive_image" class="w-40 h-40 lg:w-48 lg:h-48 2xl:w-52 2xl:h-52 transition-all duration-300 group-hover:scale-110 grayscale group-hover:grayscale-0" />
              </a>
            </div>
            <span class="text-center font-bold text-md lg:text-xl tracking-tight">' . $item['name'] . '</span>
            <span class="text-center text-sm lg:text-md tracking-tight">' . $item['title'] . '</span>
            <a class="platform__hero__option__button tracking-tight font-bold flex items-center transition-all duration-200 text-primary text-sm xl:text-md" 
              target="_blank"
              href="' . $item['bio_url'] . '"
              name="' . $item['name'] . '">
              Read Bio <span class="w-[20px] pt-[3px]"><svg id="Layer_1" style="enable-background:new 0 0 64 64;" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g id="Icon-Chevron-Left" transform="translate(237.000000, 335.000000)"><polyline class=" fill-primary" id="Fill-35" points="-210.9,-289 -212.9,-291 -201.1,-302.7 -212.9,-314.4 -210.9,-316.4 -197.1,-302.7      -210.9,-289    "/></g></g></svg></span></a>
          </div>';
  }
}
?>

<?php
function render_administrative_leadership()
{
  $items = get_field('administrative_leadership');
  foreach ($items as $item) {
    echo '<div class="flex flex-col items-center text-white pb-4 lg:pb-8">
            <span class="text-center font-bold text-md lg:text-lg tracking-tight">' . $item['name'] . '</span>
            <span class="text-center text-sm lg:text-md tracking-tight">' . $item['title'] . '</span>
          </div>';
  }
}
?>

<?php
function render_board_of_directors()
{
  $items = get_field('board_of_directors');
  foreach ($items as $item) {
    echo '<div class="flex flex-col items-center text-white pb-4 lg:pb-8">
            <span class="text-center font-bold text-md lg:text-lg tracking-tight">' . $item['name'] . '</span>
            <span class="text-center text-sm lg:text-md tracking-tight">' . $item['title'] . '</span>
          </div>';
  }
}
?>

<section id="executive-leadership" class="w-full h-full bg-dark-blue-background">
  <div class="w-9/12 lg:w-10/12 flex mx-auto flex-col items-center py-14 lg:py-20 max-w-screen-2xl">
    <h3 class="font-bold text-2xl xl:text-3xl text-white pb-12 reveal-text">Executive Leadership</h3>
    <!-- <div class="hidden w-full mx-auto md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-16"> -->
    <div class="hidden w-full mx-auto md:flex flex-wrap justify-center">
      <?php render_executive_leadership() ?>
    </div>

    <!-- Executive leadership mobile section  -->
    <div class="executive__carousel md:hidden flex flex-col items-center justify-center w-full mx-auto">
      <?php render_executive_leadership() ?>
    </div>

    <h3 class="font-bold text-2xl xl:text-3xl text-white py-12 pt-8 lg:pt-16 reveal-text">Administrative Leadership</h3>
    <div class="w-full mx-auto flex flex-col items-center">
      <?php render_administrative_leadership() ?>
    </div>

    <h3 class="font-bold text-2xl xl:text-3xl text-white py-12 reveal-text">Board of Directors</h3>
    <div class="w-full mx-auto flex flex-col items-center">
      <?php render_board_of_directors() ?>
    </div>
  </div>
</section>