<?php
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
define( 'DB_NAME', 'test-wordpress' );

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
define( 'AUTH_KEY',         'JVr0Dcl!cVYs%MyFztT>.4dWUY)ho*1gp$D,>Q9)Ls=s,@$509.1Y4$Ztc[imtWJ' );
define( 'SECURE_AUTH_KEY',  '=%p}s#/yFZ]AUXbe|c`FN_Cy|2qW+ L$r!@eEQs@? A(JBxu/y7AheWl9Jd85&ly' );
define( 'LOGGED_IN_KEY',    '4u`*`it?2nZk(Qa2JQA5czgY^+m<|71|eK2XAjzvClivcEMo c^(4rNsYx5iLDj~' );
define( 'NONCE_KEY',        '|Tf1r4]zW(DKak4#=c@yfg4PL^(20OVj=Vw,oFN6Pa{`^eHFp,P)aK@;EV2Oh)Bo' );
define( 'AUTH_SALT',        ':CsA)9|zu2]jB /%70Jg^,Hr4ODi-_B{gL0jfSq]Ur[HtgW<vKBx8*6.-}D`23L`' );
define( 'SECURE_AUTH_SALT', 'dq#sL{X[J>f|>93tC^x7)7g`@:tX;1!9z.Lze$_:>Fs g6>9!@5lz?5zO*98$l8F' );
define( 'LOGGED_IN_SALT',   '<K4c4$iB6L^JsX0E]_0oxTU8mk64Y].wBz-chm&`N!7u1D=(Z!WUO+W]INaxCH2i' );
define( 'NONCE_SALT',       'gsTraY/?6:(lg./[CVOb>Sz^^$mPvj5E?s}vuL!mcDaff>AxoiD+3IjH}=r0Y&,=' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
