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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '88Y8-?Q8t4aEU7Lf)CW !0ycu;-*xI,ipj4Ukry+ (mh+o1&ZC/sR$$j.Vx*k_js' );
define( 'SECURE_AUTH_KEY',  'mx,d!Fk3nj]h|5s|OfGfZ5l~VD(3IsT ucn3P_x(I[Wjl:hf!>jZx!N008/j:liW' );
define( 'LOGGED_IN_KEY',    'rULDRrBCz$}B=KrWy4i1JZa%1GhG)@?TUzR-#V~}13C{`:8X/Vwl)XTlOkDmD;D:' );
define( 'NONCE_KEY',        'y$1cEb0=Xc){J..#T)V(V6>3a28.~Q=e!?&x]fXOnYf~$QvSX[8qLn,Ak<Z`1$Q3' );
define( 'AUTH_SALT',        'V4F1_#q6v 6LC)vY0hY^h7ATowVV:Dt<-|EQ)* aC!zh!i`h%Qs;cRscJaX^9s&A' );
define( 'SECURE_AUTH_SALT', 'e>gyK!h[TKVEN01CZL{Mr5Tp*Pw!+z12K4,;yG#`>6-I5WW|Nq9z/GzR&>?=1vem' );
define( 'LOGGED_IN_SALT',   '7jy)OW^G^EsveTo^)Hx84rXsmeNGuJK:]9FU<!?n(UQ/L3<0ecsGj}^%I7)]b~%}' );
define( 'NONCE_SALT',       'aS~|CV[Z5H#UQp$=bR#sIp#M%N<G}EAaKx,+ u.p&n3>grpOXhb``-GiTw18x!M-' );

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
