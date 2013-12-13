<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Minileven
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    
<?php wp_head(); ?>

<body <?php body_class(); ?>>
<div id="wrapper">
	<?php
		$location = minileven_get_menu_location(); // get the menu locations from the current theme in use
	?>
		<div class="menu-search">
			<nav id="access" class="site-navigation main-navigation" role="navigation">
				<h3 class="menu-toggle"><?php _e( 'Menu', 'jetpack' ); ?></h3>

				<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
				<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'jetpack' ); ?>"><?php _e( 'Skip to primary content', 'minileven' , 'jetpack'); ?></a></div>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */
					if ( false !== $location ) :
						$menu_id = array_shift( array_values( $location ) ); // acccess the ID of the menu assigned to that location. Using only the first menu ID returned in the array.
						wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => '', 'menu_class' => 'nav-menu', 'menu' => $menu_id ) );
					else: // if the $location variable is false, wp_page_menu() is shown instead.
						wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => '', 'menu_class' => 'nav-menu' ) );
					endif;
				?>
                <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Team 2823</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
              <li><a href="index.html"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
              <li><a href="FIRST.html"><span class="glyphicon glyphicon-globe"></span>  FIRST</a></li>
              <li class="active"><a href="#"><span class="glyphicon glyphicon-comment"></span>  News</a></li>
              <li><a href="Team.html"><span class="glyphicon glyphicon-user"></span>  Team</a></li>
              <li><a href="Sponsors.html"><span class="glyphicon glyphicon-thumbs-up"></span>  Sponsors</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources  <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="Resources/Programming.html">Programming</a></li>
                  <li><a href="Resources/Business.html">Business</a></li>
                  <li><a href="Resources/CAD.html">CAD</a></li>
                  <li><a href="Resources/Building.html">Building</a></li>
                  <li><a href="Resources/Scouting.html">Scouting</a></li>
                  <li class="divider"></li>
                  <li><a href="Resources/Other.html">For Other Teams</a></li>
                </ul>
              </li>
              <li><a href="Photos.html"><span class="glyphicon glyphicon-picture"></span>  Photos</a></li>
              <li><a href="Contact.html"><span class="glyphicon glyphicon-send"></span>  Contact</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-wrench"></span>  The Robot</a></li>
              <li><a href="Calendar.html"><span class="glyphicon glyphicon-calendar"></span>  Calendar</a></li>
            </ul>
        </div>
    </div>
			</nav><!-- #access -->
			<div class="search-form">
				<?php get_search_form(); ?>
			</div><!-- .search-form-->
		</div><!-- .menu-search-->

	<?php if ( function_exists( 'minileven_header' ) )
		minileven_header();
	?>

	<div id="page" class="hfeed">
		<div id="main">