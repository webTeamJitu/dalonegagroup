<?php

add_filter('wpcf7_autop_or_not', '__return_false');

/**
 * Enqueue stylesheets
 */
function load_stylesheets() {
    // Core CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', [], '5.0.0', 'all');
    wp_enqueue_style('font', get_template_directory_uri() . '/css/fonts.css', [], null, 'all');
    // wp_enqueue_style('flaticon', get_template_directory_uri() . '/font/flaticon.css', [], null, 'all');
    wp_enqueue_style('styles', get_template_directory_uri() . '/css/style.css', [], null, 'all');
    wp_enqueue_style('magnific', get_template_directory_uri() . '/css/style-magnific-popup.css', [], null, 'all');
    wp_enqueue_style('stroke', get_template_directory_uri() . '/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css', [], null, 'all');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/revolution/fonts/font-awesome/css/font-awesome.min.css', [], null, 'all');
    
    // glax stylesheets
    wp_enqueue_style('glaxbasestyle', get_template_directory_uri() . '/assets/css22/base.css', [], null, 'all');
    wp_enqueue_style('glaxpluginstyle', get_template_directory_uri() . '/assets/css22/plugins.css', [], null, 'all');
    wp_enqueue_style('glaxskeletonstyle', get_template_directory_uri() . '/assets/css22/skeleton.css', [], null, 'all');
    wp_enqueue_style('glaxfontelostyle', get_template_directory_uri() . '/assets/css22/fontello.css', [], null, 'all');
    wp_enqueue_style('glaxstyles', get_template_directory_uri() . '/assets/css22/style.css', [], null, 'all');
    
    // Google Fonts
    wp_enqueue_style('gfont', 'https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap', [], null);
    wp_enqueue_style('gfontRoboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap', [], null);
    wp_enqueue_style('gfontOpenSans', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap', [], null);
    wp_enqueue_style('gfontOleo', 'https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap', [], null);
    wp_enqueue_style('gfontLobster', 'https://fonts.googleapis.com/css2?family=Lobster&display=swap', [], null);
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

/**
 * Enqueue scripts
 */
function addjs() {

    // Bootstrap
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery'], null, true);

    // Other scripts
    wp_enqueue_script('scrollTo', get_template_directory_uri() . '/js/jquery.scrollTo-min.js', ['jquery'], null, true);
    wp_enqueue_script('magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', ['jquery'], null, true);
    // wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js', ['jquery'], null, true);
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', ['jquery'], null, true);

    // glax scripts
    wp_enqueue_script('glaxmodernizrjs', get_template_directory_uri() . '/assets/js/modernizr.custom.js', [], true);
    wp_enqueue_script('glaxpluginsjs', get_template_directory_uri() . '/assets/js/plugins.js', ['jquery'], true);
    wp_enqueue_script('glaxinitjs', get_template_directory_uri() . '/assets/js/init.js', ['jquery'], true);
}

add_action('wp_enqueue_scripts', 'addjs');

/**
 * Register Navigation Menus
 */
function register_my_menus() {
    register_nav_menus([
        'top-menu' => __('Top Menu'),
        'footer-menu' => __('Footer Menu'),
        'header_menu' => __('Header Menu')
    ]);
}
add_action('init', 'register_my_menus');

/**
 * Register Custom Navigation Walker
 */
function register_navwalker() {
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

/**
 * Check if wp-bootstrap-navwalker is present before including it
 */
if (file_exists(get_template_directory() . '/wp-bootstrap-navwalker.php')) {
    require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
} else {
    return new WP_Error('wp-bootstrap-navwalker-missing', __('It appears the wp-bootstrap-navwalker.php file is missing.', 'wp-bootstrap-navwalker'));
}

if(!function_exists('load_my_script')){
  function load_my_script() {
      global $post;
      $deps = array('jquery');
      $version= '1.0';
      $in_footer = true;
      wp_enqueue_script('my-script', get_stylesheet_directory_uri() . '/assets/js/my-script.js', $deps, $version, $in_footer);
      wp_localize_script('my-script', 'my_script_vars', array(
              'postID' => $post->ID
          )
      );
      echo 'localized';
  }
}

add_action('wp_enqueue_scripts', 'load_my_script');
