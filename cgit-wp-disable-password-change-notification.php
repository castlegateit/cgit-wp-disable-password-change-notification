<?php

/*
 * Plugin Name: Castlegate WP Disable Admin Password Change Notifications
 * Plugin URI: https://github.com/castlegateit/cgit-wp-disable-password-change-notification
 * GitHub Plugin URI: https://github.com/castlegateit/cgit-wp-disable-password-change-notification
 * Description: Prevents the admin email address from receiving user password change notifications.
 * Author: Castlegate
 * Author URI: https://www.castlegateit.co.uk
 * Version: 1.0.0
 * Network: True
 * License: GPLv3
 * Requires PHP: 5.6
 */

if (!function_exists('wp_password_change_notification')) {
    function wp_password_change_notification($user) {
        return;
    }
}
