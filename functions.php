<?php
function theme_files() {
    wp_enqueue_style('main-styles', get_theme_file_uri('/dist/styles.css'));
    wp_enqueue_script('main-scripts', get_theme_file_uri('/dist/scripts.js'), NULL, '1.0', true);
}
add_action('wp_enqueue_scripts', 'theme_files');
?>