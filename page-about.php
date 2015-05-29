<?php

/* 
	Template Name: About 
*/

get_header();  ?>

<div class="main">
  <div class="container about">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  	<p>HELLOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO</p>
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>