<?php

/*Template Name: About*/
get_header();  ?>


<div class="main">
  <div class="container">

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>