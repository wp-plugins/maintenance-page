<?php

/**
 * Fired when the plugin is uninstalled.
 *
 * @link       http://themegrill.com
 * @since      1.0.0
 *
 * @package    Maintenance_Page
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

//drop custom table created during plugin activation
global $wpdb;
$wpdb->query( "DROP TABLE IF EXISTS {$wpdb->prefix}maintenance_page" );

/** Delete all the Plugin Options */
delete_option( 'mp_basics' );
delete_option( 'mp_social' );
delete_option( 'mp_subscribe' );