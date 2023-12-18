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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'omdb' );

/** Database username */
define( 'DB_USER', 'omadmin' );

/** Database password */
define( 'DB_PASSWORD', 'MOi4wGYUPJv5u5/Q' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'm2S4p&u;,vUs+s{oO8//`/{@yKi>k|WoI@^*pKst`D-@)l*$_~mZqX!3BYm-PrNQ' );
define( 'SECURE_AUTH_KEY',  '@!.Ic4YkL6N)y9FZ-6UjrQJ K9toEyz_6rkUtBM-~(Q!E7OJn8IJ.MAw|`aX~6q%' );
define( 'LOGGED_IN_KEY',    'f*DH5fh{x9~*/+fI`^<qB_h5z_=S@34&v#Xp2LHk?EeN`r >ky@sN51*>)ryqw_[' );
define( 'NONCE_KEY',        '$zOiSZF:2aL8qS7!ONW<FCp8(e**tQJnD=7~gO-t!;}r]@Y&RTm!R/+_?fD7?35c' );
define( 'AUTH_SALT',        'fa?t8`5Em$7A_5+Stu/&@@.t!Itk/>dQZ~<3-+IRWh{Z&~(qzkRCCtM*eO3jU[We' );
define( 'SECURE_AUTH_SALT', 'y:*lNAYu ~xO289j}QRcuW LYCV}:?Q[AJFywuv5Gf-q4XvV(gs{.m7=rT$ 74nU' );
define( 'LOGGED_IN_SALT',   '_)d#,{q(a)FG 0FFqH+7;e%rd5#$kiMJw=6lkq+}Uxmo[G6Z$w9W_bIS 5yIfZ{x' );
define( 'NONCE_SALT',       'P.[k*mu+O;Jh%as3A{t6u?(}jW`Q Y7W1R!?wmlePP>JZ57ljFB-{a/=w4e9LIlk' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
