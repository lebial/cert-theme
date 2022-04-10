<?php
$customer_env = get_field('customer_env_icon');
$certilytics_env = get_field('certilytics_env_icon');
?>
<section class="platform__deploy__options bg-white flex flex-col lg:flex-row">
  <div class="px-12 py-32 w-full lg:w-1/2 " data-aos="fade-up">
    <div class="data__slides__content w-full lg:w-9/12 mx-auto" data-aos="fade-up">
      <p class="data__slides__content__title font-bold text-4xl">Adoption & Deployment</p>
      <div class="data__slides__content__description overflow-hidden mt-14 relative ">
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
            a Platform license if you want to run our end-to-end platform on your infrastructure.
          </p>
        </div>
      </div>
      <!-- <div class="data__slides__content__button flex justify-center mt-10">
        <button class=" border-none bg-primary relative w-16 h-16"></button>
      </div> -->
    </div>
  </div>

  <div class=" px-8 py-12 pt-16 w-full lg:w-1/2">
    <div class="deploy__options__container w-full lg:w-11/12 mr-auto">
      <p class="text-3xl text-center" data-aos="fade-up">Platform Deployment Options</p>
      <div class="deploy__icon__header w-full flex uppercase text-center mt-10 ">

        <div class="w-1/2 flex-col flex items-center relative mr-2" data-aos="fade-up">
          <p class="text-base font-bold text-secondary"><?php echo $customer_env['text'] ?></p>
          <img class="max-w-none w-full absolute" style="top: 100%;" src="<?php echo $customer_env['icon'] ?>" alt="">
        </div>

        <div class="w-1/2 flex-col flex items-center relative ml-2" data-aos="fade-up">
          <p class="text-base font-bold text-primary"><?php echo $certilytics_env['text'] ?></p>
          <img class="max-w-none w-full absolute" style="top: 100%;" src="<?php echo $certilytics_env['icon'] ?>" alt="">
        </div>
      </div>

      <div class="deploy__data__header w-full pt-10 pb-2">
        <p class="mx-auto w-1/2 text-center font-bold text-xl">Software as a Service (SaaS)</p>
      </div>
      <div class="deploy__data__content w-full flex">
        <div class="content__body w-1/2 flex flex-col items-center" data-aos="fade-up">
          <div class="empty__data__block w-full h-14"></div>
          <div class="empty__data__block w-full h-14"></div>
          <div class="empty__data__block w-full h-14"></div>
        </div>
        <div class="content__body w-1/2 flex flex-col items-center" data-aos="fade-up">
          <div class="w-full h-14 bg-primary text-white">
            <p><b>Nucleus</b> Analytics</p>
          </div>
          <div class="w-full h-14 bg-primary text-white">
            <p><b>Accelerator</b> Data Platform</p>
          </div>
          <div class="w-full h-14 bg-primary text-white">
            <p>
              Public Cloud
            </p>
          </div>
        </div>
      </div>

      <div class="deploy__data__header w-full pb-2">
        <p class="mx-auto w-1/2 text-center font-bold text-xl" data-aos="fade-up">Platform as a Service (PaaS)</p>
      </div>
      <div class="deploy__data__content w-full flex">
        <div class="content__body w-1/2 flex flex-col items-center" data-aos="fade-up">
          <div class="w-full h-14 bg-secondary text-white">
            <p><b>Nucleus</b> Analytics</p>
          </div>
          <div class="w-full h-14 bg-secondary text-white">
            <p><b>Accelerator</b> Data Platform</p>
          </div>
          <div class="empty__data__block w-full h-14"></div>
        </div>

        <div class="content__body w-1/2 flex flex-col items-center" data-aos="fade-up">
          <div class="empty__data__block w-full h-14"></div>
          <div class="empty__data__block w-full h-14"></div>
          <div class="w-full h-14 bg-primary text-white">
            <p>
              Public Cloud
            </p>
          </div>
        </div>
      </div>

      <div class="deploy__data__header w-full pb-2">
        <p class="mx-auto w-1/2 text-center font-bold text-xl" data-aos="fade-up">Self Hosted</p>
      </div>
      <div class="deploy__data__content w-full flex">
        <div class="content__body w-1/2 flex flex-col items-center" data-aos="fade-up">
          <div class="w-full h-14 bg-secondary text-white">
            <p><b>Nucleus</b> Analytics</p>
          </div>
          <div class="w-full h-14 bg-secondary text-white">
            <p><b>Accelerator</b> Data Platform</p>
          </div>
          <div class="w-full h-14 bg-secondary text-white">
            <p>
              Public Cloud
            </p>
          </div>
        </div>
        <div class="content__body w-1/2 flex flex-col items-center" data-aos="fade-up">
          <div class="empty__data__block w-full h-14"></div>
          <div class="empty__data__block w-full h-14"></div>
          <div class="empty__data__block w-full h-14"></div>
        </div>
      </div>

    </div>
  </div>
</section>