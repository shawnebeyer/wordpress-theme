<?php

/* 
	Template Name: About 
*/

get_header();  ?>

<main class="about">
  	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	    <h3><?php the_title(); ?></h3>
		<div class="top">
			
		</div>
		<div class="bottom">
			
		</div>
	    <?php the_content(); ?>
    <?php endwhile; // end the loop?> <!-- /.container -->
</main> <!-- /main -->

<?php get_footer(); ?>