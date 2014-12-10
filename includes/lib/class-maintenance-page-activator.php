<?php

/**
 * Fired during plugin activation
 *
 * @since      1.0
 *
 * @package    Maintenance_Page
 * @subpackage Maintenance-Page/includes/lib
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Maintenance_Page
 * @subpackage Maintenance-Page/includes
 * @author     ThemeGrill <themegrill@gmail.com>
 */
class Maintenance_Page_Activator {

	/**
	 * creates database table on activation
	 *
	 * @global WPDB $wpdb
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		global $wpdb;

		//Create database table if not exists
    	$query = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}maintenance_page (
                    `id` bigint(20) NOT NULL AUTO_INCREMENT,
                    `email` varchar(50) NOT NULL UNIQUE,
                    `insert_date` datetime NOT NULL,
                    PRIMARY KEY (`id`)
                  ) DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";

		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($query);
	}
}