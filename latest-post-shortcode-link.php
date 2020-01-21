<?php
/*
   Plugin Name: Latest Post Link Shortcode
   Plugin URI: http://wordpress.org/extend/plugins/latest-post-link-shortcode/
   Version: 1.0
   Author: Sommie Njoku
   Description: This plugin creates a shortcode for you to turn your last WordPress post into a link.
   Text Domain: latest-post-link-shortcode
   License: GPLv3
*/

add_shortcode( 'latestposturl', 'shortcode_latestposturl' );
 
function shortcode_latestposturl() {
 
    // Get the latest post
    $latestpost = get_posts( array(
        'numberposts' => 1,
    ) );
 
    if ( empty( $latestpost ) )
        return '#';
 
    return get_permalink( $latestpost[0]->ID );
}

