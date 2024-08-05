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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'BuhCC=P_.|$,a~Q4%}+IsZQ_4r^=Qq|JCC.r$Zyl8.|Ra1W-e!;8EY5|d8,>5bmT' );
define( 'SECURE_AUTH_KEY',   '(72tRz7P&y:CTfD[yXYW*w,n$f&w Xz.m~DR~AvC6-^-tr?Jrfe}aJ)0Kj]59J6 ' );
define( 'LOGGED_IN_KEY',     '5SF woG7|dwBr9<@E [D*~(9(U<~TsiyJk.fARmHw%6t,},TN$O?>Uk<C{M1?FLh' );
define( 'NONCE_KEY',         'DqbY< TE+I-;Mc`/7uc#owrYtc-X=/K+&:TWIM{c-0&l_5.[N{kxgTKV(O8Un3tt' );
define( 'AUTH_SALT',         'gT[qRy>U2seP<rJbs+aCu{:IYDEXZS`+$()}Fl+VnHn6QAe3$%99s96D^j?YMC$i' );
define( 'SECURE_AUTH_SALT',  '2&G[5|P{.cC=4w,OK`w~V~#;eyJ!xQ(hMyK`5S6I7h<#~;J`-#;IgpT3aSneOZeR' );
define( 'LOGGED_IN_SALT',    'lN,Ve{UruqCdb!0b}N~}RSud}O-0W1L*V}Z.s1zES!>Z%5y#kjS)/8-s5nRVdPQ=' );
define( 'NONCE_SALT',        't*1N;}$Y93g!Dh)nU~6z:q%$$~Baq]h@*ln6s96)9H5!pti!$~RK~V ^;;PQ=2oX' );
define( 'WP_CACHE_KEY_SALT', 'tP(rM$3Ts/ S&O0hj`}dHMlE2|.oM.6m4x4#K:kU5fqhM,I#~tIWC6)AXF+R~cGr' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
