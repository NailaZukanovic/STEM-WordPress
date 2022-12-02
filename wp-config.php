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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'few*Fz8&d tg<eqd?v<_YVZmg4X)lh.N$EFcz0/n~h:OaZABc~KK_# GZY%#zjgf' );
define( 'SECURE_AUTH_KEY',  '7VP{GM0>I*CsO1l$27HQ8Rw?EemEe]Pl)oryM*`(m^ R u3_}.FVKoywdT]kF5lc' );
define( 'LOGGED_IN_KEY',    'V>+p;l[MN=,svE|Q0l9mz(l@w5#kQNy5@FWORLCCjO9=ng  ^`Q9Q->2;Z:jjOqZ' );
define( 'NONCE_KEY',        'DZ@8gX5tH(4S4Lu#XTqgeHW3B5-_(|Xlumcldt.+.MpE|KI07GhpfFdopsfITO{Z' );
define( 'AUTH_SALT',        '+!`aXCo)JW}!?Qb,S`}G2YV!VjaQrM^0ha.*oVU>/U;/2;{j]+OHxmf}Mj%lYGg7' );
define( 'SECURE_AUTH_SALT', '-~lM59Q3G6Gg#>~U.]/r0J<!@U-5R0CPx]}})q#v]-^%;6LP_Js=b<:(%,O&k)L ' );
define( 'LOGGED_IN_SALT',   'MT@LFJgmoS1btyj5IIN|w*^&,psK~Ja^xR9GR!cLWoCtpY0TK1>Nut`[eGyxSHcB' );
define( 'NONCE_SALT',       'd.,VL=Ym]7(2Uu^sOi4 C}]^Q.T~0+`cOqeE391R0bF!Z3?IRT_XrOf//hej-x>a' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
