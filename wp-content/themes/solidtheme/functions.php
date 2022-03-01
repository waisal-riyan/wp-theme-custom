<!-- 
this file has special meaning in wordpress because in your functions.php file is where you can override and initiate different features of your theme inside of wordpress so your functions.php file is goind to be raw php code typically to override and change the way wordpress works fundamentally

file ini memiliki arti khusus di wordpress karena di file functions.php Anda adalah tempat Anda dapat mengganti dan memulai berbagai fitur tema Anda di dalam wordpress sehingga file functions.php Anda akan menjadi kode php mentah biasanya untuk menimpa dan mengubah cara wordpress bekerja secara fundamental

 -->

<?php

function solidtheme_theme_support()
{
    // adds dynamic title tag support
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'solidtheme_theme_support');

function solidtheme_menus()
{
    $location = array(
        'primary' => 'Desktop Primary Footer'
    );
    register_nav_menus($location);
}

add_action('init', 'solidtheme_menus');


function solidtheme_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('solidtheme-style', get_template_directory_uri() . '/style.css', array(), $version, 'all');
    wp_enqueue_style('solidtheme-font', 'https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600', array(), false, 'all');
}
add_action('wp_enqueue_scripts', 'solidtheme_register_styles');


function solidtheme_register_scripts()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('solidtheme-anime', 'https://unpkg.com/animejs@3.0.1/lib/anime.min.js', array(), '3.0.1', false);
    wp_enqueue_script('solidtheme-main', get_template_directory_uri() . '/assets/js/main.min.js', array(), $version, true);
    wp_enqueue_script('solidtheme-scrollreveal', 'https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js', array(), '4.0.0', false);
}

add_action('wp_enqueue_scripts', 'solidtheme_register_scripts');

?>