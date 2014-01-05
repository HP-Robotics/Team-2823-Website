<?php get_header(); ?>
<style type="text/css">
body {
	padding-top: 0px !important;
}
</style>
<div id="content">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active"> <img class="hidden-xs hidden-sm" src="images/Front1desktop.jpg"> <img class="hidden-lg hidden-md" src="images/Front1mobile.jpg">
				<div class="container">
					<div class="carousel-caption">
						<div class="row">
							<h1>Welcome to Highland Park Robotics</h1>
							<p>Highland Park Team 2823 - The Automatons - is a team of Highland students that compete in the FIRST Robotics Competition league each year.  The team meets Tuesday, Thursday, and Saturday, while we prepare for the competition.</p>
							<p><a class="btn btn-lg btn-primary" href="Team.html" role="button">Learn More</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="jumbotron">
			<h1>News</h1>
			<a style="cursor: pointer" onclick="javascript: window.location = 'http://www.highland-2823.com/potato.html';"><img class="pull-right" src="img/blank.png" width="10" height="10"/></a>
			<p>You'll find updates from the team here</p>
		</div>
		<article id="content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry' ); ?>
			<?php comments_template('', true); ?>
			<?php endwhile; endif; ?>
			<?php get_template_part( 'nav', 'below-single' ); ?>
		</article>
	</div>
</div>
<?php get_footer(); ?>
