<?php

/* 
	Template Name: About 
*/

get_header();  ?>
<div class="wrapper">
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
	<div class="bottom social">
			<h4>Lately</h4>
		    <?php the_content(); ?>
			<a class="twitter-timeline" href="https://twitter.com/milenapribic" data-widget-id="604759468430094336">Tweets by @milenapribic</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>
	</main>
</div>

    <?php endwhile; // end the loop?> <!-- /.container -->
<!-- /main -->
