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
define( 'AUTH_KEY',         ':V2o*^4~XBkz5Ba`YDzWSUBAW7`=updtI/H]I3k/`U0tY=_XBhi~9f4>W6^u)x<5' );
define( 'SECURE_AUTH_KEY',  'NMw43^8!;#JLD?50+a-f6<K7ZM9G%1PdnJWxfC.~Z[Y;;,%OnzwK3LVHk?Aw$dHg' );
define( 'LOGGED_IN_KEY',    'KQpuW?,=Qrs9nG/qORpk]OldR_tGx;4TN,~o&HgO2_!+qexy3}6]e!q08Wpj4W^A' );
define( 'NONCE_KEY',        '_ra<PkgYoF59O,,17z)n_gHVzVbe=;MP-Gs}~}bjT=PChzW*}Dzd-Z#obaHn:5*-' );
define( 'AUTH_SALT',        '44 mSo ?9LTcM=^Zc/~ZOGb2YHR<<BVL<cS?9L^PTSG*iF`6^;R8gSEwpDBJ]LF~' );
define( 'SECURE_AUTH_SALT', '**wOf+dMK3UArOUP}>|pUDHw|/KI 2ms*^Y{^ngtw8zF1lap3-DdrXt0S#|!>2v-' );
define( 'LOGGED_IN_SALT',   ',z4>kmi`5av]Azh g=0Spn%<o)CBy)&YsuOnB1MLgPmdFuw7Jq<&XTTo0z. Zghb' );
define( 'NONCE_SALT',       'F2sxC D1964qR +Hp.mg!jusf~G^tyG`>ADChT3M5?qKehG;.nw7<R:l|zVh.e=.' );

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
