<footer class="ep-container ep-padding-32 ep-dark-brass ep-center">
<div class="ep-row">
        <div class="ep-container ep-third ep-mobile">
            <?php dynamic_sidebar('footer-left-widgets'); ?>
        </div>
        <div class="ep-container ep-third ep-mobile">
            <?php dynamic_sidebar('footer-centre-widgets'); ?>
        </div>
        <div class="ep-container ep-third ep-mobile">
            <?php dynamic_sidebar('footer-right-widgets'); ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<!-- Toggle the menu open and closed on small screens -->
<script>
    function openNav()
    {
        var x = document.getElementById("smallNav");
        if (x.className.indexOf("ep-show") == -1)
        {
            x.className += " ep-show";
        }
        else
        {
            x.className = x.className.replace(" ep-show", "");
        }
    }
</script>

</body>

</html>
