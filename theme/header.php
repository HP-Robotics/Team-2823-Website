<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Misha Prasolov">
    <link rel="shortcut icon" href="../favicon.png">
    <title>Team 2823 - News</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Team 2823</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
              <li><a href="../index.html"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
              <li><a href="../FIRST.html">FIRST</a></li>
              <li class="active"><a href="../news">News</a></li>
              <li><a href="../Team.html">Team</a></li>
              <li><a href="../Sponsors.html">Sponsors</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="../Resources/Programming.html">Programming</a></li>
                  <li><a href="../Resources/Business.html">Business</a></li>
                  <li><a href="../Resources/CAD.html">CAD</a></li>
                  <li><a href="../Resources/Building.html">Building</a></li>
                  <li><a href="../Resources/Scouting.html">Scouting</a></li>
                  <li class="divider"></li>
                  <li><a href="../Resources/Other.html">For Other Teams</a></li>
                </ul>
              </li>
              <li><a href="../Photos.html">Photos</a></li>
              <li><a href="../Contact.html">Contact</a></li>
            </ul>
        </div>
      </div>
    </div>
    </body>
    </html>