<?php

function add_scripts() {
    wp_enqueue_style('my-main-style', plugins_url('css/style.css', __FILE__));
    wp_enqueue_script('my-main-script', plugins_url('js/main.js', __FILE__), array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'add_scripts');



