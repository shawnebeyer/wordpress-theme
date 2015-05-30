<?php

/*
	Template Name: Masonry Blog
*/

get_header();  ?>
<div class="wrapper">
	<div class="main">
	  <div class="container portfolio">

	   <?php /* The loop */
	   while ( have_posts() ) : the_post();
	       if ( get_post_gallery() ) :
	           echo get_post_gallery();
	       endif; 
	   endwhile; 
	   ?>
	  </div> <!-- /.container -->
	</div> <!-- /.main -->
</div>

<?php get_footer(); ?>