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
define( 'AUTH_KEY',          'nyn2Ku>7[.cmq1{x!0} 7*CO1JhCj{JH-:p> Jjmng]X6{:#iN;4mMl*ScKuqBrr' );
define( 'SECURE_AUTH_KEY',   'Q;Fm}TdYK`MyV|%e68&0S5(dQ?I5[{&}9)wXw ,VpBM(BXa!^h&G&t<Ec*n$b&7?' );
define( 'LOGGED_IN_KEY',     'FZa1O-G:pq7,dk{`i}ql^~@W0[oQKM;9W^HX1rZSS]2`Y-,ZP/):O;POfus>> }^' );
define( 'NONCE_KEY',         'g&Buz78R>:,eVV90AXK@IS:eegxy;^gw9}ywM;2}W/eSS`{WB@:hO ovyU/Woazt' );
define( 'AUTH_SALT',         'VILND,e$a^uN|*Q 5}qw#4m:b/0hV&Kl(s)F{5i9L,S-F}r)ulJJaroZ13:HP`MQ' );
define( 'SECURE_AUTH_SALT',  'w 0>Y8eDN`5=3mO(_*AB}6cqN.Bv39p{/J:;qkI^LLGLm0qnf~T6(.bG-d}Nc@)[' );
define( 'LOGGED_IN_SALT',    'U`B]mvgeeI@lL2x..a[ADS1EK<tI0JR6Z3D,(WXmvKM@)8eOe/l> vx_-^f3tczV' );
define( 'NONCE_SALT',        'YO@v`-3_s&,KrlfA2RYDXav`85L(?].u9,^lapgxkctC9#wHYJ>AH*wUU5GuoLBU' );
define( 'WP_CACHE_KEY_SALT', 'UpP|7tl:6E@$jDBTA1`D!(8G{o%a+1+szzDR9MuC(Ng}U~-xJMe(%6NGnua(@u>Z' );


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
