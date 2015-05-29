<?php 
/*
	Template Name: Home Page
*/

get_header();  ?>
<?php get_sidebar(); ?>
<div class="main">

  <div class="container clearfix">
    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->
      <body>
        <main>
          <div class="slideshow">
            <img src="http://41.media.tumblr.com/ccc2511b5cf920591b1fa00ce19c6e41/tumblr_nod41bzpqj1st5lhmo4_1280.jpg" alt="">
            <img src="http://40.media.tumblr.com/893ecde6ca0d92213d09b2dc1000bf37/tumblr_no832q33ZY1st5lhmo3_1280.jpg" alt="">
            <img src="http://41.media.tumblr.com/ccc2511b5cf920591b1fa00ce19c6e41/tumblr_nod41bzpqj1st5lhmo4_1280.jpg" alt="">
            <img src="http://40.media.tumblr.com/893ecde6ca0d92213d09b2dc1000bf37/tumblr_no832q33ZY1st5lhmo3_1280.jpg" alt="">
            <img src="http://41.media.tumblr.com/ccc2511b5cf920591b1fa00ce19c6e41/tumblr_nod41bzpqj1st5lhmo4_1280.jpg" alt="">
          </div>
        </main>
  </body>


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>