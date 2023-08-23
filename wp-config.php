<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         '1CRenmsW6bksU1BK2phpiKn1tRuiPs7/wYnro7+8DPi0llGEl08LBWXMXcaZkIYERvP/fGCS/F7HoBq9cGr3iw==');
define('SECURE_AUTH_KEY',  'FQXzdubuoqE9Bu2EyfllrPo88nUAcXRxwGyR5TlvSMKd7w7bpFsAAKFSlUbmDD5oXsO2sF7aS8RB9hMQVxw5Rg==');
define('LOGGED_IN_KEY',    'Yvsb2hiWyalOP9fsWwbbWeurk+jM6KgsvOuLdWHuG8vUMJvAhKEjsB6BJ5PzI92x9WiErmiemVJDzQBiO6i81g==');
define('NONCE_KEY',        'aT9SP1lGZHo5qA1ESAm17i9mL4bYtf4Tp8AFxk3YVELRvMHzuizONZUzxJ/CfHe9ZR2BuXeT+tlRMugR8mFqcw==');
define('AUTH_SALT',        'unOxddRcIxqCuKrTPr36ZvQZSMa/PHdI6BTG3OHJxsHGx+I/wKISr+voOu8KyZOOZgwD/Bhkm16yg3f4AAV9ZA==');
define('SECURE_AUTH_SALT', 'qGcq5p8aHIBIpNiclwF74AFUJxi/6G+skrAUxKIUHFyLgTJ1pGkqcn4vad/i9QchSJVTZTIgCjKUKXYA9libZg==');
define('LOGGED_IN_SALT',   'weJAH3P94ILzn1P5QPeIGi+bR+CfMPNEAEg9u+f1cvwBsUQdjwrCnJJDPw3H6oSI0lEoqZ0H3cg4yFhydxj9Lg==');
define('NONCE_SALT',       'gXqyaNCwekB0pfA6o6CgTzDjS6Sk8p2YCjwp6TOvCRU0/sOGeaZrAVN1q7wgStPESLdji9UwhbY+/almJxSn0w==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
