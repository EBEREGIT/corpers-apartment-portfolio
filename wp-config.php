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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'corpers' );

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
define( 'AUTH_KEY',         'HX!QhokQgtGVf*`rR_litIa(R)4PO!]$CAk;^DcE5Z@iFk_P$%@#[PD@Efo>4uu ' );
define( 'SECURE_AUTH_KEY',  'CZ!_AYVa}#+XcB{FVQGjKt) !WMV6qiZ4UYPkf@kr}s&Rw_OeOh @;,;1aK2v&YW' );
define( 'LOGGED_IN_KEY',    ',}^Q|x4i<?}M$c^Z7DV2H@v`it=j,v$.f,R7f9pE0MoVfnnE~.>~;-_TxM55webD' );
define( 'NONCE_KEY',        'g{mI&#^BJ~aL3}/;:$*+K6O&QX,YZuqz]O}Fo9=,L;o$K_cM_r&P6k5n,%D2Y=vb' );
define( 'AUTH_SALT',        '/4f{*t}v(K=:YdY^lorlXb=nl}Pej.Xo3fz5 ?i7HS2~$(J@Q:jlWh 0;uC=`^-s' );
define( 'SECURE_AUTH_SALT', '.8fQjoORAx:3PM|YE6`le_*:Yv?%kZv8VMhpq+CIW#HeD1x2RyC[heV9C>FdtAe#' );
define( 'LOGGED_IN_SALT',   'iS6a:1]>@~ujh ?LksuD)lpkJd3%wcvctyQ0fJh,(Fp|E;c>|s*+z(;?!<KPgB&j' );
define( 'NONCE_SALT',       ';Q%*rnX8JN<WNKpA}C`lQ2BP0hXQ_I0u4+MkG?Tc{8OWX5k(r.G*OuhF^L g&=5`' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
