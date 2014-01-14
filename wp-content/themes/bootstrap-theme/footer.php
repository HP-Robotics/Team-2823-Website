<?php echo file_get_contents('footer.shtml'); ?>
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