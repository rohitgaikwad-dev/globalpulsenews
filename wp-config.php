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
define( 'DB_NAME', 'globalpulsenews' );

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
define( 'AUTH_KEY',         '|U*WCFU_P]Xdqd#[FasqIN29I|]08P@L7sF#5dqBJr//~s[6F/%Td==/$j^@iF3a' );
define( 'SECURE_AUTH_KEY',  'BR(3/adjVh?b=PGH@H.yxk83w=UUlArbQ7tX}=l_VaWA[U!^5$BDrbho{hA6?xwN' );
define( 'LOGGED_IN_KEY',    'A;ng$QC1]5Db<tE&7T/->y,2*x9(|-GQT4^_!)zSf~te[v=T+uy_eg$t>vzkB9[r' );
define( 'NONCE_KEY',        '!@pz,i$`NIgc#lIhQz.t-?.Jd38#R57O!=VL@rilMg9gvVxy<OZb`bI)GC+&c/KJ' );
define( 'AUTH_SALT',        '&#-PePEHsdQ`^_jSn!E71HNV`ALD!8.MoEpi7H?f#4VV`f/@)Zg,Fbv9}lkGSTX[' );
define( 'SECURE_AUTH_SALT', 'T~pDfSrGn4p?c?(xF7FQBRV^?W.?g$3k-2.Di!N@&J%YSzo,G auSQGW`mQQ2;.N' );
define( 'LOGGED_IN_SALT',   'JjOLsa{d:4&34zO:bn!?y<!(h&&qlj0<-/Z;]6-K{;s}iC-y:=Ic{n6p-|OehR^z' );
define( 'NONCE_SALT',       'UFio!>5HGEW((CKX{0)Tio1A*?m0?fZe/.l7zlIU2udj<-kea*X[cr+d&ZnbB|4P' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
