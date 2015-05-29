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

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container clearfix">
    
    <nav class ="flexboxColumn">
      <div class="navTop flexboxColumn">
        <h1>
          <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
          </a>
        </h1>
       <?php wp_nav_menu( array(
         'container' => false,
         'theme_locations' => 'primary'
       )); ?>
      </div>
      <div class="navBottom">
        <p>Bob Jones</p>
        <p>999 999 9999</p>
      </div>
    </nav>

  </div> <!-- /.container -->
</header><!--/.header-->

