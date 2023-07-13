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
define( 'DB_NAME', 'wptiga' );

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
define( 'AUTH_KEY',         'S8Z14YX{WtWJEx7;%2CGXP,P6P*qq-&F-qQ0pmEQk~X#ev1%](36=`cq7:1z*u$5' );
define( 'SECURE_AUTH_KEY',  'i,sG#6qYgqq`-b^}tzIms }UAG954%L<&n=GfA+15i+X&C8}#pNb~VG0sYs`W-$v' );
define( 'LOGGED_IN_KEY',    '=NIyb3 [h+)MgC)P&Wo)1C+Ymc~k>nk&N  qo!mu!4@5y9dhDAV4~qF[=}~[U-Z=' );
define( 'NONCE_KEY',        ':FA=P_%<?av75lP72Ja->_GB2/Ng&13.rtp2XJJD.(vs7>3ZmL$=6ba^|y,WWV1a' );
define( 'AUTH_SALT',        'nXeZonFT4olo7=&&ZZB]2HRl[{~iU#MZ)@UlZT+)NW:!h:A6;w!s5&V(~J-E<<xm' );
define( 'SECURE_AUTH_SALT', '`b+yw)>0E^]`n03 <X uSTde(Qbl{6Tzw9uQno,]zHNxNN^a*_1n6H7C.P5@a#-f' );
define( 'LOGGED_IN_SALT',   '4=P3ZUyM9K[7M#,(NT8<gdS=LufC_+5Fje7Ff.uQW0V#2)UFpCE[x,c/hLr<0|4~' );
define( 'NONCE_SALT',       '5.j-lq>3Lh5axZq8J/mdeIJw,qpMds.iUNQ`$R[P4G{n03%5k.o,5+Bb&%~5?yAw' );

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
