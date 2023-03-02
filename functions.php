<?php
function theme_files() {
    wp_enqueue_style('main-styles', get_theme_file_uri('/dist/styles.css'));

    // wp_enqueue_script('main-scripts', get_theme_file_uri('/dist/scripts.js'), NULL, '1.0', true);
    wp_enqueue_script('gsap-scripts', get_theme_file_uri('/dist/gsap-scrolltrigger-3.6.0.js'), NULL, '1.0', true);
}
add_action('wp_enqueue_scripts', 'theme_files');




// scripts.js with type="module" attribute
function enqueue_module_script() {
    wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/dist/scripts.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_module_script' );

function set_module_script_type( $tag, $handle ) {
    if ( 'main-scripts' === $handle ) {
        $tag = str_replace( 'type=\'text/javascript\'', 'type=\'module\'', $tag );
    }
    return $tag;
}
add_filter( 'script_loader_tag', 'set_module_script_type', 10, 2 );




// load inline SVG images
// credit: https://enshrined.co.uk/2018/09/19/how-to-properly-include-inline-svgs-in-a-wordpress-theme/
function load_inline_svg( $filename ) {
    // Add the path to your SVG directory inside your theme.
    $svg_path = '/assets/';
 
    // Check the SVG file exists
    if ( file_exists( get_stylesheet_directory() . $svg_path . $filename ) ) {
        // Load and return the contents of the file
        echo file_get_contents( get_stylesheet_directory_uri() . $svg_path . $filename );
    }
 
    // Return a blank string if we can't find the file.
    return '';
}

?>