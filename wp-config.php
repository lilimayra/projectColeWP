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
define( 'DB_NAME', 'colegiobd' );

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
define( 'AUTH_KEY',         'f=c}$kukes[EP0%fhj7JAgpVb;Kp[K^/EK?L30TxHK*d<C$jt9XW[s_ea? -DVm6' );
define( 'SECURE_AUTH_KEY',  'k]W25pJr}AJer:PT!A^><)=_^qTQG~F4qI?d#FV}]NTJ;T5?=#mWgzOZ>CA`_B_P' );
define( 'LOGGED_IN_KEY',    'Nj&1u#J{:r!m#drev=V&$[V^Z4Q]#hQpqKo@u:+:P?*.Y}Yo+=C4MK8kmASSJ:{X' );
define( 'NONCE_KEY',        's8TK+D7Le^*dk.WP2+<OHQypz&7fqA+8&M)L2$~)PLSoq^6gFS$(:!AYl`[OMKRz' );
define( 'AUTH_SALT',        'Y8FyJ).DXK<?:d8nv#r.HaNxz7dr.B=HSk%l`)sx&[/b{N[ag4U!Gs;ciE3~?T2Q' );
define( 'SECURE_AUTH_SALT', 'q{NtP]+:a+[FYURQ:chR+NdkWkl/Mqg%3:w?&L>9]pUCha*Hu},.EPl3*Dg &[W0' );
define( 'LOGGED_IN_SALT',   'Nz5NEgc7Z|:$]q)]?Z`nDqZEoTl`fUh>o]BuUgbx[kGHW&,c-[XZ>;c%u2/Yek6y' );
define( 'NONCE_SALT',       'b-X(Wy^?~JG5gBYdS<:veC|j.L20(+A$C?9dq?uC~CE!bXpe(Mhd;aHeF!31IxB6' );

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
