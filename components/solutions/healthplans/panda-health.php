<?php
function render_section() {
  global $wp_query;
  $panda_health = get_field('panda_health','options');
  $pagename = $wp_query->queried_object->post_name;
  if ($pagename == 'health-systems') echo '
    <section class="panda__health__banner flex justify-center py-14">
      <img class=" max-w-md" src="'.$panda_health['logo'].'" alt="'.$panda_health['alt'].'">
    </section>
  ';
  return null;
}
   render_section();
?>