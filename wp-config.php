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
define( 'DB_NAME', 'abhijit_db' );

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
define( 'AUTH_KEY',         '<H*B Hd]dRDQ<1,ARLwHN g96hhgJPHjV~Gf {C(15OolV8)6,0,^xfxD5f-2cd~' );
define( 'SECURE_AUTH_KEY',  'zzo^rTxE:4QZMZ,Lgx^up`K$)orn>^`oWUsv?fdWZ#g^DJmhGV9`Lm9tJ6u4VYj}' );
define( 'LOGGED_IN_KEY',    '!uk6|/Ru@g5`-<{C.7.rG2UsV.<K6s5pEz2#<$*A{QNz!`{anQ-q^tA>#gbGjj2,' );
define( 'NONCE_KEY',        '[d+#Tv+/QYWZnQ*M}iJ=-KM|Pq#gG{/6C_|DoBimOuYf~#p^K#m-$f(j=u[V}qh ' );
define( 'AUTH_SALT',        't)!vv)e|?E,VcUS0Gnw0a@6WhbY8{u?Wd0Y~b]`*5g5G:?9|Nw+V8;ev(D5i8.x@' );
define( 'SECURE_AUTH_SALT', 'M^G`<Dp*g.Z~>.#.b}AK/3z(vBb>>YOk h]xE2]#jnSxh5TtfmJ:x<GyP;DL0gwf' );
define( 'LOGGED_IN_SALT',   'nZ^zL>cz/$y3yy@A**i1?4rI9[tTK8=SM2>?pkn^capChl9!#&koCOm3#`6HA9[{' );
define( 'NONCE_SALT',       'gm(~Gl.w$Byjyi:k%SL0dh/8=j>lcn` BvN~u8.gWJ#w+txO`SV,!bG4<^_t m_X' );

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
