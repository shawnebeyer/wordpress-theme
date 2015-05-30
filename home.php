<?php //index.php is the last resort template, if no other templates match ?>



<?php get_header(); ?>
<?php get_sidebar(); ?>

<div class="main">
  <div class="container blogs">
    <div class="content blog">
    	<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
