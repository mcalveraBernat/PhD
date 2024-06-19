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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'u197667756_pobnx');

/** Database username */
define('DB_USER', 'u197667756_omtnc');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost:3306');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'W[Jz2n@e2mG5HdEd~k@22r4/)_(f/KV]221e(L2Y5zpav&dg-lUvSx]%w7PEefmy');
define('SECURE_AUTH_KEY', 'n;EU3]nmX5]Oz~0L230iwaij)HyeWKaKRQ63MEkt6_E8ck343F7j6|C2&9I2ikEQ');
define('LOGGED_IN_KEY', '2:(w_9~2(8HzHVT[4PeJT6@[#1FC(96/WGFXKCF6)O]gWKH!t65%6n-A3dip+%v)');
define('NONCE_KEY', '2%F2]Vnqh(O2JpXgMUzi!F2o/*[868]84a9ZqN;0y69K/(7301U8(88Z0cS_K#du');
define('AUTH_SALT', '~q8NH83~A1F]F[tT:l|4f+|o9l]8IOhqg92k51kK61(*-w:uq4_EKm~5_23SYHpz');
define('SECURE_AUTH_SALT', '7~e3@EDzmzT)!Fs8Wl/MO0:ph0[8GRBik;RmEhTfr-7skA|lK5048:y77]Ox-x_P');
define('LOGGED_IN_SALT', 'thvVb[IIsQ+Ow]G[uu@G*-@G#waYa3NWt9+n5o55oV3j[1Z+8#!8G3ux1)2x5l;4');
define('NONCE_SALT', '(]Bb8I-@Sznq%6005pXy2Cu_/91OZ6wR!xkl]1tLxiVu9TIf-Othj1;/*7x36fX:');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kfk7dfw_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_CACHE_KEY_SALT', 'b050b36bf1cd53723effcab0cdc54be7' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
