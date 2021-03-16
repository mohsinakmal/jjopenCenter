<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vpneng' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'k|-@su`82-OobIEhSiUOUx+Fut2V?T#=,i)}`EW1WiE?SVjens4R3pqE6@a:d[8z' );
define( 'SECURE_AUTH_KEY',  ')PicB4GB) #bRIG/--|#4[TjN]*_3wac!sAkIhnd%_,N]d<;7R!/E7N{H$NpHv<h' );
define( 'LOGGED_IN_KEY',    '`E:V&CHSUZKK99hDW ]nb>:kKQ_$3@&w+;AnU&Tpr!,C+%;u)@|m6eqDi4n{Zo)p' );
define( 'NONCE_KEY',        'Gh;h&si,o9#$w<xnIl}}gN@mJ26+9KbbCv4GGzx*23L+*G9S5E2+oP,@SXC)nUr+' );
define( 'AUTH_SALT',        '<5YMVg6X{zjuL**5X4DJ+M&N+?n&H N|Z.Q])Y <K|7oi|9$qVx_J/+oJK&X{gK!' );
define( 'SECURE_AUTH_SALT', '5j*kU^.|yWKGty~hk?+*76z_n3`^DfFd!2W&,>PZ+D}@^N-9V#1378T#G?Lnz4,(' );
define( 'LOGGED_IN_SALT',   '-Dn4ns|q.fe#@gIcV[8bK%86&Cfzi6LQiAXl`RR_|H.1;qZ4`oLe(#RIa?e0L9y@' );
define( 'NONCE_SALT',       'MBiK*}bSG$UT,/2^J^=<+M5krOXuFEt/ZbGpl_P(#BIRb;niAyop=r$:CnfEi|Hn' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
