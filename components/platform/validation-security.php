<section class="validation__security min-h-[80vh] md:min-h-[53vh] lg:min-h-[90vh] relative py-8 flex flex-col bg-dark-blue-background">
  <!-- <img style="z-index: -2;" src="<?php the_field('validation_background') ?>" class="absolute top-0 left-0 h-full w-full object-cover" alt=""> -->
  <!-- <div style="z-index: -1;" class="overlay__validation w-full h-full absolute top-0 left-0"></div> -->
  <div class="validation__security__container px-11 md:px-24 lg:px-11 relative text-center md:text-left lg:text-left">
    <p class="text-white font-bold text-3xl mt-14 lg:mx-auto md:text-center lg:text-center xl:text-6xl" >Data <span class="validation__headline" data-aos="change-red">Security</span></p>
    <div class="validation-slider-container left-0 px-0 md:px-8 lg:px-16 absolute w-full h-full md:pb-14 flex justify-between items-center z-10">
      <?php custom_slider_arrows("validation__slider")?>
    </div>
    <div class="validation__slider mt-14">
      <div class="flex justify-center">
        <p class="text-white pr-0 md:pr-16 lg:pr-0 text-lg 2xl:text-4xl">
          <b>Data Security</b> is central to our mission at Certilytics. The Certilytics
          Security Framework includes HIPAA compliance and relevant data security protocols to meet
          highest industry standards of security and integrity. Our framework is based on HITRUST,
          SOC 2 Type II, NIST CsF, elements of GDPR, and internally defined requirements based on 
          industry best practices, client expectations, and contractual agreements.
        </p>
      </div>
      
      <div class="flex justify-center">
        <p class="text-white pr-0 md:pr-16 lg:pr-0 text-lg 2xl:text-4xl">
          At Certilytics, we know trust is integral to the success of predictive analytics. 
          That's why we've developed a proprietary <b>Validation Framework</b> to ensure
          the highest standards of data, software, and process integrity - with continual
          checks as data moves through our platform, regular audits and certifications, as well
          as clear data governance and security policies throughout our organization.
        </p>
      </div>

      <div class="flex justify-center">
        <p class="text-white pr-0 md:pr-16 lg:pr-0 text-lg 2xl:text-4xl">
          Since its founding in 2014, Certilytics has established a climate of trust, collaboration
          and transparent communication. Our <b>Data Governance Board</b> and <b>Data Architecture Committee</b>
          combine key stakeholders from across the company to make deliberate advances
          in our approach to data management, architecture, and security.
        </p>
      </div>
      
    </div>
  </div>
  <div class="validation__hitrust__container w-full flex justify-center flex-1">
    <img src="<?php the_field('validation_hitrust_logo') ?>" class="mt-10 h-full" alt="HITRUST logo">
  </div>
</section>