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
define( 'DB_NAME', 'everyone' );

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
define( 'AUTH_KEY',         '9Hi?tm9_@V SdPiQ(ZO7KHpCf1*5Uk6`6Pt9+<:MP94q2_s%h:*AO*0B`-ES1={d' );
define( 'SECURE_AUTH_KEY',  'P]}xy&r52DcEt,2UorG41;Uk5ODR{KP`Gg4awc#VapoWt;`0rEi_`G z{f:B^CW,' );
define( 'LOGGED_IN_KEY',    '#!W}rn#2slB(P~-~~w0-jBY;l;[}c ![ikiVEhCu 1HO]krYa?Y.pcUV0prVs}R>' );
define( 'NONCE_KEY',        '|%tDb$wt!00pGRw=v!XJGJYGOH7jqz:SD63>eoBjmq|H/|}L~VA16FPETn,`i(bE' );
define( 'AUTH_SALT',        'v+0LH`-s<;DdF]TvGCY=)<JSlf;3TYD@<d!S2))LwkdMhHfg#>)v6WL]:QgVmXG9' );
define( 'SECURE_AUTH_SALT', 'Nsm%}I =1~,a?n{yG-fR//^p2Bq<6UG-7go%|m:k!F1KEsWxMsfto#b^Ic_r)r0c' );
define( 'LOGGED_IN_SALT',   'z?r9fH;m4DUTYjXhB|3XH0%H)j_/yk1t-zKQPe6e@Q+3i({Ft~pljB-y*GwcG,W}' );
define( 'NONCE_SALT',       'P3#&AHz-kB;]KvY_w7Iwkp6X/S4AG&:__9rtPoSwAul~ci@Q&Sp QA;TZ@4&(e^X' );

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
