<?php 
/* Template Name: Multi Sections */

get_header(); 
?>

    <div class="container-fluid p-0">
	<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			//
			get_template_part('partials/page/content','multi-sections');
			//
		} // end while
	} // end if
	?>

    </div>

<?php get_footer(); ?>
  