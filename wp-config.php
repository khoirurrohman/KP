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
define( 'DB_NAME', 'karyamuda' );

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
define( 'AUTH_KEY',         'Pe5f=tJ,orT+ /Y]V(Wd pD~9{:-#/Nz?>o]P9*,X$[X{g;_8.7:q,}Krz515bu%' );
define( 'SECURE_AUTH_KEY',  '/tb|pnDQ(p9QBwA1Koamc=j]Fj!3}OiLGEJ1MWp/O`Y^2=U6WiU-//R]WRd=yG3<' );
define( 'LOGGED_IN_KEY',    '?`RM[y>1H-6g5]cL2&D}PkMOI^<kv+u8,&1S2q!3AiJm&f:XU(9Vv6?Z>Bm:6y`C' );
define( 'NONCE_KEY',        'J:;>!i]*zhBEm(Ssu;zuJBvIBD$P~GmlcMjc,.0W+{*]{VrJk<+Oo![4zQ3<F$UR' );
define( 'AUTH_SALT',        '<@=%MQ5${XVv?JKDHs*Vx;mMel~Mm7?q)US;~kPtT;>me.>ZDLZa_xhlmexFS+DE' );
define( 'SECURE_AUTH_SALT', 'i7&tW-%CnA!_g<7&fQuWCZ:=#!j]M)V#<P,$fX`i,+,Ou??%*O*}qP[UcFUH@}=D' );
define( 'LOGGED_IN_SALT',   'V{&_  `_&c3noX&(&JZa`xgmY, *#G;+6dfSGwh$d`+%rVh?r2-K%$&hOcXy(iO8' );
define( 'NONCE_SALT',       ',}PY0KHxX^*gGG)Yj[e,P>7PtYbQf:~:-a95Xv3U2$(6U;+hjp7NYqrf02nQLe($' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
