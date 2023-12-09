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
define( 'DB_NAME', 'undangan-link' );

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
define( 'AUTH_KEY',         'hxSL_Xz7`ZYr@*sdqagD;lFp3kFT`7ZU}Q?4NBa*>&-rn/Cl1a>RjVYd,{LK)`70' );
define( 'SECURE_AUTH_KEY',  'OD}j!&V8buLwS9_49JNL{s]-j2fUm=ZUJMMf2ByC59&8n$s#6(0k4J*qL>aJJo`Y' );
define( 'LOGGED_IN_KEY',    '~Zr?!^^/qCNK>=F[u$LHK9*_C1Vzid8:i,4dXo+2W|e7xigo4(Zu^Z,>>6Dj!lZ_' );
define( 'NONCE_KEY',        '*.d*DMm[<#amvt9; >DdT@@@pb/JJ*u#xI; U$n?t}:=C9H,fVe(7E$*gSCBw<cT' );
define( 'AUTH_SALT',        '+F>aycrBpSr(L!;i-}shK`&ocEky;#KItT$@ VEM8`;,7s/7HjT?]nS1:%<|s;M,' );
define( 'SECURE_AUTH_SALT', 'a3j{z-kh%#uXE+{ky+2I=)EK^i938+tJNi]3R1vu!nyeH4sP77LR9.%b)k,{Xxfs' );
define( 'LOGGED_IN_SALT',   '&=Eg!pG s#%eD4y[yI:aO1*!RCuH?0J#FlK#9W`AE*CVXSlF[Fwa,+/hz6+%A{Uw' );
define( 'NONCE_SALT',       '$W{Vw%CB^C@lbFy#2i^Q71f6}:x~j${8OFdxOj w#:loqZ4hJYJmq,caP.gQRYM=' );

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
define( 'WP_MEMORY_LIMIT', '256M' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';