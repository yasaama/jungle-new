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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         'gKS9wS.^K_iC .XXpV/}WQh>`,b,9SKRX|)sG#V/0jq4&n`xj90?j*~`g3$0o56P' );
define( 'SECURE_AUTH_KEY',  '5wl9F=CQ)3y6zb7Q=3)redC,U@af${FPL0 7a@/A]bbg*}NYb68I$Z,H[)5~C|=]' );
define( 'LOGGED_IN_KEY',    'mNl6)|NyGPavU-!VaC>vdgU(~}i#N=+&(A^`ESx rr06uD/20$bUooamFXm8I?J@' );
define( 'NONCE_KEY',        ')y.)dzi%AvSOh-_-jU.!HORvK0h#$dltRlWFqhoga+-A]O77D3P{Z!^3aV$t8{mu' );
define( 'AUTH_SALT',        '4=O=Lu=+4L#cB^SgFs 0T5`7xzZwg+*N@M9WdgwBw6 d(O$|% @/$x|>J?2ciQUh' );
define( 'SECURE_AUTH_SALT', '9G[g(*]gKU1[NB!C$7qHRjyWI&^u+3 *9Pn}&w%jrLY?$ORM67V9FHKs]w>~6#r[' );
define( 'LOGGED_IN_SALT',   'rEXPo%53wVb!8NGLt/3Z,,3%cx!X>_wn@dGF]weQix<&0DO$H@=,_/|zH<+Nrl->' );
define( 'NONCE_SALT',       'fDSB!DFtAwhVO$*4M6$9^*k9,1GDmcCOFj)+rNK6$ixx[1V5kvHN.n)XN:L,S(3l' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define( 'WP_DEBUG', false );
define('WP_DEBUG_DISPLAY', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
