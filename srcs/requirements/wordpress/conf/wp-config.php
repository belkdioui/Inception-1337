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
define( 'DB_NAME', 'db1' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pwd' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
* Authentication Unique Keys and Salts.
*
* Change these to different unique phrases!
* You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
*
* You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
*
* @since 2.6.0
*/
define( 'AUTH_KEY',         'ZPEisn}#u2%dN53|[>=|>|shlE|STUb-|^F53/0x=h=;]bGl^Smm(Zaba$TC +h?' );
define('SECURE_AUTH_KEY',  '4YivlC%%cL|X7`-]NOFm_{e^3rENj$.]6d-[bqlNS9z?8-1%K0]w3^yl=Mu8 ~HZ');
define('LOGGED_IN_KEY',    '(|BK0WH}Bw$n^qG=SU*IM-Szj  `GLfOMpp-NrzHgqz4EHJ,shA8..FKwBfw?$L#');
define('NONCE_KEY',        'Bn+q?Yk-QB@6,+E~Qt(^R!}JW}9lza4M@31xK.m}|&CsI5~sKla;p%oFIgXn5SI^');
define('AUTH_SALT',        'gRCat8Nk1(Ae*Knp^u0?jmtZ.%Edp:[QL](?+O7QLo_/ko=4mWd@zpaL7yxsyN50');
define('SECURE_AUTH_SALT', '^B1*bo_~2zVyN6n?>K/+7.|x@P932j8;qfDh?]yCffXuV3zvTgl;+|+3daBA|N#&');
define('LOGGED_IN_SALT',   '(tm1+GoO3{.Rxo)Bq@Ck%MQCp_l83?peY#g-8oCH|t{Pi-K*0AhJvL@%@^+|s+F|');
define('NONCE_SALT',       ':e0K#`}X|i{Ky2p~K$aE1Kp&#=5SF7yDA6><-MJ7@WLC[8 |+B%KF:pj&!-f=mL6');

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
   define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
