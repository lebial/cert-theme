<?php
  $base_url = get_bloginfo('wpurl');
?>

<div>
  <div class=" w-screen bg-blue-700 flex flex-col">
    <div class="relative w-screen" data-sticky="from: 0, duration: 400vh">

      <!-- <div class=" w-4/5 lg:w-1/2 mr-auto h-full flex flex-col"> -->
      <div class="w-1/2 mr-auto h-full flex flex-col">
        <div class="w-40 pt-32 mb-14 shapes-container" style="margin-right: 24%;" data-classes="1vh: {add: highlight-square}, 
        90vh: {add: highlight-circle, remove: highlight-square}, 
        200vh: {add: highlight-triangle, remove: highlight-circle}
        ">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/home-animation/blue-shapes.svg" class="style-svg" alt="">
        </div>
      </div>

      <div
        class="animation__content absolute w-full lg:w-1/2 mr-auto h-full flex flex-col items-center"
        data-animation="opacity: {0: 1, 50vh: 0}, transform: {0: translate(0,0), 50vh: translate(0, -20%)}"
      >
        <div class="absolute-center w-full h-full">
          <h3 class="text-white text-5xl">Organize
            and connect
            your data.</h3>
          <p class="text-white">
            Access easy-to-understand,
            AI-powered reporting to predict
            and link modifiable outcomes to 
            financial value.
          </p>
        </div>
      </div>

      <div
        class="animation__content absolute w-full lg:w-1/2 mr-auto h-full flex flex-col items-center"
        data-animation="opacity: {0: 0, 80vh: 1, 180vh: 0}, transform: {70vh: translate(0,0), 170vh: translate(0, -20%)}"
      >
        <div class="absolute-centerw-full h-full">
          <h3 class="text-white text-5xl">
            Design care 
            delivery 
            strategies.
          </h3>
          <p class="text-white">
            Member-level risk profiles drive 
            more effective outreach and 
            care strategies, so you can 
            match the right member to the 
            right program at the right time.
          </p>
        </div>
      </div>

      <div
        class="animation__content absolute w-full lg:w-1/2 mr-auto h-full flex flex-col items-center"
        data-animation="opacity: {140vh: 0, 210vh: 1}, transform: {178vh: translate(0,0), 210vh: translate(0, -2%)}"
      >
        <div class="absolute-centerw-full h-full">
          <h3 class="text-white text-5xl">
            Measure 
            results.
          <p class="text-white mt-6">
            Evaluate the performance of your 
            programs to improve your benefit 
            offerings, design high-performance 
            networks, and incentivize your 
            health partners to focus on value as 
            opposed to fee-for-service.
          </p>
        </div>
      </div>

    </div>



    <div class="full-window flex-1 last-slide relative">
      <div class=" hidden lg:block w-1/2 h-full ml-auto "> 
        <div class="mx-auto w-28 flex flex-col items-center">
        <div class="animation--first">
          <div class="unordered__dots absolute w-36 -top-60" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/home-animation/unordered.svg); width: 160px;"></div>
          <div class="relative">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/home-animation/cert-logo-round.svg" id="cert-round" class="style-svg opacity-100 z-10 w-40 max-w-none" alt="">
            <div class="ordered__dots w-24" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/home-animation/ordered.svg)"></div>
          </div>
        </div>
          <div class="relative h-screen mt-14 flex flex-col items-center justify-center">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/home-animation/face-plus.svg" id="face-plus" class="style-svg opacity-100 mt-9 z-10 min-w-40 w-4/5" alt="">

            <!-- angle line animation -->
            <div
              class="absolute face-line bg-primary"
              data-aos="grow-angle-line"
              data-aos-duration="1000"
            ></div>
            <!-- end angle line animation  -->

            <div class="w-full flex mt-14">
              <!-- red circle animation -->
              <div data-aos="change-bg-red" class="relative opacity-100 z-10 rounded-full w-16 h-16 bg-white mr-8">

                <!-- vertical line animation -->
                <div class="vertical-line"></div>
                <div
                  data-aos="grow-vertical-line"
                  data-aos-duration="500"
                  data-aos-delay="500"
                  class="vertical-line bg-primary flex flex-col justify-end"
                >
                  <div class="relative rounded-full w-16 h-16 bg-primary top-16 last-circle ">
                    <div data-aos="fade-in" data-aos-delay="500">
                      <img src="<?php echo get_template_directory_uri();?>/assets/images/home-animation/doc.svg" class="doc-icon absolute style-svg opacity-100 w-28" alt="">
                      <img src="<?php echo get_template_directory_uri();?>/assets/images/home-animation/check-mark.svg" class="check-mark-icon absolute style-svg opacity-100 w- w-28" alt="">
                      <img src="<?php echo get_template_directory_uri();?>/assets/images/home-animation/pie-chart.svg" class="pie-chart-icon absolute style-svg opacity-100 w-28" alt="">
                      <img src="<?php echo get_template_directory_uri();?>/assets/images/home-animation/bars.svg" class="bars-icon absolute style-svg opacity-100 w-28" alt="">
                      <div class="absolute font-bold text-white text-4xl doc-dots">. . . .</div>
                      <div class="absolute font-bold text-white text-4xl check-dots">. . . . .</div>
                      <div class="absolute font-bold text-white text-4xl pie-dots">. . . . . . .</div>
                      <div class="absolute font-bold text-white text-4xl bars-dots">. . . . . . . .</div>
                    </div>
                  </div>
                </div>
              </div>
                  <div class=" rounded-full w-16 h-16 bg-white mr-8"></div>
                  <div class=" rounded-full w-16 h-16 bg-white"></div>
            </div>
              <!-- vertical line animation -->
            </div>
              <!--end red circle animation -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="full-window flex-1 bg-white opacity-100 z-10 pb-10">
      <div class="absolute-center ">
        <h3 class=" text-5xl lg:text-6xl font-bold text-center">
          Are you ready to see 
          the <span data-aos="change-red">future</span> through
          data? <br>
        </h3>
        <div class="flex flex-col lg:flex-row w-full mt-8" data-aos="fade-in" data-aos-offset="-35">
          <div class="flex-1 flex mr-0 lg:mr-2 mb-5 lg:mb-0">
            <a
              class="p-2 w-full bg-primary rounded-md border-primary border border-solid text-white text-center transition-all hover:bg-white hover:text-primary"
              href="<?php echo $base_url?>/solutions/health-plans-pbms"
            >
              Health Plans
            </a>
          </div>
          <div class="flex-1 flex mb-5 lg:mb-0">
            <a
              class="p-2 w-full mx-0 lg:mx-1 bg-primary rounded-md border-primary border border-solid text-white text-center transition-all hover:bg-white hover:text-primary"
              href="<?php echo $base_url?>/solutions/employers"
            >
              Employers
            </a>
          </div>
          <div class="flex-1 flex">
            <a
              class="p-2 w-full ml-0 lg:ml-2 bg-primary rounded-md border-primary border border-solid text-white text-center transition-all hover:bg-white hover:text-primary"
              href="<?php echo $base_url?>/solutions/providers"
            >
              Providers
            </a>
          </div>
        </div>
      </div>
      <div class="absolute bottom-0 w-screen">
        <div class="relative w-full">
          <div class="moving__dots w-full">
            <div class="moving__dots__animation w-full h-16"></div>
          </div>
          <img class="computer__phone__image absolute w-72 -top-9" src="<?php the_field('slide_action_image') ?>" class="style-svg" alt="">
        </div>
      </div>
    </div>
  </div>
</div>