<?php

/*
	Template Name: Portfolio
*/

get_header();  ?>

<main>
  <div class="portfolio">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <?php  dynamic_sidebar( 'secondary-widget-area' ); ?>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</main> <!-- /.main -->

<?php get_footer(); ?>