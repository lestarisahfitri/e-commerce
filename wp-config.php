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
define( 'DB_NAME', 'bd_belajarwoo' );

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
define( 'AUTH_KEY',         '[s~rVhF%gwl??O.pjD[,S5n@5usV>MRN;1_AZ@V4A?arPUX(^*P=f/~Qw#AM{7OV' );
define( 'SECURE_AUTH_KEY',  'bA6;~,Y{xcgs>pKy^?fMD.HNApiYz64TrB%m5}x;p+Qh^S6GYqWqLj0ZNrydQ)&t' );
define( 'LOGGED_IN_KEY',    'dWK{g88)#=<BnxR)GRllWyoU#zD^+8j#{g0{Np/2DHXdvuErF-3k&fS2.7Ba-iU`' );
define( 'NONCE_KEY',        'vC (]/le^tcFL[=eJBr93.=rS+uH=rlNHzS#(222N-C%M:wtM(g}a]u=mh<^#XY|' );
define( 'AUTH_SALT',        'xo&yP=q?Vj)6vo9UC/#/AC^amgu(([t$p90~4^:3K@ n^2 4M^<[|eA,Kyyh[r``' );
define( 'SECURE_AUTH_SALT', 'mBvbC#rTQHjW)8E/d9REBO#fU!k8v@+x|KlK^j__pl`zsgsv=&:$Rea;Go1bxa]J' );
define( 'LOGGED_IN_SALT',   '#=|Ow<!VY> iVn&Fv0KXD}b-^&<(H}jOyj$RZ&al=>~ORK76l6P )m`J4~M^:!-9' );
define( 'NONCE_SALT',       'V9D@m_ouV-2aE?CrvY@:D09SgFUh>O%p$Qx.< $xBWKEQ~Z7gi8=:Ky2BI^5i3 t' );

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
