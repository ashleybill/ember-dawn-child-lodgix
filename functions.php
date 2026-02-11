<?php
// Enqueue parent theme styles
add_action('wp_enqueue_scripts', 'ember_dawn_child_enqueue_styles');
function ember_dawn_child_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
