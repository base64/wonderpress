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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wonderpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'tdt^4pc_LoSM `9l~`WiYdCr4uaF=mL3EmE)p>C~7o/zRKoo:ZRFJCZIc$mXR|DI' );
define( 'SECURE_AUTH_KEY',  '+swQuHn(HLP^06r:9zZWBeCa;iyR;aW[= 18kzzxG9WZJ1SCHJCyFVjb>{$6PhFS' );
define( 'LOGGED_IN_KEY',    '|-Z$-rMP@$?|Cm}{-WWU,P#R7GS_9)N&fv]96g5Q}~1smxdlCqX~>3*A7>TJz*<m' );
define( 'NONCE_KEY',        'lww5wkl8DkKh+! Sur*0b$~#_G5k:=tQH,>_GB9}lh?Yf?*fYujg`X46bl|3YTT~' );
define( 'AUTH_SALT',        'e&|9V~XX,m;:^P%kfKXOhw(>$28)`yyj}=((Q)@=KiZT T:)oa=d_`+5?[qRugB~' );
define( 'SECURE_AUTH_SALT', '23rQeD#sgVwC6<4Cw;3E6/c~6_J.`][,Xs3.];:=1bSOK9YjWY5t$1V>jUtqPOW#' );
define( 'LOGGED_IN_SALT',   'S.q&M4@@DKrk1~Z<xiD-4}cV^COMOP!@f^xgY9S(1Tb(~ex%Ee(]F#nU/pNOA_78' );
define( 'NONCE_SALT',       'n{{wAS$W{ZB/hCS#4nyStoe8+Wn^<ZcZbO#WE=$|G[-az(}V-<OXmos$/aPzR8H[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wndrfl_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
