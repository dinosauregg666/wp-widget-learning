<?php
/**
 * Plugin Name: WIDGET LEARNING
 */

if (!defined('ABSPATH')) {
    exit;
}

require_once(plugin_dir_path(__FILE__) . 'includes/script.php');
require_once(plugin_dir_path(__FILE__) . 'includes/class.php');


function register_my_custom_widget() {
    register_widget('My_Custom_Widget');
}

add_action('widgets_init', 'register_my_custom_widget');