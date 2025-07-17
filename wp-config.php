<?php
//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', 'YSDIBLUl53Q3Y1QPN7WlCUVb4k6xLOgavzl8HqbGpfrnRmdqHs5MywQuNu9oqWgp');
//END Really Simple Security key

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
define( 'DB_NAME', 'mporf_41100' );

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
define( 'AUTH_KEY',         '1TpGOf{$s5#;.SUxK8<}juR=PSaNBXBFHIj3gz+&9GbjwwDNg6kuC}ARv@X,~k?#' );
define( 'SECURE_AUTH_KEY',  'FO?i%bZgL]/1bO]$+Rc,IVgHtoI7mxg^]m1a}/,M:Tm6g[YRO;:3vi;%8t~FS}a5' );
define( 'LOGGED_IN_KEY',    '(2 ?n*q7(mVS!Jrm)tFn[_#MqLenK/ESR1iOu~+9X!~yq7i(J2FZRF:gy1vD`|a8' );
define( 'NONCE_KEY',        ',N8xt>KAv>m2`X*kad woz=j`X6ILd#, (D.H6f^~c*.&HzU#)h(+#Xr}we%,Bwx' );
define( 'AUTH_SALT',        '<<,<vO<8~),3`4H&OpM:jjAh7:BftCRgl=`}vL@K36*Nx+-2m{n@XEI+ds:+)Z,P' );
define( 'SECURE_AUTH_SALT', 'C8jyNb&--+rfZ?a``GJ{|Re]y.?bo.nbK?Kz>eHVnWeiv5KJ*{&<JTA%PdV}-`3H' );
define( 'LOGGED_IN_SALT',   'O7efx/`4R$*-qD1=2T2r~H`ki^|G&i/?Ln$n|:051duExam>^`3zm{! lGE]Ql48' );
define( 'NONCE_SALT',       'Jli*_qLJ$.VmUO7J_[cfo]QsLEUu>syZyl|n0DUqPiL)P{TaxTZkTy}%#PM[^A3Y' );

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
$table_prefix = '86_';

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
