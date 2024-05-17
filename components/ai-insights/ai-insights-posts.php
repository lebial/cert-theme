<section class="ai-insights__posts py-8 px-10 lg:px-20 lg:mt-14">
  <!-- <div class="tags__container flex mt-4 max-w-screen-lg mx-auto pl-4"> -->
  <div id="scrollContent"></div>
  <div class="hidden lg:block">
    <?php get_template_part('components/ai-insights/filter-buttons'); ?>
  </div>
  <main class="ai__posts__container lg:mt-10 flex justify-center flex-col">
    <div class="block lg:hidden py-4 lg:py-0">
      <?php get_template_part('components/ai-insights/filter-buttons'); ?>
    </div>
    <div class="w-full max-w-screen-lg grid grid-cols-1 lg:grid-cols-3 gap-5 lg:auto-rows-fr mx-auto">
      <?php get_template_part('components/ai-insights/ai-insights-post-render') ?>
    </div>
    <div class="w-full flex justify-center pb-12"><?php render_load_more() ?></div>
  </main>
</section>