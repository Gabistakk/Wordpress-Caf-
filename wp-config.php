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
define( 'DB_NAME', 'site-cafe' );

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
define( 'AUTH_KEY',         '#R}#!JMzujN%FN>^?;DEb#1;21+3s.e@1l >(S-9YzfX6`cyjb%^At6 qp6S%%z8' );
define( 'SECURE_AUTH_KEY',  'gMHYw]7D7;B.oe+Bs} bMj81Gg&{N):(>y_]*xWwUc,&%%OY7=J;b:.XL`Vas3il' );
define( 'LOGGED_IN_KEY',    '5Z8mKl(hhv6Le_;&|,%fMQQ8_gP$)}^,i|P?^s#RTJj-)=F.&Qr-aY+I$=MV)-Z@' );
define( 'NONCE_KEY',        '@S&tODo#${6AciI5iV%!2r%];$mO,JHj8zU;*1Gy(SM/W*bs;/exr/crJt{yf,s ' );
define( 'AUTH_SALT',        'TsC0zA$Y5W:%mqJ8Hb2!#X)7X`Xy2nq)95E]Q_@vb(-.ol]g;4%jgR*KjJ1: uV4' );
define( 'SECURE_AUTH_SALT', '0C|YP!w_Lpb;Qn>7_F!]x6wi$ZS,ZaEV55Sw4qdteq71Gx1uq+U~PJZ}yHlnL-X|' );
define( 'LOGGED_IN_SALT',   'BLQ#PZU*>={gI51_qV/2{>jD9d_Ml*NDl~S;}ox*-qV wQh0BF.AD3wq.e@C-<`/' );
define( 'NONCE_SALT',       '@i6h%;]-uN%mQ,$nY_@;jM(@[zl|V5O}W([,tXzE>sw^IC=&w.GuxcRs((Q l+V1' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
