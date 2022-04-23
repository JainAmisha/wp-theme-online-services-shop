<?php
// require get_theme_file_path('/inc/custom-settings.php');

add_action('wp_enqueue_scripts', 'online_services_shop_files');
add_action('after_setup_theme', 'online_services_shop_features');


function online_services_shop_files(){
    wp_enqueue_style('online_services_shop_google_fonts', '//fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
    wp_enqueue_style('online_services_shop_bootstrap', get_theme_file_uri('/assets/vendor/bootstrap/css/bootstrap.min.css'));
    wp_enqueue_style('online_services_shop_main_styles', get_theme_file_uri('/assets/css/style.css'));
    wp_enqueue_style('online_services_shop_fontawesome', get_theme_file_uri('/assets/css/fontawesome.css'));
    wp_enqueue_style('online_services_shop_owl', get_theme_file_uri('/assets/css/owl.css'));
    wp_enqueue_style('online_services_shop_animated', get_theme_file_uri('/assets/css/animated.css'));
    wp_enqueue_style('online_services_shop_custom', get_theme_file_uri('/assets/css/custom.css'));


    wp_enqueue_script('online-services-shop-bootstrap-js', get_theme_file_uri('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('online-services-shop-owl-js', get_theme_file_uri('/assets/js/owl-carousel.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('online-services-shop-animation-js', get_theme_file_uri('/assets/js/animation.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('online-services-shop-imagesloaded-js', get_theme_file_uri('/assets/js/imagesloaded.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('online-services-shop-main-js', get_theme_file_uri('/assets/js/main.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('online-services-shop-sweetalert2-js', '//cdn.jsdelivr.net/npm/sweetalert2@11', array('jquery'), '1.0', true);
    wp_enqueue_script('online-services-shop-custom-js', get_theme_file_uri('/assets/js/custom.js'), array('jquery'), '1.0', true);
}


function online_services_shop_features() {
    add_theme_support('title-tag');
    add_theme_support('tagline');
    add_theme_support('post-thumbnails');
}
  