<?php
$customer_env = get_field('customer_env_icon');
$certilytics_env = get_field('certilytics_env_icon');
?>
<section class="platform__deploy__options bg-gray-100 flex flex-col lg:flex-row py-32">
  <div class="px-12 w-full lg:w-1/2 " data-aos="fade-up">
    <div class="data__slides__content w-full lg:w-9/12 mx-auto 2xl:pt-[7%]" data-aos="fade-up">
      <p class="data__slides__content__title font-bold text-4xl">Adoption & Deployment</p>
      <div class="data__slides__content__description overflow-hidden mt-9 relative ">
        <!-- <div class="data__slide__overlay absolute bottom-0 left-0 w-full h-1/2 bg-white bg-opacity-60"></div> -->
        <div class="data__slide__text">
          <p class="text-xl ">
            Change is hard. That's why our process is designed to take the burden off you and your team
            to make adoption and deployment as flexible, friendly, and fast as possible.
          </p>
          <p class="text-xl">
            We get our clients up and running in <b>90 days or less.</b>
            Our implementation team is awesome (we don't mind bragging a bit) and works hand-in-hand with our data governance,
            client engament, and product teams to give you unparalleled support as you get online with Certilytics.
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
    <div class="sticky 2xl:static top-28">
      <img
        class="w-full platform__deployment__graphic hidden lg:block"
        src="<?php the_field('desktop_graphic')?>"
        alt="Platform Deployment Options"
      >
      <img
        class="w-full block lg:hidden"
        src="<?php the_field('mobile_graphic')?>"
        alt="Platform Deployment Options"
      >
    </div>
    <div></div>
  </div>
</section>