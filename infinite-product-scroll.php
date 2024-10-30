<?php
/**
 * Plugin Name: Infinite Product Scroll For WooCommerce
 * Plugin URI: https://wordpress.org/plugins/infinite-product-scroll
 * Text Domain: infinite-product-scroll
 * Description: Display infinite products on product listing pages without Pagination. 
 * Domain Path: /languages/
 * Version: 1.0
 * Author: Rajdip Sinha Roy
 * Author URI: https://rajdip.tech
 * Developer: Rajdip Sinha Roy
 * Developer URI: https://rajdip.tech
 * WC requires at least: 3.0.0
 * WC tested up to: 4.2.2
*/



if (! defined('ABSPATH')) {
    exit;
}


/**
 * Change number of products to infinite that are displayed per page (shop page)
 */

add_filter( 'loop_shop_per_page', 'rj_loop_shop_per_page', 20 );

function rj_loop_shop_per_page( $cols ) {
  $cols = 1000000000000000000000000000000;
  return $cols;
}