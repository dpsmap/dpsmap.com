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
define( 'DB_NAME', 'wooshopfile' );

/** Database username */
define( 'DB_USER', 'wooshopfile' );

/** Database password */
define( 'DB_PASSWORD', 'mWRw3wwmbS5xYZTn' );

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
define( 'AUTH_KEY',         ',9 /SCvs%*fyk:ftk81Ok>ZhQY^Gczh=<sny+f!ngE7>=ah~wlp-W|<8~yL6/Ir&' );
define( 'SECURE_AUTH_KEY',  'K=k51 nIC9WX n:u-NeJ+B/oJ)%N?n >->OaXR mg/cc;-Wu{4F><%m6M);{#dOE' );
define( 'LOGGED_IN_KEY',    ')o$7NjqNkI/NaY{|4>%~7eM)xe8W{nGF&GXDi)0N^3l[GM,$8b:D+]h_/pE4e#7f' );
define( 'NONCE_KEY',        'S.|}Fbk{;[OdM=,u$ nkuV|4<Iv!q/PCFWAu1ksir{{Z6brWJT$v?MkLd{Sc3ZZ-' );
define( 'AUTH_SALT',        '!}j2z$=7#T{c4:.pu7ST6^bN,%!D]a.;M`ioLMP4*@z=bT<=RXQE[ruCim~+uGcu' );
define( 'SECURE_AUTH_SALT', 'bR*D+zv!1o%B<lpE=8oY7t2ASdkVW]|:L+1&vz4d<x|ZpA5S&y,`TT5_~mMwQ(F)' );
define( 'LOGGED_IN_SALT',   '>|@tuCrt&TN`u7yk!DWE+g/5`~Y;8Z;|f~kxJ,@(0 G5m,@v*ODVZ,KzyeAqPqoe' );
define( 'NONCE_SALT',       'F)|`tI&d;fMP/,m9aKR3hfNi(u$Co`eMIVyq.Y#|l:5F> ~.6RovhB??db`pRE>%' );

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
