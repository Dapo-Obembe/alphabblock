<?php 
/**
 * Plugin Name: Alpha Block
 * Plugin URI: https://github.com/Dapo-Obembe
 * Author: Dapo Obembe
 * Author URI: https://github.com/Dapo-Obembe
 * Description: Just a random block for travel itinery.
 * Version: 0.1.0
 * License: GPL2
 * License URL: https://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: travel-block
 */

 defined('ABSPATH') or die('Cheating, huh?');

 add_action( 'init', 'register_acf_blocks' );

function register_acf_blocks() {
    register_block_type( __DIR__ . './blocks/alphaweb');
}