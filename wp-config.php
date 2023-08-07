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
define( 'DB_NAME', 'store' );

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
define( 'AUTH_KEY',         'jm?q ze.+?Sh8O{x~#t?|{Al6@o0e[[Un#LcGU(#Tj^GCJrVVm0s|o(#zbL=/r4m' );
define( 'SECURE_AUTH_KEY',  '8Gg/WoOe,Ii2bWBOG0~)[)x!{.r^z7TGZw,$2kCDZ/.~)<[4y8SIR?Km.a|?8W9P' );
define( 'LOGGED_IN_KEY',    'A-h+zDweglb8vx] wv1[s64^F&pMe)*UW^x0s6BCsLOsTb8l0+bC#)klk~;an)}E' );
define( 'NONCE_KEY',        'S)b fNP@JB`O^R,64`Zd_y%GNP4B`n$SMZOtfc4TG4!.4sMy{1~3$=,-m9^k.6l6' );
define( 'AUTH_SALT',        '?0z#hWa4h_C1d}S$htr<Un$ b,m!gLCTS<AjA|4ue}2+Nz}twFGXtB?c}L@PL1H!' );
define( 'SECURE_AUTH_SALT', 'jvZ~=uDK7e%T=Y*ePuop;GgC^J9+Fh|Nc]M$M0^h*P[3n,w,a#WwSa5:K%&KC |$' );
define( 'LOGGED_IN_SALT',   '$upQ$q( s<@20}+ohFArg$5z=B!a6]=f)91._LF;jAJ:K 7I&XEgd^YECvBPu=-J' );
define( 'NONCE_SALT',       'LC4%H5uvMfwRM3msvJ)%C-?6/G{cP( 1M4^>]mK2XsE6$%jG,_;gMwLzggrU&m.h' );

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
