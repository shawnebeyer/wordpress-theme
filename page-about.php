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
					<p><a href="twitter.com/milenapribic">Twitter</a> + <a href="facebook.com/milenapribic">Facebook</a></p>
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
	<div class="press">
	<h4>Press</h4>
		<div class="screenshots">
			<div class="image">
				<img src="https://macmessiah.files.wordpress.com/2010/04/5d21429c-d445-4eed-bf3c-b78518bcaeb0iphone_photo1.jpg" alt="">
			</div>
			<div class="image">
				<img src="http://graphics8.nytimes.com/images/2013/01/17/learning/NYTJan172013LN/NYTJan172013LN-blog480.jpg" alt="">
			</div>
			<div class="image">
				<img src="http://rt.com/files/news/israel-censorship-prisoner-x-088/screenshot.jpg" alt="">
			</div>
		</div>
	</div>
	<div class="real bottom">
	<h4>Live</h4>
	<div class="social">
		<div class="instaFeed">
			<iframe src="http://snapwidget.com/in/?u=bWlsZW5hcHJpYmljfGlufDEyNXw0fDJ8fG5vfDV8bm9uZXxvblN0YXJ0fG5vfHllcw==&ve=310515" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%;"></iframe>
		</div>
	</div>
	</div>
	</main>
</div>

    <?php endwhile; // end the loop?> <!-- /.container -->
<!-- /main -->
