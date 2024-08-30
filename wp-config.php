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
define( 'DB_NAME', 'cafeteriadb' );

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
define( 'AUTH_KEY',         'mNw.`$Z0XM }}`ufMDv-9 AD#YIitT-Ne5il?1}Lu6^V9iV4i|$E+42O}P;t2/Pn' );
define( 'SECURE_AUTH_KEY',  '2$7W7QS*R)j44l+fGt +Bw-FDvaK4k_Fw&J@* `evz0|weD37Qdym.#FXm,[@#q+' );
define( 'LOGGED_IN_KEY',    'eGbJV+vRMXqtL*?KxC{:RjAi.SL=;lj7oT,dzbNT-zH_qy|6?H+_TRgy&=jfI[RM' );
define( 'NONCE_KEY',        '/_9h7-ej6ZzH;6#375vu DvNyqNg1erGpP,%psKk-CFK;ey3;k5xrRK-]0EhTJ3i' );
define( 'AUTH_SALT',        'w{fd@x$`>l>Y@PeMNV|x)yk;aNd.W2;r<:H^j,U@zHBNN~kPz0]d41*l[&8U%iZo' );
define( 'SECURE_AUTH_SALT', 'vhpM^h^,5?!a;Pv&IV3zpoTzX|:xJ0zd:6dk=9^f7W}_?P8W<#a=tprpdkgaImN2' );
define( 'LOGGED_IN_SALT',   '|~Q0m,~h.y[ Z6}yF:oy.-tG39.`C/)f(eg3{.iTE&D3H(!eZw!V0nd){^]pZ w5' );
define( 'NONCE_SALT',       '(XH4dMIF&%83M.QN}r f&/!&LV[_, T#XM5NWmC)eT3k=~q ?4;{GegD{HB4<_ev' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cf_';

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
