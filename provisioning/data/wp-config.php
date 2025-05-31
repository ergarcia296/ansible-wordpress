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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '3xzi2-255?1aJ@C-kl8Q+;4V_-9S&$g^Ad1Z`09+Lj-[PT+L|pwMa,H|}J{qM2Em');
define('SECURE_AUTH_KEY',  '9dowi+^H`9]cQgp?{ q]DbOE$,V^DKIId>XHH3r+1px`gwvkr5`wj3}0=pTaB=J/');
define('LOGGED_IN_KEY',    'L;~G(~BJR4O43)61g;50>)k#|#6a=vv|6#V:zq=^&-N!0Df1T<CKi,FFrq@oZ%1J');
define('NONCE_KEY',        '=5$|A[7MwH^}J[L|L*FLEylep%uHBQ$*7qwfs knb2I2/neM2Q17-[gSn99).,_b');
define('AUTH_SALT',        '&Ah;z(-_;#lnvavMZ<1o[ jP7++J5]0[BDZ<+s#SPs*<d24u,ad>D!4YiKyopepG');
define('SECURE_AUTH_SALT', 'bm2iT673LT0816YDn@}5)gt?%]X&guf*[b(#g$*V8/(CvDRAd$wrNZ@W.oSU=X[+');
define('LOGGED_IN_SALT',   'Oun8`R*PBx|*WrZYSk$mbWZa+O|-C>e<*QX+<[ddej`n)}% eE]9wOs.rV};DO,=');
define('NONCE_SALT',       'tv]zvC=j>t]nsN3C?&hZx2/-/c4yj*[+5P)@Fyv|g`5R4uznL);ZUG<$c`ErQ#R1');

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