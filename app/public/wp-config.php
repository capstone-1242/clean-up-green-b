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
define( 'AUTH_KEY',          '&E?@WWeif|LG3HtP$r6.mBwT@3l2jXj,uUg|Zb-8KWf$hZ 1)L#XYOF(NhxUdAy ' );
define( 'SECURE_AUTH_KEY',   '4CJ$]fKdj+bTwBLdbhGv2VLqz]Yc%RgC8.`B(8 :L*ToPoN*AiKf@K[^EB69Lc_5' );
define( 'LOGGED_IN_KEY',     'Gl3*o?UbQj8u vs->z%:tA<rBcaZ7Y?P[+,pXsqVy{0s3x]&Z-M&[xi!u4zPxfh#' );
define( 'NONCE_KEY',         'L{oC_Tg8|gnZf4hy(oes]Vf5:)y*0 y]E)00t&^!sHNqSyC/JBw6>2&wM=3?X)-)' );
define( 'AUTH_SALT',         '9?*d33eonl2)bG41WA&#>1np*1oA3:k*O{gvjWM><Z0P6kY((.N3s5Z^Yp;[mo9<' );
define( 'SECURE_AUTH_SALT',  '(wfYiG_Co/0KP:  m*)7baxt=~0):5q=OL79,;X.A-Fi{^|5dYo&$%(kSgRr8w/L' );
define( 'LOGGED_IN_SALT',    '.q}|1opT^cPj%3=Qd0G~HI&Q5]eS1ZO;s^K@&3N/ZU7!qPR1?:MS8$#REI$>K`_P' );
define( 'NONCE_SALT',        '`u;-tpiX]dDD#}Cv1o/zKeTBLN!BZ@pD[}kz8w]1.yVK)hWqE(tYbR@|Hs)=+)%S' );
define( 'WP_CACHE_KEY_SALT', 'ho=@ fQ~pCA0vof1B@:ya6%y[F^@%-Ndhwbki(o;#BC@]DMpB+PCvsj:K.5z#l2O' );


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
