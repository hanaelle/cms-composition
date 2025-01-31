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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hamilton-7-composition' );

/** Database username */
define( 'DB_USER', 'composition-admin' );

/** Database password */
define( 'DB_PASSWORD', 'sK,S%?(hG3OcM6xlAi79' );

/** Database hostname */
define( 'DB_HOST', '188.166.24.55' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}


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
define( 'AUTH_KEY',         'gIye24OOm03Iu8H9s76EWViJudQyK0urAw6DPw19mF5QLA79rFyVjW1sjffCa9fn' );
define( 'SECURE_AUTH_KEY',  'qD5wJ7Wt7OqSm3kejVK8MYHQebJdEOrNOS8SfZTZjiaurl4Dfeaf5CbWw1CcvEa0' );
define( 'LOGGED_IN_KEY',    'hIpyCgFdvgVSEAehInyv9aEUbRVGCadpN72wetJHIBxxywBOKybySWZxa39P613D' );
define( 'NONCE_KEY',        'oXeHw27r8CxQY5o0En7eGsSjBzfbBqPjcuEIR4ejEwB3pKO5FpvVOUNjTWgQ35b0' );
define( 'AUTH_SALT',        'vGiiAmzRXkaBqmabE6lzdEwdSlFhbpWItBcu14B15G9EQ4mdFwI2U98KuqKM8d9G' );
define( 'SECURE_AUTH_SALT', 'tqdQM1JfrowNRKzPB7fW6sjwts3tr8iCsamEC9GBe8B0CSimUG4DO7zKyFfIx5sm' );
define( 'LOGGED_IN_SALT',   'nwrfbldcP07MKIwdEj3zGwV8KjPvMpj5BK8MrjmXoQ1uzauhh07hUkE484x4BtZN' );
define( 'NONCE_SALT',       'Vo4oG0sncHd7RgXOT2lth3ovuV688vh8NWBdB4zgnLm1f7XdkUviBn7Mi1l9aEy8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
