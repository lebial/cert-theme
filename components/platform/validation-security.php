<section class="validation__security min-h-screen relative py-8 flex flex-col">
  <img style="z-index: -2;" src="<?php the_field('validation_background') ?>" class="absolute top-0 left-0 h-full w-full object-cover" alt="">
  <div style="z-index: -1;" class="overlay__validation w-full h-full absolute top-0 left-0"></div>
  <div class="validation__security__container px-11 relative">
    <p class="text-white font-bold text-3xl mt-14 lg:mx-auto lg:text-center xl:text-6xl" >Validation & Security</p>
    <button type="button" class="slider-prev absolute h-24 w-28"><img class="style-svg h-full w-full" src="<?php the_field('validation_arrow')?>" alt="left arrow"></button>
    <button type="button" class="slider-next absolute h-24 w-28"><img class="style-svg h-full w-full" src="<?php the_field('validation_arrow')?>" alt="right arrow"></button>
    <div class="validation__slider mt-14">
      <p class="text-white pr-16 text-lg 2xl:text-4xl">
        <b>Data Security</b> is central to our mission at Certilytics. The Certilytics
        Security Framework includes HIPAA compliance and relevant data security protocols to meet
        highest industry standards of security and integrity. Our framework is based on HITRUST,
        SOC 2 Type II, NIST CsF, elements of GDPR, and internally defined requirements based on 
        industry best practices, client expectations, and contractual agreements.
      </p>
      <p class="text-white pr-16 text-lg 2xl:text-4xl">
        At Certilytics, we know trust is integral to the success of predictive analytics. 
        That's why we've developed a proprietary <b>Validation Framework</b> to ensure
        the highest standards of data, software, and process integrity - with continual
        checks as data moves through our platform, regular audits and certifications, as well
        as clear data governance and security policies throughout our organization.
      </p>
      <p class="text-white pr-16 text-lg 2xl:text-4xl">
        Since its founding in 2014, Certilytics has established a climate of trust, collaboration
        and transparent communication. Our <b>Data Governance Board</b> and <b>Data Architecture Committee</b>
        combine key stakeholders from across the company to make deliberate advances
        in our approach to data management, architecture, and security.
      </p>
    </div>
  </div>
  <div class="validation__hitrust__container w-full flex justify-center lg:justify-end pb-10 lg:pr-16 flex-1 items-end">
    <img src="<?php the_field('validation_hitrust_logo') ?>" class="mt-10" alt="HITRUST logo">
  </div>
</section>