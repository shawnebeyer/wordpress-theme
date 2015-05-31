<!DOCTYPE html>

<!-- THIS HEADER IS ON LEFT SIDE OF EVERY PAGE -->
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <script src="http://snapwidget.com/js/snapwidget.js"></script>
  <?php wp_head(); ?>
</head>

<header>

    <nav class ="flexboxColumn">

      <div class="navHeadline">
        <h1>
          <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
          </a>
        </h1>

      <div class="navTop flexboxColumn">
       <?php wp_nav_menu( array(
         'container' => 'false',
         'theme_locations' => 'primary'
       )); ?>
      </div>
      
      <div class="navBottom">
        <!-- Basic contact info here -->
      </div>

    </nav>
  </div> <!-- /.container -->
</header><!--/.header-->

