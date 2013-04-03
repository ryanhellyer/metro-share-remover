<?php

/*
Plugin Name: Metro Share Remover
Plugin URI: http://geek.ryanhellyer.net/products/metro-share-remover/
Description: Removes the Metro Share sharing icons from WordPress content
Version: 0.1
Author: Ryan Hellyer
Author URI: http://geek.ryanhellyer.net/
*/


/*
 * Remove the sharing icons from the_content()
 *
 * @since 0.1
 * @author Ryan Hellyer <ryan@metronet.no>
 */
function metroshare_remove_from_the_content() {
	global $metro_share;
	remove_filter( 'the_content', array( $metro_share, 'show_the_content' ) );
}
add_action( 'init', 'metroshare_remove_from_the_content' );
