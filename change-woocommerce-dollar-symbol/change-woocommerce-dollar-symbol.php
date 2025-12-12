<?php
/*
Plugin Name: Change WooCommerce Dollar Symbol
Description: Simple plugin to change the default WooCommerce dollar symbol to U$
Version: 1.0
Author: Creativo Multimedia
Author URI: https://creativo.com.uy
*/

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Change the default US dollar symbol.
add_filter('woocommerce_currency_symbol', 'change_us_dollar_symbol', 10, 2);

function change_us_dollar_symbol($currency_symbol, $currency ) {
    if ($currency == 'USD') {
        $currency_symbol = 'U$';
    }
    return $currency_symbol;
}