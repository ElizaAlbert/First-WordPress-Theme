<?php 
/* REGISTRERAR STÖD FÖR TEMAN OCH MENY. ADD_ACTION LÄGGER TILL EN TILL MENY */
add_theme_support('post-thumbnails');
add_theme_support('menus');

function register_my_menu(){
    register_nav_menu('huvudmeny', 'Huvudmeny');
        register_nav_menu('meny2', 'Meny2');

}

add_action('after_setup_theme', 'register_my_menu');

/* FÅR CSS OCH JAVASCRIPT FILERNA ATT FUNGERA */
function qg_enqueue() {
    wp_enqueue_script('banan', get_template_directory_uri().'/js/script.js', '', '', true);
    wp_enqueue_script('banan2', get_template_directory_uri().'/js/jquery.js', '', '', '');
    wp_enqueue_script('banan3', get_template_directory_uri().'/js/owl.carousel.js', '', '', '');
}
add_action('wp_enqueue_scripts', 'qg_enqueue');
acf_add_options_page('Footer');