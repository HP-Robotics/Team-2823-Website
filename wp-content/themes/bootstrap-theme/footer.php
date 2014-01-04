<hr>
<div class="container"> <a href="https://www.facebook.com/pages/The-Automatons/504175326325495"><img src="social/facebook.png" width="100" height="100"></a>
	<div style="padding-top: 20px;" id="movers-row">
		<a href="https://plus.google.com/105457037277552965514/posts"><div><img src="social/googleplus.png" width="100" height="100"></div></a>
		<a href="https://twitter.com/FRC2823"><div><img src="social/twitter.png" width="100" height="100"></div></a>
		<a href="https://www.youtube.com/user/highland2823"><div><img src="social/youtube.png" width="100" height="100"></div></a>
	</div>
</div>
<br>
<div class="container">
	<div class="row contact-footer">
		<div id="footer">
			<div class = "container">
				<p class="text-muted credit pull-left">&copy; The Automatons 2013</p>
				<p class="text-muted credit pull-right"><a href="http://www.highland-2823.com/wp-admin">Login</a></p>
			</div>
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
<script src="js/bootstrap.js"></script> 
<script src="js/headroom.js"></script> 
<script src="js/holder.js"></script> 
<script>
$("header").headroom();
</script>
<?php wp_footer(); ?>
</body>
</html>