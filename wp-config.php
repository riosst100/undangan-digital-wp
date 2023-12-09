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
define( 'DB_NAME', 'undangan_digital' );

/** Database username */
define( 'DB_USER', 'inovasionline' );

/** Database password */
define( 'DB_PASSWORD', '@!Inovasionline1000!@' );

/** Database hostname */
define( 'DB_HOST', '103.117.56.159' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'FS_METHOD', 'direct');
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
define( 'AUTH_KEY',         'y-!iO]&&DxWo0ZzmD&?uB5;,+Hs3Vhg_%~ u^(YBk=fED7nETzDr7hh&D_C$4v+7' );
define( 'SECURE_AUTH_KEY',  'RGMi_kRg&..j5L6SzDo.03W?>bi9Q;X:F=e:8#*OWd@^69Q5S^Mvzo!NE?Kse`Rr' );
define( 'LOGGED_IN_KEY',    '*kLnU9~J29NHwC,-|75=,s}~MVGu+kOEUSpb n^5[!TqO)5#+B#.2X3IF>dshH71' );
define( 'NONCE_KEY',        '9R<w-7U,S7RG$7M<PRaNy`a#VLQ:f$#;:Le-)_nm$Ah!r:(p3sLq;@TwjAbYsVd3' );
define( 'AUTH_SALT',        '}P9<Rp{)Dq;_6QBJ-EpL*UnxaQ0`a?_2Vx|q946q?CZ.r]gJcx?T?XyvskQT1tFv' );
define( 'SECURE_AUTH_SALT', 'd`J/Ve$Y#xc!xX0}N*,]%6_T( 3N?BBwx@ssu1/_ndx[E.R}gYbb<TC):hhE<s7#' );
define( 'LOGGED_IN_SALT',   ')jl0dH%~YS&}cyf&LsNBZ1WpO{a]9mmvA2w>,nj6BIHNx=Bj;TW<UE^v0V.h63^7' );
define( 'NONCE_SALT',       'F%/,[/Q1Q7:?UWI}b!S[ -JgVE[jqlV[/s-B^2}S$^5U[0H:KP1Vi%ET]*0@;;La' );

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
