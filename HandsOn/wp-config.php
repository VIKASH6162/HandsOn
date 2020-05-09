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
define( 'DB_NAME', 'handsondb' );

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
define( 'AUTH_KEY',         '+rDicQN5|2L:V%d;T4gKuA9u?t~+2`:J{Tef]095Lo)~N.|x{s3q:OmRFzjp}/wY' );
define( 'SECURE_AUTH_KEY',  'Ux&O2`L|XZS!RU@P|^)7=O4-1uSSy9VBdqgZu;R_9Q&~.y c!pjw2#K8U1P3|LOU' );
define( 'LOGGED_IN_KEY',    '.[$1cJS0D,&q&wL(< I;Xma.dqmrZ:tuW(xgmWsR q`rWQa5^gG=RP{n1Hq9TiSY' );
define( 'NONCE_KEY',        'AFWRsQo8eN*V#2V)f.JU<)K@[e#;@IB2, ZP3(2.DlkX~+X/XG<Zu@Su:Qd*)0,:' );
define( 'AUTH_SALT',        'y^k2UWX.#*a.=.f&Z]Dxp`hP8FtZ;2KT7TJx1?77%b}]vcI;ykoIV[I?Qiye]}7v' );
define( 'SECURE_AUTH_SALT', 'BCvccAz3h1RA~nRAZn?d0~D)m7YIreZe7*V<AvqybR swJji(G!L/0oW<|[8KFkQ' );
define( 'LOGGED_IN_SALT',   '3b&4LY}RfiZH3|8M=5m@LT+U#&D|.JP}ZV<yg8!q|giF?+wA+:~UU5E9;`xizn;/' );
define( 'NONCE_SALT',       '^T%roy**!)~l)zAiE=&+R}34 3xj1Z.^1zc^dP,Q=W~Q^KfG>E/FDr_%9ao2@0qp' );

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
