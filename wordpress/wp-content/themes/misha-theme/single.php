<?php get_header(); ?>
<div clas="container">
  <div id="content">
      <div class="row">
        <div class="container">
<div class="container">
        <article id="content">
          <?php get_template_part( 'nav', 'above-single' ); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'entry' ); ?>
<p class="text-center"><a href="http://www.mishastechcorner.org/2823/news">Back to News</a</p>
          <?php comments_template('', true); ?>
          <?php endwhile; endif; ?>
          <?php get_template_part( 'nav', 'below-single' ); ?>
        </article>
</div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>