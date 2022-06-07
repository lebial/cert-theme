<?php
$customer_env = get_field('customer_env_icon');
$certilytics_env = get_field('certilytics_env_icon');
?>
<section class="platform__deploy__options bg-gray-100 flex flex-col lg:flex-row py-16 xl:pt-32">
  <div data-aos="fade-up" class="w-full flex flex-col lg:flex-row">
    <div class="px-12 w-full lg:w-1/2 ">
      <div class="data__slides__content w-full lg:w-10/12 mx-auto xl:pt-3 2xl:pt-[3%]">
        <p class="data__slides__content__title text-center xl:text-left font-bold text-3xl 2xl:text-4xl">Adoption & Deployment</p>
        <div class="data__slides__content__description overflow-hidden mt-9 relative ">
          <div class="data__slide__text">
            <p class="text-xl ">
              Change is hard. That's why our process is designed to take the burden off you and your team
              to make adoption and deployment as flexible, friendly, and fast as possible.
            </p>
            <p class="text-xl">
              We get our clients up and running in <b>90 days or less.</b>
              Our implementation team is awesome (we don't mind bragging a bit) and works hand-in-hand with our data governance,
              client engagement, and product teams to give you unparalleled support as you get online with Certilytics.
            </p>
            <p class="text-xl">
              We offer flexible deployment options, including Software as a Service (SaaS) and
              a platform license if you want to run our end-to-end platform on your infrastructure.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class=" px-8 w-full lg:w-1/2">
      <!-- <div class="sticky lg:static top-28"> -->
      <div class="mt-6 xl:mt-0">
        <img
          class="style-svg w-full platform__deployment__graphic hidden lg:block"
          src="<?php the_field('desktop_graphic')?>"
          alt="Platform Deployment Options"
        >
        <img
          class="style-svg mobile-svg-options w-full block lg:hidden"
          src="<?php the_field('mobile_graphic')?>"
          alt="Platform Deployment Options"
        >
      </div>
      <div></div>
    </div>
  </div>
</section>