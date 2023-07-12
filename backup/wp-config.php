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
define( 'DB_NAME', 'votkzqoq_wp_5h71l' );

/** Database username */
define( 'DB_USER', 'votkzqoq_wp_vpm1f' );

/** Database password */
define( 'DB_PASSWORD', 'uRYsrd93ln26A%4&' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 's3M[_F90De25Z8/*1]OE94[@998X4j9SRJb)XMi4v+FdVKvCg56daE[GA3XMh;CO');
define('SECURE_AUTH_KEY', '6m%5_1v0RVl90Qr(wr4q3wAW;aLEIH3AWz;2[mb0;LHq+&g:+iUqs[894WH_1z78');
define('LOGGED_IN_KEY', 'O*14&XgOTTOX_uk*mkh_e93xz2/#C:g|!V82Kg@uo8D*6OlwMr3[|A|f%3[TdOH8');
define('NONCE_KEY', 'TwR0pyDfKe%6|l%h:Qm+l1!yw3qI67209~b1M02x*eXQx1k3t8!@39v6Y4;om3y@');
define('AUTH_SALT', '8K-VD7#-6:0W67v|SU1cl7N5X-)C01(S#u*F42y3GI]_Dkg+kN*-U#p;#*:EOq7:');
define('SECURE_AUTH_SALT', 'aj!1K90XVB6k:+lGWM@bsqX6Qa/];7fbpP]C31--T9/l-V76DVCgTZ0)_8cMUSfR');
define('LOGGED_IN_SALT', ')#b1a~sxHfvgar(3b303+w8by_j89+9eLxW_y7Lgi4)ag5[x+4#i(#W;D]up0f0_');
define('NONCE_SALT', '!1bl@3n4uTn9)AmE34p%l0L1-23H]zPU(Q;2LxJ6k]L7*k0u7]X0eOp8e+32UO44');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
