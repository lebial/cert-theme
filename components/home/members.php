<?php
  function render_members() {
    $images = get_field('members_images');
    foreach($images as $image) {
      echo '<div class="w-48 h-32 flex items-center mx-6" >';
      echo '<img src="'.$image['src'].'" alt="'.$image['alt'].'" />';
      echo '</div>';
    }
  }
?>

<div class="w-full flex flex-col sm:flex-row justify-center items-center pt-8" data-aos="fade-up">
  <div class="h-32 flex items-center mx-6" >
    <h2 class="mr-12 font-normal"><?php echo get_field('member_title') ?></h2>
  </div>
  <?php render_members() ?>
</div>