<?php
        if (is_active_sidebar('ep-aside-widgets'))
        {
            echo '<aside>';
            dynamic_sidebar('ep-aside-widgets');
            echo '</aside>';
        }
