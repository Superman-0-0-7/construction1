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
define( 'DB_NAME', 'construction1_db' );

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
define( 'AUTH_KEY',         '%OVi:J&CIi*ynNQ`s]mc<cQ_w?@X~:SGT]S<zo%0;o`Bye8F)[:)0_}~ z*E;,a#' );
define( 'SECURE_AUTH_KEY',  'yCN(J|2W/[(V$</,/no3MxGXvYlj4t#Flsr`#__9k=1CcKE:f1a4^cTZ7wp/i`^c' );
define( 'LOGGED_IN_KEY',    '5@&`K.nn2|^YyDaLVk>A,<]S t+TwjC{UEF3>:m.#$U@rE]$b#|1wwlt<4[7or(~' );
define( 'NONCE_KEY',        'uV.Bi#z>T]qjox:gv2#)JSd.fo`;GSs[*EW@_T_x:,l?K0N$AZlq]JKNIIW5&$U]' );
define( 'AUTH_SALT',        'a~VS76FujLpbH4C@yFzhI`=#zwm0&LuV+O,1*>8Yqga<~0|yqU9(N8rbrtiYCXk`' );
define( 'SECURE_AUTH_SALT', 'jZOjnGAU}(eWhgfvvKQWV65T(>?00qnX/DBeGk4Bijz;W=UW{=,ek(D8]_|o0L`w' );
define( 'LOGGED_IN_SALT',   '}F}PJJG(uA7/LxiaMPB|7B^0LkU91hJ/a;{e}stb;X(9_W)B5kFvGoLp{xiwX(Ub' );
define( 'NONCE_SALT',       '(N[Gy9?9Kc)lp1F}Wf=-=>%<7d<Gf~sE+k0wf6.M-ChRN*3JYf.U;%Z$)0%nWy> ' );

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
