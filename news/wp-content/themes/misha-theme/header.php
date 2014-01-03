<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="favicon.png">
<title>Team 2823 - News</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link href="../../../../custom.css" rel="stylesheet">
<link href="../../../../css/bootstrap.css" rel="stylesheet">
<link href="../../../../css/bootstrap-theme.min.css" rel="stylesheet">
<link href="../../../../css/animate.css" rel="stylesheet">
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-46265245-1', 'highland-2823.com');
ga('send', 'pageview');
</script>
<?php wp_head(); ?>
    
</head>
<body <?php body_class(); ?>>
<header data-headroom data-tolerance="5" data-offset="205" data-classes='{"initial":"animated","pinned":"slideDown","unpinned":"slideUp"}'></header>
<div class="navbar-inverse navbar navbar-fixed-top navbar1 animated slideInDown" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<a class="navbar-brand" href="http://www.highland-2823.com/index.html">Team 2823</a> </div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="../../../../Team.html"><span class="glyphicon glyphicon-user"></span> Team</a></li>
                        <li><a href="../../../../Robot.html"><span class="glyphicon glyphicon-wrench"></span> The Robot</a></li>
                        <li><a href="../../../../Sponsors.html"><span class="glyphicon glyphicon-thumbs-up"></span> Sponsors</a></li>
					</ul>
				</li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Media <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="../../../../Photos.html"><span class="glyphicon glyphicon-picture"></span> Photos</a></li>
                        <li class="active"><a href="#"><span class="glyphicon glyphicon-comment"></span> News</a></li>
                        <li><a href="../../../../Calendar.html"><span class="glyphicon glyphicon-calendar"></span> Calendar</a></li>
					</ul>
				</li>
				<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="../../../../Resources/Programming.html">Programming</a></li>
						<li><a href="../../../../Resources/Business.html">Business</a></li>
						<li><a href="../../../../Resources/CAD.html">CAD</a></li>
						<li><a href="../../../../Resources/Building.html">Building</a></li>
						<li><a href="../../../../Resources/Scouting.html">Scouting</a></li>
						<li class="divider"></li>
						<li><a href="../../../../Resources/Other.html">For Other Teams</a></li>
					</ul>
				</li>
				<li><a href="../../../../FIRST.html">FIRST</a></li>
				<li><a href="../../../../Contact.html">Contact</a></li>
			</ul>
		</div>
	</div>
</div>
<script>
(function() {
var header = new Headroom(document.querySelector("#header"), {
tolerance: 5,
offset : 205,
classes: {
initial: "animated",
pinned: "slideDown",
unpinned: "slideUp"
}
});
header.init();
var bttHeadroom = new Headroom(document.getElementById("btt"), {
tolerance : 0,
offset : 500,
classes : {
initial : "slide",
pinned : "slide--reset",
unpinned : "slide--down"
}
});
bttHeadroom.init();
}());
</script> 
<script src="https://code.jquery.com/jquery.js"></script> 
<script src="../../../../js/bootstrap.js"></script> 
<script src="../../../../js/headroom.js"></script> 
<script src="../../../../js/holder.js"></script> 
<script>
$("header").headroom();
</script>
