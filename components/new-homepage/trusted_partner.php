<?php
function render_partners()
{
  $partnerOpts = get_field('partners_title');
  foreach ($partnerOpts as $partner) {
    echo '<span>' . $partner['title'] . '</span>';
  }
}
$quote = get_field('main_quote');
?>

<section class="trusted__partner__section w-full flex flex-col lg:items-center lg:flex-row py-24">
  <div class="w-full lg:w-1/2 flex justify-center lg:justify-end mb-8">
    <div class="mb-0 lg:mb-4 w-7/12 mr-0 lg:mr-12">
      <h2 class="font-normal text-3xl xl:text-5xl text-dark-blue-background mx-auto lg:mx-0 text-center lg:text-left">
        <?php the_field('first_main_title_section') ?><br>
        <span class="typed font-bold"></span><br>
        <span><?php the_field('second_main_title_section') ?></span>
      </h2>

      <div id="string-text">
        <?php render_partners() ?>
      </div>
      <!-- <p class="text-dark-blue-background max-w-xl text-center lg:text-left mx-auto lg:mx-0" style="color: #180f36;"><?php echo strip_tags(get_field('description'), '<span><q><blockquote><br><strong>') ?></p> -->
      <p class="text-dark-blue-background max-w-xl text-center lg:text-left mx-auto lg:mx-0 text-lg mb-8"><?php echo $quote[0]['body'] ?></p>
      <div class="w-20 h-1 bg-primary mb-4"></div>
      <p class="text-dark-blue-background max-w-xl text-center lg:text-left mx-auto lg:mx-0 text-xl font-bold"><?php echo $quote[0]['author'] ?></p>
    </div>
  </div>
  <div class="w-full h-full lg:w-1/2 flex justify-center lg:justify-start ">
    <div class="w-7/12 h-fit flex flex-col lg:justify-center ml-0 lg:ml-12 relative">
      <div class="w-full h-full absolute flex justify-center items-center top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-black bg-opacity-50 rounded-xl">
        <button class="second_video_play_button">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 132 130" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M67 130C107.869 130 132 104.317 132 64C132 23.6832 107.869 0 67 0C26.1309 0 0 23.6832 0 64C0 104.317 26.1309 130 67 130ZM51.75 91.0478L96 65.5L51.75 39.9522V91.0478Z" fill="white" fill-opacity="0.6" />
          </svg>
        </button>
      </div>
      <video class="home__secondary__video object-cover w-full h-full rounded-xl shadow-lg">
        <source src="<?php the_field('home_main_video_url') ?>" type="video/mp4">
      </video>
    </div>
  </div>

</section>