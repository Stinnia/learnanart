<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'hestia-style' for the Hestia theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );



add_action('wp_enqueue_script', 'custom_child-script');
?>

<?php
add_filter( 'ninja_forms_i18n_front_end', 'my_custom_ninja_forms_i18n_front_end' );
function my_custom_ninja_forms_i18n_front_end( $strings ) {
    $strings['fieldsMarkedRequired'] = 'Alle felter med * skal udfyldes';
    return $strings;
}