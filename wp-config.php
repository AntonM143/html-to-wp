<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'labb1-anton-db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jitFu|AN]$}3WCTCMH3IEb{-@q|{Vb)0m<8N*00uq%ZIkaoRCC#U&=/RQn*g+)iM' );
define( 'SECURE_AUTH_KEY',  'Fkd88nba$n$$r>A{ Yj8dcN Ur)s4f092:~;E ,gcou[ gniy_K{atjHCA,r-fFz' );
define( 'LOGGED_IN_KEY',    'J~K*1*_/ 9D]yrqHml]oH`C}WX!YFtiC?bbqJ=%T4^|CX+c4}NfV8Zb$EU$>023;' );
define( 'NONCE_KEY',        '=ekk0+n0~ki5BxggEpS4w%o^pYyNUtQtJ`X|q[8oXsNV2XjGW,W%]{GSV_j*t&64' );
define( 'AUTH_SALT',        'G_ v G7DoYLy})~)soXn.1X~)l[bB@.=14fHBR_4wuBPB{]6a@l}1EA9EP19+@5|' );
define( 'SECURE_AUTH_SALT', 'y.]/T]s:8jZc29jQxoVm,r&0l;JXEq;p;h}S.#O`?~=xB||{D6Y+,F@YA62l~,,u' );
define( 'LOGGED_IN_SALT',   '67iL?TP),Jx:b<%mmlZ>jYH>N?Du<=GKER5hf`@4NlUUgqE-Q^p(ZNc/ld!1/vq`' );
define( 'NONCE_SALT',       'XF3TKA~I)(!dv9srnro[nE*~PC)qB7XshG2wLWE mNv4lw9Ir4L)nJiDl[w&2h8;' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
