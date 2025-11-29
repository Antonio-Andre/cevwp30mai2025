<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cursoemvideowp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ',`SYQTgJ-RXPa=m*?&dG~.P?jo!lRiH~&];Yb74h>_.luEwu=sd?82Slm6z-Do+B' );
define( 'SECURE_AUTH_KEY',  'f#^Ieqd9Sp0IRFi~y6Mb2;*Z$kuSZCkH?3# z^-?`?<0;_:eE|Vc0<NgZ.77P^Af' );
define( 'LOGGED_IN_KEY',    'eT}kju?yUx+P.2~(k!~lh8P)nD?u^t00So%ddO~NJdalw3]c{(,E,xEXAf4z$iA)' );
define( 'NONCE_KEY',        'B?eg1e5rz-zC [nBGR^r57{t1~/tJ/GGSUo:]-H~0Fm,a!.rXaD}Rp{a~n; c[mG' );
define( 'AUTH_SALT',        'Cp#fjJw$/&<9IfYf#p>5iAx_:xFZ]*.0nuDB{M h5|Ogv<L`%L%?n.{N&e--8sh7' );
define( 'SECURE_AUTH_SALT', 'HU6PIl7p`%2UvY4Wl^2F%@(s:p{k3=!BFwl!kWm-AHANY CQa.;)QTJ0e:1A8-Pn' );
define( 'LOGGED_IN_SALT',   'pVj8vn) Kb6qF%%wcxNLQ-piNC-aI~U>I[?=pG/$*)@x^;0F3?bzOJ=|@gc<V@`:' );
define( 'NONCE_SALT',       'dB^%%dTb%iRVGuP42b:lq,w/_Nvs,t(_&[+k/&/t-voZB!-|Y~!T_6/zQ)Kz5505' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'cev_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
