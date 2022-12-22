<div >
  <div class="w-screen">
    <div
      class="w-full h-[50vh] opacity-100"
      data-sticky="from: 0, duration: 50vh"
      id="<?php the_field('super_charge_slide_id')?>"
    >
      <p class="absolute-center text-2xl lg:text-5xl leading-tight font-bold" data-animation="opacity: {0: 1, 20vh: 0}">
        <span data-aos="change-red">Supercharge</span> 
        your digital data ecosystem with value-focused predictive analytics.
      </p>
    </div>
      <!-- <div class="full-window bg-dark-background"> -->
      <div class="full-window bg-dark-background">
        <div id="<?php the_field('opportunity_framework_slide_id')?>" class="parallax" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/images/home-animation/opportunity-icon.svg);">
          <div class="absolute-center w-9/12" data-classes="-70vh: {add: second-slide-animation}">
            <div class="flex items-center mb-4">
              <!-- <img class="w-full hidden xl:block" src="<?php echo get_template_directory_uri();?>/assets/images/home-animation/opportunity-framework-logo.svg" class="style-svg" alt=""> -->
              <!-- <img class="w-full block xl:hidden" src="<?php echo get_template_directory_uri();?>/assets/images/home-animation/opportunity-logo-mobile.svg" class="style-svg" alt=""> -->
              <img class="w-full lg:w-1/2" src="<?php echo get_template_directory_uri();?>/dist/assets/images/home-animation/opp-framework-new.svg" class="style-svg" alt=""> 
            </div>
            <p class="text-white ml-4">The Certilytics <span class=" text-current text-red-animate">Opportunity Framework</span> is a one-of-a-kind, <br> AI-enabled solution that quantifies the financial value of impacting modifiable member outcomes and provider behaviors.</p>
            <div class="w-40 mt-20 opacity-0 fade-in-animate sec-transition">
              <!-- <img src="<?php //echo get_template_directory_uri();?>/dist/assets/images/home-animation/red-shapes.svg" class="style-svg" alt=""> -->
            </div>
          </div>
        </div>
      </div>
    </div>
</div