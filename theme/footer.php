	<hr>

<div id="footer">
    <div class = "container">
      <p class="text-muted credit pull-left">&copy;The Automatons 2013</p>
      <p class="text-muted credit pull-right"><a href="http://www.highland-2823.com/news/wp-admin">Login</a></p>
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
    <script src="http://www.highland-2823/js/bootstrap.js"></script>
    <script src="http://www.highland-2823/js/headroom.js"></script>
    <script src="http://www.highland-2823/js/holder.js"></script>
      <script>
      $("header").headroom();
          </script>

<?php wp_footer(); ?>
</body>
</html>