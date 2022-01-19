<?php
  $base_url = get_bloginfo('wpurl');
?>

<div>
  <div class=" w-screen bg-blue-700 flex flex-col">
    <div class="relative w-screen" data-sticky="from: 0, duration: 400vh">

      <div class="w-1/2 mr-auto h-full flex flex-col items-center">
        <div class="w-40 pt-32 mb-14 shapes-container" style="margin-right: 24%;" data-classes="1vh: {add: highlight-square}, 
        100vh: {add: highlight-circle, remove: highlight-square}, 
        200vh: {add: highlight-triangle, remove: highlight-circle}
        ">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/home-animation/blue-shapes.svg" class="style-svg" alt="">
        </div>
      </div>

      <div
        class="absolute w-1/2 mr-auto h-full flex flex-col items-center"
        data-animation="opacity: {0: 1, 50vh: 0}, transform: {0: translate(0,0), 50vh: translate(0, -20%)}"
      >
        <div class="absolute-centerw-full h-full">
          <h3 class="text-white text-5xl">Organize
            <br>
            and connect
            <br>
            your data.</h3>
          <p class="text-white">
            Access easy-to-understand,
            <br>
            AI-powered reporting to predict
            <br>
            and link modifiable outcomes to 
            <br>
            financial value.
          </p>
        </div>
      </div>

      <div
        class="absolute w-1/2 mr-auto h-full flex flex-col items-center"
        data-animation="opacity: {0: 0, 70vh: 1, 170vh: 0}, transform: {70vh: translate(0,0), 170vh: translate(0, -20%)}"
      >
        <div class="absolute-centerw-full h-full">
          <h3 class="text-white text-5xl">
            Design care <br>
            delivery <br>
            strategies.
          </h3>
          <p class="text-white">
            Member-level risk profiles drive <br>
            more effective outreach and <br>
            care strategies, so you can <br>
            match the right member to the <br>
            right program at the right time.
          </p>
        </div>
      </div>

      <div
        class="absolute w-1/2 mr-auto h-full flex flex-col items-center"
        data-animation="opacity: {178vh: 0, 188vh: 1}"
      >
        <div class="absolute-centerw-full h-full">
          <h3 class="text-white text-5xl">
            Measure <br>
            results.
          <p class="text-white">
            Evaluate the performance of your <br>
            programs to improve your benefit <br>
            offerings, design high-performance <br>
            networks, and incentivize your <br>
            health partners to focus on value as <br>
            opposed to fee-for-service.
          </p>
        </div>
      </div>

    </div>
    <div class="full-window flex-1 last-slide">
      <div class="w-1/2 h-full ml-auto relative">
        <div class="mx-auto w-28 flex flex-col items-center">
          <div class="absolute -top-60" data-animation="transform: {0: translate(0,0), 15vh: translate(0,30%) }">
            <img
              src="<?php echo get_template_directory_uri();?>/assets/images/home-animation/unordered.svg"
              class="style-svg w-32"
              alt=""
            >
          </div>
          
          <img src="<?php echo get_template_directory_uri();?>/assets/images/home-animation/cert-logo-round.svg" class="style-svg opacity-100 z-10 w-40" alt="">
          <div data-animation="transform: {-80vh: translate(0, -10%), 0: translate(0, 8%) }">
            <img
              src="<?php echo get_template_directory_uri();?>/assets/images/home-animation/ordered.svg"
              class="style-svg w-24"
              alt=""
            >
          </div>
          <div class="relative mt-14 flex flex-col items-center ">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/home-animation/face-plus.svg" class="style-svg opacity-100 z-10 w-40" alt="">

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
        <h3 class="text-6xl font-bold">
          Are you ready to see <br>
          the <span data-aos="change-red">future</span> through <br>
          data?
        </h3>
        <p>Find the perfect solution for you:</p>
        <div class="flex w-full mt-8" data-aos="fade-in">
          <div class="flex-1 flex mr-2">
            <a
              class="p-2 w-full bg-primary rounded-md border-primary border border-solid text-white text-center transition-all hover:bg-white hover:text-primary"
              href="<?php echo $base_url?>/solutions/health-plans-bms"
            >
              Health Plans
            </a>
          </div>
          <div class="flex-1 flex">
            <a
              class="p-2 w-full mx-1 bg-primary rounded-md border-primary border border-solid text-white text-center transition-all hover:bg-white hover:text-primary"
              href="<?php echo $base_url?>/solutions/employers"
            >
              Employers
            </a>
          </div>
          <div class="flex-1 flex">
            <a
              class="p-2 w-full ml-2 bg-primary rounded-md border-primary border border-solid text-white text-center transition-all hover:bg-white hover:text-primary"
              href="<?php echo $base_url?>/solutions/providers"
            >
              Providers
            </a>
          </div>
        </div>
      </div>
      <div class="absolute bottom-0 w-screen">
        <div class="relative w-full">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/home-animation/dots-separator.svg" class="style-svg" alt="">
          <img class="computer__phone__image absolute w-72 top-0 " src="<?php echo get_template_directory_uri();?>/assets/images/home-animation/computer-phone.svg" class="style-svg" alt="">
        </div>
      </div>
    </div>
  </div>
</div>