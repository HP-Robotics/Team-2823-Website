<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="panel panel-default panel-body">
			<?php while(have_posts()) : the_post(); ?>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<p class="text-muted">Posted by <?php the_author(); ?> on <?php the_time('F j, Y g:i a'); ?></p>
				<p><?php the_content(''); ?></p>
			<?php endwhile; wp_reset_query(); ?>
			</div>
		</div>
		<div class="col-md-3">
			<div class="list-group">
				<?php query_posts('posts_per_page=8'); while(have_posts()) : the_post(); ?>
					<a class="list-group-item" href="<?php the_permalink(); ?>">
					<h4 class="list-group-item-heading"><?php the_title(); ?></h4>
					<p class="list-group-item-text text-muted">Posted by <?php the_author(); ?> on <?php the_time('F j, Y g:i a'); ?></p>
					</a>
				<?php endwhile; wp_reset_query(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
