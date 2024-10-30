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
define( 'DB_NAME', 'borsax' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'E;MKEDN^$`WS$Df:#<0pE#eG.!`Oyv4q;Q+nwN#`K6B 76a=;Ojz.7v!37FVbo8>' );
define( 'SECURE_AUTH_KEY',  'k_x9a=g`j>{P;4_>{AxKZ%%{Saa-hxb?-3.H| ;fZMY5lXE9I(p&q~Z|m7-a_F=+' );
define( 'LOGGED_IN_KEY',    'LwYuEYwBJ)EB21}li@tlcg:+]nA*73909Py2nmdB}=P2XR#`^T^J*c:5rv*[9!i:' );
define( 'NONCE_KEY',        ')c_<qf?HSas^fQg`lU+3?kd7$[:8}%@JufvLU.8WlIy(OD.5Y]]Y|uo+}M7|pKot' );
define( 'AUTH_SALT',        '`E|k#0grsZbZR,Ufhqe|ZB9r0Fr X3)$d?6(g4O5T7~ZIHM_@@.:G`Y(yMB]owN2' );
define( 'SECURE_AUTH_SALT', '6g}a@s+g<izF%2}UHIIU9<i_r^KV*B-qf26}BISbG@Jdt^Aw,<k+an0 !Ge)Yny_' );
define( 'LOGGED_IN_SALT',   'Ta%=60oPs[-?-rI|D|otE%z0WUz,&Q)fvn{[.d1D#aU>!!By81)W^m9uQI !D&z/' );
define( 'NONCE_SALT',       '0yZ!=M||Qa4ijS1r50%he`G0-WMlqV;tgNy,,sadmXqt!Q]uPk:Jt4BF$~}Kl_+z' );

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
