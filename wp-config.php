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
define( 'DB_NAME', 'bachproject' );

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
define( 'AUTH_KEY',         '<C9r75v&wuusdnOM$22,kQH.1A>pInsQ!KDOss*N.lIv8Ozs]KV|a3dEXIYzi$sr' );
define( 'SECURE_AUTH_KEY',  '6,3GQsOW>$)JXXJ jzG5vGr%be)/].R[./A-Z5K{_j YE6U>=5YZ4p5QnMcAfiQ[' );
define( 'LOGGED_IN_KEY',    'UV,Vd4/1Cue.@fhEA](P>}j-:/Mj23 JghHW@V7p3w,;GZF{- t?R)krHG%pt]Lr' );
define( 'NONCE_KEY',        'a].g@qYJna(>uXsi0ZK5OP2hq{XqZ_NIFaMo5+S%]B9}[0GFdniSP8di_{f8$A@_' );
define( 'AUTH_SALT',        'tLlJ.WB@{x}lQXmlObC!3:a`K=^x2{/}08]Y>xZ>{oQi^zE<@t4_Y b: 1^`rHO6' );
define( 'SECURE_AUTH_SALT', 'dvF R.Zhc<-%TQGD4}7j$f<}/U+X!#l).b84MhLr*4{H$QB<6UN-nIOc=JDvm67k' );
define( 'LOGGED_IN_SALT',   'FO3Cb<(:V.</M)x;C;4k1^_p8ceJ9tvM_k|lUINJqp|k^vX/DU%gNj?wQWY?*3VE' );
define( 'NONCE_SALT',       ';a6>Z3dfVYuXz8xR|Y[a>_gxFPuMHf[M>;=,?vGmV;]Mbd|m)i:wiF}M0Y?>&,fr' );

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
