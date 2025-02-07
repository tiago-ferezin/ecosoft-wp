<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
define( 'AUTH_KEY',          'u00MLS*7y%u KW@q&%=bn`ONq*Tgz>_QuK$:(U{-#OC-F-).}}]YGxY~/=9xdsXv' );
define( 'SECURE_AUTH_KEY',   'E7h}g^gxDWj`]-f(8fbJ19j@gN&|(#CQ,$dy{(/(f,,m>|tFb-{MoBlj= [+5H:h' );
define( 'LOGGED_IN_KEY',     '0OEGqb9,6zPr)x:!*M[HoyG8>#<#1K4Bk<a2f+`se~Vr-5mQ46WG,m1vyD0O+AlS' );
define( 'NONCE_KEY',         '^oascn^z?9AQ{W )<dMM~uC!wr=_dV *&=u1,<7{]t*?:>2WcZ#=q-gJqvSf(jyE' );
define( 'AUTH_SALT',         '[FpA(z=Y(JYe#a*<u+x7|TLea,s[4tNVCTASaLfNt;NyQK^HQSHYK$jYM&s+Tw.2' );
define( 'SECURE_AUTH_SALT',  'hMOZA{;%nk})&,.kfgk1wUu$%~/UK*h9BxI6V&w}_m<PVpw;9#`qPalHr.0c.HPe' );
define( 'LOGGED_IN_SALT',    'vZ-%oj~*?ChF}^kYg/uD DfqBj6Ww$#_:f$rPT.uIL?r$j{H|o:?U?]w?bOw6w~^' );
define( 'NONCE_SALT',        'ipJ=%TO_diCO SfN(B.|g@=c@ss@</qqxS~dlZH7bQbF[1bV=&HDMS)L> k(JXVj' );
define( 'WP_CACHE_KEY_SALT', 'Y1r@,#73h]r<O}IA&a~oOmp*cbN4:+qWZR;~fown31e-zc_yXa/jY<3mQ#BK#;5a' );
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