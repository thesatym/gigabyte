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
define( 'DB_NAME', 'gigabyte' );

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
define( 'AUTH_KEY',         '!&N[onS^PG-+umHVnA{y=>{QupQW]EX1kTWbc13o4q{PkTPT><jb-)M)[ hZhwwx' );
define( 'SECURE_AUTH_KEY',  '?=nT`9fCC]fGBj*=A c>M{R,8@*XGzcX;:#]%W-^it_RGuwd#S}9)zG=;($!3*v0' );
define( 'LOGGED_IN_KEY',    '40PwXgEm4y>C@sLNJ:u#UtR*nFPBi(X!bg9|w&95`9/`dHMCchz?$<6A4|obfL_5' );
define( 'NONCE_KEY',        'PVi8:&PKGO2XQkOZkt-oG[I+MM7{/Bk0iy#w3./CUuW 7d0Cc!WJeu(&{6IPM3>6' );
define( 'AUTH_SALT',        'SM|A|O5YSuDQw@>LZ;Y}@AGJ7E+B3}SJXJmlAm}[9x,~GO QV}[e>)LEcxTViwgJ' );
define( 'SECURE_AUTH_SALT', 'XJM75]W?YMkS23Fa&<x!I%3i~z5~02(xQlQ?(~3EL47)?54N?Yt/FJz33J6!v{?`' );
define( 'LOGGED_IN_SALT',   'n{:n[CMq-DJIhBRF5o_c)%d/]Vr/sC*cXy=KG;mXlGN)ag||f?i1V%G3dUuh~}q*' );
define( 'NONCE_SALT',       ' V:zAn3n:~r WY&4R9FSqX?03&qC,}(Arp@0OK5xUwcWZ-MuaRT;3bl_Y+u)VHZ ' );

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
