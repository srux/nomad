<?php
	$slug = get_post_field('post_name');
?>

  <section class="<?php the_field('css_classes')?>" id="<?php echo $slug ?>">
    <div class="my-auto">
      <h2 class="mb-5"><?php the_title()?></h2>
      <div><?php the_content()?></div>
    </div>
  </section>