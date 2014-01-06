<?php get_header(); ?>
<div id="content">
	<div class="container">
		<?php the_post(); ?>
		<h1><?php single_cat_title() ?></h1>
		<p><?php $categorydesc = category_description(); if ( !empty($categorydesc) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . $categorydesc . '</div>' ); ?></p>
		<hr>
		<?php rewind_posts(); ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<p><?php the_excerpt(); ?></p>
			<p class="text-muted">Posted by <?php the_author(); ?> on <?php the_time('F j, Y g:i a'); ?></p>
		<?php endwhile; ?>
	</div>
</div>
<?php get_footer(); ?>