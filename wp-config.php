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
define( 'DB_NAME', 'festivales' );

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
define( 'AUTH_KEY',         'F%N)gDy84/:M2$?|96~VEg}HV~Qux(ihl*b/|:< _`m7GY;gPg!pbewKde;HFD95' );
define( 'SECURE_AUTH_KEY',  'EslY0I%p{Bz?OfLwpk0q7I6T/G7@ h!l]ezi,Pjw(yiQek~1 iabmz=1O.u8cZ5d' );
define( 'LOGGED_IN_KEY',    'u{79ypck!U!P/G~[lOW+t~fe|>?{/+K;`D*ng+`z$6BK-Zj%xT[J*Vk*?2&n6|>l' );
define( 'NONCE_KEY',        '2I&e/t?z)>StBk$HcQ4U>HBYZ3+|D;g8F3UsTm!#Ld4y0;Y_d%[i4bdSvq>Av.(w' );
define( 'AUTH_SALT',        'z pX}O:<aYG+ufT!z5.ZT#l-Zy5(FG?8!Jkjb,c_1+-uBk5spF//!|xz:UGWn2pN' );
define( 'SECURE_AUTH_SALT', 'hXfb)AL/k,rFSZ[BXRUn.Z6tI8!`F1 B~DAh09uiu.$29p3h.kD;4*|X|1agHcYc' );
define( 'LOGGED_IN_SALT',   'U%0+9&_Vhrn51P-:no46+b6kJ+:,SPsQQ@C,}$pLEP:e%dg.BVRlpc*FG1g3ICa%' );
define( 'NONCE_SALT',       'XNIB/o~WMVk%4N-6C~_+cWa$xQcu7u_Oao$NCH@1<|:5S3mqcpF?NuKH; z1dd$I' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ps_';

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
