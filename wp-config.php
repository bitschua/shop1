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
define( 'DB_NAME', 'wordshop' );

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
define( 'AUTH_KEY',         'ZWy/g>7BYK<s @l*}1P~Ju%yA=q+Z/?*^$JsIGMP:70zRW&eeUy3H,k6s!aNS. m' );
define( 'SECURE_AUTH_KEY',  '}fGR<>nu_TOxOYK--~,#.qYS%J.&$<fXS#1M6G[{SmdPN(wmW;e;m~93 wIYRf)W' );
define( 'LOGGED_IN_KEY',    'yzr?E-MVsw&@vH(;Ol?{v[W~lW$JL?1V6k9pDz$dq.L?R[~#)W*X)w3,T&}efhR:' );
define( 'NONCE_KEY',        '[Wv%zFbl.PIL1S:!B24yV)Ro:2^14SI% 1]og$>|lUyl*=0:]@Tyg.-teNp>=/$|' );
define( 'AUTH_SALT',        'zL4UuQ(t%<y6!Lleg*gs^Cjk{e]3A.G8~}Y/Y]|C>2U!d~n8%Tz)5]>Oxd6/yz.#' );
define( 'SECURE_AUTH_SALT', 't0Zb?n!mb.G:{uui5R(0xM#mW]x::l]4qe{Qq}@jTNzl]55!gYYc^#@aUk1DPj>`' );
define( 'LOGGED_IN_SALT',   'Mak3Xg8t1W`0jgKArrS)euDltE76Qjc&9+dvv&XC6z,N8*br6%&FLYNpF/u=8be5' );
define( 'NONCE_SALT',       '-SPv@m1l1vMnUw;V>0;6ZaicLcY4Y{V!XQP^8jDIr}n)XYbI`PaRMc-0(k+JbJnN' );

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
