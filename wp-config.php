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
define( 'DB_NAME', 'dmprojects_vijay_claire' );

/** Database username */
define( 'DB_USER', 'dmprojects_vijay_claire' );

/** Database password */
define( 'DB_PASSWORD', 'F[0Yb99W0$st' );

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
define( 'AUTH_KEY',         '8(({o<o1~#+qXW2l!.5WuabXZpRol|{w$K[oO)ci*RVH{avJqa4/S+q%D-EjBtEO' );
define( 'SECURE_AUTH_KEY',  'f^rKJNOHvW}pZ8bN?eH_2g*p[U5sQ^0tlL2JBE3zB(n%JLZ}4Ylmd9p e*Haj $&' );
define( 'LOGGED_IN_KEY',    'f(!-m|-VPz]n?5 CAfG/Uo}5^xLs|u@CfhPT-tdSp<RXiNe?kZYV+/j54CDSzYkq' );
define( 'NONCE_KEY',        'S!{myx)-N^ipt;C.nPFP)#|az,fVGt[90BU:7PMMzkc12`kXwF_sQ%^`1GbIqTW#' );
define( 'AUTH_SALT',        'mBn<~IiebtG+n|n7|1HY>miZ}g:3sn(tgmr)2RG]DraHa$}wSUB(lO&C`9}vv7`Y' );
define( 'SECURE_AUTH_SALT', '[WK1Jg+1;)9,:&x>] OBM!EI9pwH;G+|n()FtujdW*,{T?.vNc>~?d&4j*Mo_^rW' );
define( 'LOGGED_IN_SALT',   ' FAUN)UuD/e&1l-8&fOG^X?#F}0M)@ghj@:GeXRX 14:%%SE fa&_D_3;I~dH={r' );
define( 'NONCE_SALT',       '56 R!DZ.1L.YveeRXj-zO7$JN*Qx=Sz QTaXpY=U7njwHG,Rl1KT$JjlxZ{[I$%`' );

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
