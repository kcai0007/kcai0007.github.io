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

define( 'DB_NAME', 'bitnami_wordpress' );


/** Database username */

define( 'DB_USER', 'bn_wordpress' );


/** Database password */

define( 'DB_PASSWORD', '3bb9cff5baa1c67f4ab6360724809799c11803a78493eba09e2bca1483e32cee' );


/** Database hostname */

define( 'DB_HOST', 'localhost:3306' );


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

define( 'AUTH_KEY',         'WDag<&i/.6OT&5zX]i*#(T!$d*#LV%F5<tmbj>|eRD7:q;2{~vwH;:=<s3D:@?<K' );

define( 'SECURE_AUTH_KEY',  '^T:R.J0c89=?aZM,)zn8UA_){W&HhwqA6tA>#~b!9/~88>oky.-=QqJ`AAV|,&.C' );

define( 'LOGGED_IN_KEY',    'pRv+/mWP_!Noh/]K{za-yYnvy 4tTsq(Y[|q{$hXxK]kl#+RKqv?|y>q9_{:Ik|W' );

define( 'NONCE_KEY',        '62RYtdr!>^STq/HZRSy>uCwB,|o%uwp5,SX[5Z{o{:|rh#%U{*w04B<G96,sWj@:' );

define( 'AUTH_SALT',        ']?g^pX2_=IH*jVa3/8V +k&GAL#uH]j61Kv1L9sd9edo +vC!rJw7<M*/Q-qu+nl' );

define( 'SECURE_AUTH_SALT', 's<Hn%.kZ4*z<1`snMATdHajMT?:n:/}YS*;Sa~@7lS.&(z{#CnW`ChEag&eZ.Hn:' );

define( 'LOGGED_IN_SALT',   'U`A!w[.dT**Y5jnoRwiQ8VU@f.YSO%DBvsq TD4hnkIy]i[1(@(e}*.|q3j/`tl/' );

define( 'NONCE_SALT',       'DSbBDIy%L`xX[+p!R@7#}U0GWXNwc? qP7/{Qr3CeC(f<#k#cSA}pC:aj!~!pWA-' );


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




define( 'FS_METHOD', 'direct' );
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
 */
if ( defined( 'WP_CLI' ) ) {
	$_SERVER['HTTP_HOST'] = '127.0.0.1';
}

define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

/**
 * Disable pingback.ping xmlrpc method to prevent WordPress from participating in DDoS attacks
 * More info at: https://docs.bitnami.com/general/apps/wordpress/troubleshooting/xmlrpc-and-pingback/
 */
if ( !defined( 'WP_CLI' ) ) {
	// remove x-pingback HTTP header
	add_filter("wp_headers", function($headers) {
		unset($headers["X-Pingback"]);
		return $headers;
	});
	// disable pingbacks
	add_filter( "xmlrpc_methods", function( $methods ) {
		unset( $methods["pingback.ping"] );
		return $methods;
	});
}
