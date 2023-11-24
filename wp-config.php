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
define( 'DB_NAME', 'iffco' );

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
define( 'AUTH_KEY',         '3#{-/cf4lbb77Ih]ULmttULt$:a$0S4}(BHX7orlzAEEA>o^CcfkY6)uECc5DRL(' );
define( 'SECURE_AUTH_KEY',  'Tfd8gjaR6aK5]xS|A[^Svv3!AYG6K>I_i:sb)d4W?gVZ=Vn:{%`z+b]QN*bRGBir' );
define( 'LOGGED_IN_KEY',    '`KJ:~F.5xwZ?mMO7Y+8Q]9vOh.(b}fLW0WtHgEcRISJ;@K9*6m$@f@e7%N%7aE:&' );
define( 'NONCE_KEY',        'cxpc8qR[C{$>d#WCkkGP,Cw((F0)b^8a^r,2j;o*5A{Amw)$@9wbwffM); !isC/' );
define( 'AUTH_SALT',        '|<&~W zBEP-}jrkJSoUg*vhL(-b%mbd=r.e:X6aAm[KPHESR6<k=X,p(v|7w[KUL' );
define( 'SECURE_AUTH_SALT', '{iTiq#;[mJ|$QvZ:LNO#ec8p&QWId?$lfmeXl5)L(-392tA2|Js.~],g~khZK=CF' );
define( 'LOGGED_IN_SALT',   '{zR? 3c!RiK34rh=[_~Cp5=.C{<h&I#tqcr!<LN=y)tTDzs?CxH4>BxxQ/t$4Xm|' );
define( 'NONCE_SALT',       '*z,>k7T*+&=>^hA~?fzV]K0f05+|&+T[#X@v.;;*:cu%]$DX^f<vzvNNJl$|4[7J' );

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
