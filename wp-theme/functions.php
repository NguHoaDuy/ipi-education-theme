<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage ipi-education
 * @since ipi ipi-edu-001
 */

// Khai bao constant
define('THEME_URL', get_stylesheet_directory());
define('CORE', THEME_URL . '/core');

// Embed core.php
require_once(CORE . '/init.php');
require_once(THEME_URL . '/class-wp-bootstrap-navwalker.php');

// thiet lap chieu rong noi dung
if (!isset($content_width)) {
    $content_width = 620;
}

// dang ki css
if( !function_exists('ipi_register_styles') ) {
    function ipi_register_styles() {
        wp_enqueue_style('ipi-style', get_template_directory_uri() . "/style.css", array('ipi-bootstrap'), '1.0', 'all');
        wp_enqueue_style('ipi-style1', get_template_directory_uri() . "/assets/css/style_tmp.css", array('ipi-style'), '1.0', 'all');
        wp_enqueue_style('ipi-style2', get_template_directory_uri() . "/assets/css/tintuc.css", array('ipi-style1'), '1.0', 'all');
        wp_enqueue_style('ipi-style3', get_template_directory_uri() . "/assets/css/flickity.css", array('ipi-style2'), '1.0', 'all');
        wp_enqueue_style('ipi-bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css", array(), '4.5.0', 'all');
        wp_enqueue_style('ipi-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" , array(), '5.13.0', 'all');
    }
}

add_action('wp_enqueue_scripts', 'ipi_register_styles');
// Dang ki script
if( !function_exists('ipi_register_scripts') ) {
    function ipi_register_scripts() {
        wp_enqueue_script('ipi-js', get_template_directory_uri() . "/assets/js/flickity.pkgd.min.js", array('ipi-bootstrap'), '1.0', true);
        wp_enqueue_script('ipi-jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" , array(), '3.5.1', true);
        wp_enqueue_script('ipi-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js', array('ipi-jquery'), '1.16.0', true);
        wp_enqueue_script('ipi-bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js", array('ipi-popper'), '4.5.0', true);
    }
}

add_action('wp_enqueue_scripts', 'ipi_register_scripts');

// chuc nang trong theme, menu

if (!function_exists('ipi_theme_setup')) {
    function ipi_theme_setup()
    {
        /**
         * Thiet lap text domain
         */
        $language_folder = THEME_URL . '/languages';
        load_theme_textdomain('ipieducation', $language_folder);

        /**
         * auto them link rss
         */
        add_theme_support('automatic-feed-links');

        /**
         * THem post thumbnail
         */
        add_theme_support('post-thumbnails');

        /**
         * post format
         */
        add_theme_support('post-formats', array('image', 'video', 'quote', 'gallery'));

        /**
         * Them title tag
         */
        add_theme_support('title-tag');

        /**
         * Them custom background
         */
        add_theme_support('custom-background');

        /**
         * them menu
         */
        register_nav_menu('primary-menu', __('Primary Menu', 'ipieducation'));
    }
    add_action('init', 'ipi_theme_setup');
}


/**
 * Template function
 */


if (!function_exists('ipi_menu')) {
    function ipi_menu($menu)
    {
        $menu = array(
            'theme_location' => $menu, //Menu location của bạn
            'depth' => 3, //Số cấp menu đa cấp
            'container' => 'div', //Thẻ bao quanh cặp thẻ ul
            'container_class'=>'collapse navbar-collapse navbar-ex1-collapse', //class của thẻ bao quanh cặp thẻ ul
            'menu_class' => 'nav navbar-nav', //class của thẻ ul
            'walker' => new wp_bootstrap_navwalker());//Cái này để nguyên, không thay đổi
        
        wp_nav_menu($menu);
    }
}