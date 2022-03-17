<?php
  $customer_env = get_field('customer_env_icon');
  $certilytics_env = get_field('certilytics_env_icon');
?>
<section class="platform__deploy__options bg-dark-blue-background">
  <div class="deploy__options__container px-8 py-10 w-full">
    <p class="text-3xl text-center text-light-blue" data-aos="fade-up">Platform Deployment Options</p>
    <div class="deploy__icon__header w-full flex uppercase text-center mt-10 ">

      <div class="w-1/2 flex-col flex items-center relative mr-2" data-aos="fade-up">
        <p class="text-base font-bold text-secondary" ><?php echo $customer_env['text'] ?></p>
        <img class="max-w-none w-64 absolute" style="top: 15%;" src="<?php echo $customer_env['icon'] ?>" alt="">
      </div>

      <div class="w-1/2 flex-col flex items-center relative ml-2" data-aos="fade-up">
        <p class="text-base font-bold text-primary"><?php echo $certilytics_env['text'] ?></p>
        <img class="max-w-none w-64 absolute" style="top: 10%;" src="<?php echo $certilytics_env['icon'] ?>" alt="">
      </div>
    </div>

    <div class="deploy__data__header w-full pt-10 pb-2">
      <p class="mx-auto w-1/2 text-center text-white font-bold text-xl">Software as a Service (SaaS)</p>
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
      <p class="mx-auto w-1/2 text-center text-white font-bold text-xl" data-aos="fade-up">Platform as a Service (PaaS)</p>
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
      <p class="mx-auto w-1/2 text-center text-white font-bold text-xl" data-aos="fade-up">Self Hosted</p>
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
</section>