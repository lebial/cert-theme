<?php
function render_video() {
  echo '
  hello
  ';
}

function render_content() {
  $components = [
    'video' => 'render_video',
  ];
  $post_type = get_field('post_type');
  return $components[$post_type];
}
?>
<section class="resources__post__container">
  <main>
    <div class="navigation__container ml-20 my-12">
      <a href="/">Home</a> / <a href="/resources">Resources</a> / <a href="/ressources/?tag=videos">Videos</a>
    </div>
    <div class="py-16">
    <?php render_content()?>
      <div class="resources__video__container flex mx-auto max-w-screen-xl">
        <div class="w-1/2">
          <h2 class="text-dark-blue-background text-base">AS Seectionresed Es Sit</h2>
          <p class=" text-dark-background">
            Fugiam sit ut rem lique sitas qui num vellatem unt et
            exceaAlis evel iundi nonserit quatemo lorrume nihiciunt
            paritae ptatibus etur a nimus ariae rest et, sinctureici aut
            etur am, inus.<br><br>
            La del in ex et intia quis dolut rehende doluptur a dolorer
            umquae. Rem volorum non consecate dolorerum sania
            corerum qui utempernatem ilicidem inus renitempor
            archilles estiur? Qui dolo que intiunderest quid qui
            dolum voluptatio. Ihici odis dolenducias ut quam fugit.
          </p>
        </div>
        <div class="w-1/2 flex justify-end">
          <!-- <div class="w-full lg:w-[72%] h-fit flex flex-col lg:justify-center ml-0 lg:ml-12 relative"> -->
          <div class="w-full h-fit flex flex-col lg:justify-center ml-0 lg:ml-12 relative">
            <div class="w-full h-full absolute flex justify-center items-center top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-black bg-opacity-50 rounded-xl z-20">
              <button class="second_video_play_button">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 132 130" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M67 130C107.869 130 132 104.317 132 64C132 23.6832 107.869 0 67 0C26.1309 0 0 23.6832 0 64C0 104.317 26.1309 130 67 130ZM51.75 91.0478L96 65.5L51.75 39.9522V91.0478Z" fill="white" fill-opacity="0.6" />
                </svg>
              </button>
            </div>
            <video class="home__secondary__video object-cover w-full h-full rounded-xl shadow-lg " style="outline: 3px solid white; outline-offset: -2px;" poster="<?php //the_field('home_main_video_thumbnail') ?>" height="432" width="576" name="home">
              <source src="<?php //the_field('home_main_video_url') ?>" type="video/mp4">
            </video>
          </div>
        </div>
      </div>
    </div>
  </main>
</section>