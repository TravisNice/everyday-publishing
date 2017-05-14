<?php wp_footer(); ?>

<script>
	// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
	var x = document.getElementById("smallNav");
	if (x.className.indexOf("ep-show") == -1) {
		x.className += " ep-show";
	} else {
		x.className = x.className.replace(" ep-show", "");
	}
}
</script>

</body>

</html>
