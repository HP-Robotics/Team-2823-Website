<?php if ( is_paged() ) { ?>
<div id="nav-above" class="navigation">
<div class="nav-previous"><?php next_posts_link(sprintf(__( '%s older articles', 'blankslate' ),'<span class="meta-nav">&larr;</span>')) ?></div>
<div class="nav-next"><?php previous_posts_link(sprintf(__( 'newer articles %s', 'blankslate' ),'<span class="meta-nav">&rarr;</span>')) ?></div>
</div>
<?php } ?>