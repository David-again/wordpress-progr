<!-- Here we load the stylesheet
    see line "wp_enqueue_style()" 
    To load javascript, it would be "wp_enqueue_script()"
-->

<?php

    function university_files(){
        wp_enqueue_style('university_main_styles', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'university_files');

?>