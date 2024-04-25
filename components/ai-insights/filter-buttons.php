<?php
$button_classes = '
  px-4 py-1 rounded-3xl border border-solid border-gray-400 text-gray-400 text-xs lg:text-sm mr-3
  font-normal tracking-tight
  transition-all duration-300 hover:border-primary hove`r:bg-primary hover:text-white
  ';
?>
<!-- <div class="search__container">
    <label class="flex items-center p-2 border border-gray-400 border-solid rounded-3xl w-fit">
      <input type="text" placeholder="search..." class="outline-none">
      <button type="button" class="h-full flex items-center">
        <svg class="w-5 h-auto" width="70" height="63" viewBox="0 0 70 63" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M44.1216 46.2075C39.4883 49.6227 33.6599 51.6575 27.3287 51.6575C12.2355 51.6575 0 40.0936 0 25.8287C0 11.5639 12.2355 0 27.3287 0C42.422 0 54.6575 11.5639 54.6575 25.8287C54.6575 31.582 52.6671 36.8959 49.3018 41.1891C49.3507 41.2248 49.399 41.262 49.4467 41.3005L68.1445 56.4159C69.7162 57.6864 69.9603 59.9904 68.6898 61.5621C67.4193 63.1337 65.1152 63.3778 63.5436 62.1073L44.8457 46.9919C44.5601 46.761 44.3184 46.496 44.1216 46.2075ZM50.7063 25.8287C50.7063 38.0312 40.2397 47.9232 27.3287 47.9232C14.4176 47.9232 3.95117 38.0312 3.95117 25.8287C3.95117 13.6263 14.4176 3.73425 27.3287 3.73425C40.2397 3.73425 50.7063 13.6263 50.7063 25.8287Z" fill="#9CA3AF"/>
        </svg>
      </button>
    </label>
  </div> -->
<div class="tags__container flex justify-center flex-wrap">
  <div class="ai-insights__filter__option group mb-2" data-option="all"><a href="/insights/ai-insights/#scrollContent" class="<?php echo $button_classes ?>">All</a></div>
  <div class="ai-insights__filter__option group mb-2" data-option="gen-ai"><a href="/insights/ai-insights/?tag=gen-ai#scrollContent" class="<?php echo $button_classes ?>">Gen AI</a></div>
  <div class="ai-insights__filter__option group mb-2" data-option="machine-learning"><a href="/insights/ai-insights/?tag=machine-learning#scrollContent" class="<?php echo $button_classes ?>">Machine Learning</a></div>
  <div class="ai-insights__filter__option group mb-2" data-option="predictive-modeling"><a href="/insights/ai-insights/?tag=predictive-modeling#scrollContent" class="<?php echo $button_classes ?>">Predictive Modeling</a></div>
  <div class="ai-insights__filter__option group mb-2" data-option="deep-learning"><a href="/insights/ai-insights/?tag=deep-learning#scrollContent" class="<?php echo $button_classes ?>">Deep Learning</a></div>
</div>