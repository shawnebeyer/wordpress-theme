<?php

/* 
	Template Name: About 
*/

get_header();  ?>

<main class = "aboutSection">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div class="about top">
			<div class="picture">
				<?php echo get_avatar( get_the_author_meta('user_email'), 175); ?>
			</div>
			<div class="info">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi hic eos earum fuga quo, aspernatur accusantium ducimus perspiciatis fugit explicabo!</p>
				<p class= "email"><?php echo $admin_email = get_option( 'admin_email' ); ?></p>
				<h4 class="socials">Elsewhere: </h4>
				<p>Twitter + Facebook</p>
			</div>
	</div> 

	<div class="about bottom">
		<div class="events">
			<h4>Event Coverage</h4> 
			<p>SXSW 2012, NXNE 2014, Pitchfork Festival 2014, Sasquatch Festival 2015, Paris Fashion Week 2015</p>
		</div>
		<div class="clients">
			<h4>Clients</h4>
				<p>Target, Warby Parker, Nike, Mazda, All Saints, Wired Magazine, Gap, GQ, Details Magazine, Dwell Magazine, Lincoln Motor Co, Samsung, Ralph Lauren, Red Bull, Filson, Bridges 2 Prosperity, SPUR, Brutus Magazine, Wantful, NYLON Guys, Harry's, Atlantic Records, Kinfolk, VSCO</p>
		</div>
	</div>	
<hr class="aboutHr">
<div class="bottom">
		<h4>Lately</h4>
	    <?php the_content(); ?>
	    
</div>
</main>

    <?php endwhile; // end the loop?> <!-- /.container -->
<!-- /main -->

<?php get_footer(); ?>