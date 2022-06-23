<?php
if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
$_SERVER['HTTPS']='on';
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
define( 'DB_NAME', 'wordpress-db' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'pass123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '-z+:^HDf&OT~x,}fA8q0,7AIuy|tO=ur^_LQ#5]_c.@:f,[JVEJ k!9ea]x$:]|V' );
define( 'SECURE_AUTH_KEY',  'Dk;j&T+$H>%Z^bYDH`VC-*8[|E?yxkY]gRPur}+F[gU8k]Ti>#IF6N}-.zYCTat_' );
define( 'LOGGED_IN_KEY',    '*DT{_=-Z.ms+wwt+oy+9E6obV(ZK sqK%oVWooKZz.YB@Ivo&;~.K ]7{lL<V_}J' );
define( 'NONCE_KEY',        'NZ&L%6MmpT%dE()0TW;|lV6eBz0&VQnpCQL`/8;-+h&RTV!H6c,+QfdQp6RU/qJt' );
define( 'AUTH_SALT',        'I3d#mcpR}Im6k~zYSI^s,!?sZ$(-+Y| pN>D[-nnlz:-{y6mv8_ojg:ij+hXHFio' );
define( 'SECURE_AUTH_SALT', '5H;0$)2]K|=o+#Cjz><$~5HG)D=mcMp`@[;+f>q-hS NaB L?x_/5PHDwPN(Zs4X5H;0$)2]K|=o+#Cjz><$~5HG)D=mcMp`@[;+f>q-hS NaB L?x_/5PHDwPN(Zs4X' );
define( 'LOGGED_IN_SALT',   'G4*F3,oR;XJ2|qZ`|;jb$SF,(@6R`{YcG@VQ-Ne9Q4HMe:y^[.V@F7E+K%Sey)^N' );
define( 'NONCE_SALT',       'TYw[K}:L1+.c3/^f|@]37o}IH(}tG>zFFa26kO&PEmbxsgP|6MY 9/.NbxhC`SW-' );

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
