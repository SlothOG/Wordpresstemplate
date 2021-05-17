<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'test123' );

/** MySQL database password */
define( 'DB_PASSWORD', 'test123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'W~YY?R iE}W4K&Kh?R}yOp?}kP=a_V+4cz<}A-0@4h|` ]b([qV/hqC##~:e^.1=' );
define( 'SECURE_AUTH_KEY',  'i0t%p~l.+BihD[!:|lCSC(uK_1U2OYs/=9sHvU-2Qw]A,%L^>JWb][jAs%1K!@;F' );
define( 'LOGGED_IN_KEY',    'Q wlB0)H-/FFD5ds_{:=iYD0v)jtZxQd>xgtvX7e6r6@s,zm5=/:GQDH1x$Q`Ky)' );
define( 'NONCE_KEY',        'fQICZc%hEludF;k}WXn7rxA1By8kAo!u||1DSoSd6t-$M9&>2n:rITxewo`S-FF7' );
define( 'AUTH_SALT',        'vkG)u_iXjmP,$ZHjD?~wYu{C$ZsYkucEa ((`.u+3EzL7^{9U+kUWm2IEUtdG9{=' );
define( 'SECURE_AUTH_SALT', 'By?8uQhP<8EeMuor(.$ =^H)8HXI^jG$$o@ex:u%{1$x!)%xqR=w}.0t=)pD1QXk' );
define( 'LOGGED_IN_SALT',   '71?zJuz~Lgef*3:y%zN0~eO4mAR+7ruRC-=UyL%Lo#HQ*y:De8$LN%1Dtp+_Gxs ' );
define( 'NONCE_SALT',       'WSmH<aVx@l3Bfd7TT-Y<@LC81n+R&RR9ynk;VZnf*5I62T*8>^@A_u}x+3y/50`N' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
