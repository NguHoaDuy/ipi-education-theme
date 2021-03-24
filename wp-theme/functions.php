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
            'depth' => 2, //Số cấp menu đa cấp
            'container' => 'div', //Thẻ bao quanh cặp thẻ ul
            'container_class'=>'collapse navbar-collapse navbar-ex1-collapse', //class của thẻ bao quanh cặp thẻ ul
            'menu_class' => 'nav navbar-nav', //class của thẻ ul
            'walker' => new wp_bootstrap_navwalker());//Cái này để nguyên, không thay đổi
        
        wp_nav_menu($menu);
    }
}