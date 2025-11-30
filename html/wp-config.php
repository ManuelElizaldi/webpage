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
define( 'DB_NAME', 'wp_blog' );

/** Database username */
define( 'DB_USER', 'manu' );

/** Database password */
define( 'DB_PASSWORD', 'Indierock3479237_' );

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
define( 'AUTH_KEY',         'UTZZq[@i7Ck;E<tv{d$KThapY&{#jTu$*RCd;qt}UJE%[m Jz}($V5Ky{):j3a8P' );
define( 'SECURE_AUTH_KEY',  '~,A[62k-dt=.kq3Kix=dN?7M$4?z :mclE-]}-X20y[TI8,(Uo=1)hU;1Q[WQ@uY' );
define( 'LOGGED_IN_KEY',    '>s0>;2xs~&1P,1dk$jJWFKMneew+?sH1mBdRFU%>bMJPIUKgYZ&[>0raL]hndU98' );
define( 'NONCE_KEY',        'g}rDi%ZgTgp$FdwrRmh]pGpY2T=}UY%0`IJ29yVy=2-^L/45%fmZ<jFy,*17(xCm' );
define( 'AUTH_SALT',        'Q.=2*hU-[YTaF{?Tg^?l]I{~<KhYDE=7:6siqcUZvgKNZ!*/aA>?H4yS@.-L<w81' );
define( 'SECURE_AUTH_SALT', 'iYz`NXejJ^}>QoiS$(kaD3vMo]xgH,%NG}/T.DHg2v%K<-O!!}?1M^0mWiA9Y|/9' );
define( 'LOGGED_IN_SALT',   '*~*SwNs<9W%QmVb/A8xGt66.<V&}wzrI/O/-0V5E4()+J;`mb0VK?3Ul>10{7Wry' );
define( 'NONCE_SALT',       'Vv5]2i_qt61C-^j>Qe2N(KNov!BCA?A{ZBW7A_=9O~Xp8;3s!]wf?Vs5T1}_<XN1' );

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
