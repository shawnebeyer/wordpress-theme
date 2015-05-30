<?php

/*
	Template Name: Portfolio
*/

get_header();  ?>

<div class="main">
  <div class="container portfolio">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <?php  dynamic_sidebar( 'secondary-widget-area' ); ?>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>