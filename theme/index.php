<?php get_header(); ?>
  <div class="container">
  <div id="content">
      <div class="row">
<div class="container">
        <div class="jumbotron">
          <h1>News</h1>
          <p>Check back here for updates concerning the team!</p>
        </div>
</div>
      </div>
    <div class="container">
      <div class="row">
        <article id="content">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'entry' ); ?>
          <?php comments_template('', true); ?>
          <?php endwhile; endif; ?>
          <?php get_template_part( 'nav', 'below-single' ); ?>
        </article>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
