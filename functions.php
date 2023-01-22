<?php
function theme_files() {
    wp_enqueue_style('main-styles', get_theme_file_uri('/dist/styles.css'));

    wp_register_script( 'gsap', '//cdn.letgroup.com/shared/scripts/gsap-scrolltrigger-3.6.0.js', null, null, true );
    wp_enqueue_script('gsap');

    wp_enqueue_script('main-scripts', get_theme_file_uri('/dist/scripts.js'), NULL, '1.0', true);
}
add_action('wp_enqueue_scripts', 'theme_files');
?>