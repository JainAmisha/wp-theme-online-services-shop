<?php
//Online Services Shop Theme URL
define("OSS_THEME_URL", get_template_directory_uri());
define("OSS_THEME_DIR", get_template_directory());

require OSS_THEME_DIR.'/inc/default.php';
require OSS_THEME_DIR.'/inc/customizer-settings.php';
require OSS_THEME_DIR.'/inc/customizer.php';


add_action('wp_enqueue_scripts', 'online_services_shop_files');
add_action('after_setup_theme', 'online_services_shop_features');


function online_services_shop_files(){
    wp_enqueue_style('online_services_shop_google_fonts', '//fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
    wp_enqueue_style('online_services_shop_bootstrap', OSS_THEME_URL.'/assets/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('online_services_shop_main_styles', OSS_THEME_URL.'/assets/css/style.css');
    wp_enqueue_style('online_services_shop_fontawesome', OSS_THEME_URL.'/assets/css/fontawesome.css');
    wp_enqueue_style('online_services_shop_owl', OSS_THEME_URL.'/assets/css/owl.css');
    wp_enqueue_style('online_services_shop_animated', OSS_THEME_URL.'/assets/css/animated.css');
    wp_enqueue_style('online_services_shop_custom', OSS_THEME_URL.'/assets/css/custom.css');


    wp_enqueue_script('online-services-shop-bootstrap-js', OSS_THEME_URL.'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('online-services-shop-owl-js', OSS_THEME_URL.'/assets/js/owl-carousel.js', array('jquery'), '1.0', true);
    wp_enqueue_script('online-services-shop-animation-js', OSS_THEME_URL.'/assets/js/animation.js', array('jquery'), '1.0', true);
    wp_enqueue_script('online-services-shop-imagesloaded-js', OSS_THEME_URL.'/assets/js/imagesloaded.js', array('jquery'), '1.0', true);
    wp_enqueue_script('online-services-shop-main-js', OSS_THEME_URL.'/assets/js/main.js', array('jquery'), '1.0', true);
    wp_enqueue_script('online-services-shop-sweetalert2-js', '//cdn.jsdelivr.net/npm/sweetalert2@11', array('jquery'), '1.0', true);
    wp_enqueue_script('online-services-shop-custom-js', OSS_THEME_URL.'/assets/js/custom.js', array('jquery'), '1.0', true);
}


function online_services_shop_features() {
   // Add Theme support Title Tag
	add_theme_support( 'title-tag' );

	// Logo
	add_theme_support( 'custom-logo', array(
		'width'       => 100,
		'height'      => 100,
		// 'flex-width'  => true,
		// 'flex-height'  => true,
	));

    // add_theme_support( 'custom-header' );
    // add_image_size('ossLogo', 100, 100, true);

    // Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
    
    add_theme_support('post-thumbnails');

}