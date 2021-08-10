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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'games-blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'a-,ZCwX{w;?vZ`mFZt2pxGE(mXh2u:-:#9(U#RFcqL?_sIseq{HJGC>v%Do}UrM/' );
define( 'SECURE_AUTH_KEY',  '/g3&7Cvr($]c|68l,l{VZKxT$CG&vW7#BP*9|tr;tsB+[T8#*Q!]+~<A7pW!9@(,' );
define( 'LOGGED_IN_KEY',    '$-[nM+Vn^>c#(s_+iLcCU/u WvD|zLh]G3$3& Ox{mV2A~4CdIPM&uZ2ayxsruU$' );
define( 'NONCE_KEY',        ')&<9]B~KCc$Bcl~=;9;g#_nJ?YL_rEe{TYG09I}= ,KXxFEklXJz}hPZB%%|SZ:@' );
define( 'AUTH_SALT',        'c2,s=`x4&zy/cC?)!K.$Cr-%!ej&t?/XkjQWR7>sjn>W|$OPA:sThhtf=EL]u1?]' );
define( 'SECURE_AUTH_SALT', 'nK2+~ypI^0{K5n`N`) EKvM8xYAG{Z1&VeB:4&:wcCJcr,]4%u-5LaUtr&(1!l5P' );
define( 'LOGGED_IN_SALT',   'i!&ngmVhy2R5SN|+>9BwXd9UWrEc[MwATw04(z,,T{ BeGEmvfaqxF5WNXlN:~#M' );
define( 'NONCE_SALT',       'LW6hH8kth(8XMT~|KW/W?@RPN+)%7XJ& *wD#:e[o}wl*cOc}HZ7$NX61n%/sUpD' );

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
