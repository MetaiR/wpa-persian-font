<?php
/*
Plugin Name: فونت فارسی پنل مدیریت وردپرس
Description: یک افزونه‌ی بسیار ساده جهت بومی‌سازی پنل مدیریت وب‌سایت‌های وردپرسی
Author: Alireza Barani
Author URI: https://github.com/alireza1219
Version: 0.1
*/

if ( !defined('ABSPATH') ) {
    exit;
}

$data = plugin_dir_url(__FILE__) . 'assets/css/fonts.css';
define('CSS_DIR', $data);

// WP-ADMIN Section
function wpa_persian_font() {
    echo '<link href="', CSS_DIR ,'" rel="stylesheet" type="text/css">' . PHP_EOL;
    echo '<style>body, #wpadminbar *:not([class="ab-icon"]), .wp-core-ui, .media-menu, .media-frame *, .media-modal *{font-family: Vazir, Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif !important;}</style>' . PHP_EOL;
    echo '<style>h1,h2,h3,h4,h5,h6{font-family: Vazir, Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif !important;}' . PHP_EOL;
}

add_action( 'admin_head', 'wpa_persian_font' );

// Top-bar Section
function wpa_persian_font_toolbar() {
    if(current_user_can('administrator')) {
        echo '<link href="', CSS_DIR ,'" rel="stylesheet" type="text/css">' . PHP_EOL;
        echo '<style>#wpadminbar *:not([class="ab-icon"]){font-family: Vazir, Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif !important;}</style>' . PHP_EOL;
    }
}

add_action( 'wp_head', 'wpa_persian_font_toolbar' );

// WP-LOGIN Section
function wpa_persian_font_lp() {
    if(stripos($_SERVER["SCRIPT_NAME"], strrchr(wp_login_url(), '/')) !== false) {
        echo '<link href="', CSS_DIR ,'" rel="stylesheet" type="text/css">' . PHP_EOL;
        echo '<style>body{font-family: Vazir, Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif !important;}</style>' . PHP_EOL;
    }
}

add_action( 'login_head', 'wpa_persian_font_lp' );
?>
