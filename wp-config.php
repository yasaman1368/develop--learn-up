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
define( 'DB_NAME', 'yas-wp' );

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
define( 'AUTH_KEY',         'e0R5$J93SR$2y#c]z)|lNm2iIdpF26q=X5tqo1cN*K!i{Utz3lLv1WBT>jb?rtK^' );
define( 'SECURE_AUTH_KEY',  '65~&1T5JO3S8Wowe/UHA=L,PxI2#)fg;`BAw$IC%p!BLR~:V1K4PZEyh;q8gS(`2' );
define( 'LOGGED_IN_KEY',    'JsIY>0#&>Nw2^}WF*?>neJiF?[oUK6#I;!Y<+SOFU3-t#P]L9K-i{{p|ZR1Db0fK' );
define( 'NONCE_KEY',        'bu|Vel9/]:$hcT)T8J*S}#h/<i4eGS#1:WSDCA&O!5Uc#X/?wH@s,ujtslGByIDq' );
define( 'AUTH_SALT',        'ZHQ@g3(5W`b>NC^hsoa6%OY: am|VR_nr:qFVb*iHJzxPP-SE`J`>QnKY^EEk*C,' );
define( 'SECURE_AUTH_SALT', '|EZfl!5$1AnrTfibHKn9BHPIhhJifqMp&rvBU~[.}DB&q#lapgXW?oTR!XC9t~+*' );
define( 'LOGGED_IN_SALT',   'PYsO6h%!q)e4Wv>C F&Tgnw~**eC#[?=}y0VJdi_&H3!99m0fDcvUMS*$h{4BY3>' );
define( 'NONCE_SALT',       '[K<r@jkmuqm7<`8X+R8e?l-c`Yph2kSIs2fZo+Gt$8#.K-up+n_Bs P}97zqBGPi' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'yas_';

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
