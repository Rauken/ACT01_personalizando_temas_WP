<?php

//Registro de archivos

function register_enqueue_style(){
    $theme_data = wp_get_theme();

    //Registrando estilos
    wp_register_style('Google Fonts', 
    'https://fonts.googleapis.com/css?family=Lato', 
    null, '1.0.0', 'screen');
    
    wp_register_style('Bootstrap', 
    get_parent_theme_file_uri('/curriculum/assets/css/bootstrap.css'), 
    null, '1.0.0', 'screen');
    
    wp_register_style('Theme style', 
    get_parent_theme_file_uri('/curriculum/assets/css/master.css'), 
    null, '1.0.0', 'screen');

    wp_register_style('Resume', 
    get_parent_theme_file_uri('/curriculum/assets/css/resume.min.css'), 
    null, '1.0.0', 'screen');

    //Enqueue estilos
    wp_enqueue_style('Bootstrap');
    wp_enqueue_style('Theme style');
    wp_enqueue_style('Google Fonts');
    wp_enqueue_style('Resume');

}

add_action('wp_enqueue_scripts', 'register_enqueue_style');

//registro de scripts

function register_enqueue_scripts(){
    $theme_data = wp_get_theme();
    
    //deregister scripts
    wp_deregister_script('jQuery');
    wp_deregister_script('Bootstrap');
    wp_deregister_script('Main');

    //registrando scripts
    
    wp_register_script('jQuery', 
    get_parent_theme_file_uri('/curriculum/assets/js/jquery.js'), 
    null, '3.3.1', true);

    wp_register_script('jQuery min', 
    get_parent_theme_file_uri('/curriculum/assets/js/jquery.min.js'), 
    null, '3.2.1', true);

    wp_register_script('Bootstrap', 
    get_parent_theme_file_uri('/curriculum/assets/js/bootstrap.min.js'), 
    null, '3.2.1', true);

    wp_register_script('Main', 
    get_parent_theme_file_uri('/curriculum/assets/js/main.js'), 
    null, '3.2.1', true);

    wp_register_script('Resume', 
    get_parent_theme_file_uri('/curriculum/assets/js/resume.min.js'), 
    null, '3.2.1', true);

    //Enqueue scripts
    wp_enqueue_script('jQuery');
    wp_enqueue_script('jQuery min');
    wp_enqueue_script('Bootstrap');
    wp_enqueue_script('Main');
    wp_enqueue_script('Resume');
    
}

add_action('wp_enqueue_scripts', 'register_enqueue_scripts');

//   Menus
function menus_setup() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' ),
            )
        );
    }
    add_action( 'after_setup_theme', 'menus_setup' );

?>