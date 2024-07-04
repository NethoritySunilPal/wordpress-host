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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webdemo_test-servercon' );

/** Database username */
define( 'DB_USER', 'webdemo_test-servercon' );

/** Database password */
define( 'DB_PASSWORD', '=$Wk{[K{ML6?' );

/** Database hostname */
define( 'DB_HOST', '103.21.58.60' );

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
define( 'AUTH_KEY',         'g:W*F/wYds=nw`zm1)](LiStE^?y(<:=j:gm|+<K&.3xFjX.=|$R|Oc$n#wg:YFN' );
define( 'SECURE_AUTH_KEY',  'latU^QAeCfN%2ddYyt4B|?btK%Fs:>U*;zEj$RkMem(&!p.h@mdfAz-G,9BA~g-f' );
define( 'LOGGED_IN_KEY',    'rU*l|(yK_lNat8@0p)s8/S}-0w2v}jdCL h!Q`?)}EwbFc1+j]Z+h9dPYHw~*)5T' );
define( 'NONCE_KEY',        'Nb7sH-JU2e}lj9Gnfpai[HFZ_WyXv_X3W^je[(prQ=d<=D5 $gZA5F82B^M2ekB0' );
define( 'AUTH_SALT',        ']~%wiD6>_o*L6/v2F9Ru%#JPW sJ=E7;~H$|OM0_D}J1ZitW$#3,pfm2wwqhc f+' );
define( 'SECURE_AUTH_SALT', 'p$V(K+]b]vgsN5@$=r%u?!;H$uaAecGkf)b<MoRfPb*{]a_{>wFM9jVFvPj=?.yh' );
define( 'LOGGED_IN_SALT',   ' ;T3EQ5Yo?@mr%PIh?e28]HqG4#X-0a#cV67v<kWUku1c!1eZ3K#[EbX-N-4<$lK' );
define( 'NONCE_SALT',       '<G[RTG#n,fYglt97^-|KVa,m}z+m~`CSW!.AYG~_YZSQ)l4iUHMGMA_(RK_?z3]Y' );

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

define( 'WP_HOME', 'http://localhost/wp-server-test/' ); define( 'WP_SITEURL', 'http://localhost/wp-server-test/' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
