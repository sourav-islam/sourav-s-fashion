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
define( 'DB_NAME', 'sourav' );

/** Database username */
define( 'DB_USER', 'sourav' );

/** Database password */
define( 'DB_PASSWORD', 'sourav' );

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
define( 'AUTH_KEY',         'm6r>,OGn /_w&]-7hm&a<^j|FttiD4C<lhL0@?!V_M){H7@8w0r,2Fu;t[LzLrYn' );
define( 'SECURE_AUTH_KEY',  '{t8orYFP{u;NIl07za;oWAAkITjpU3iAZUU Ju$,#o]NK|mndoo feBLYW32 EU#' );
define( 'LOGGED_IN_KEY',    'bG;YaK<y&HoEyd(6# my~Vn&^7pj$|>v/yqT[s?AX-5H9+vxwS>=@_/J} I2T/#@' );
define( 'NONCE_KEY',        ':VAhk <3JI CT=uPlw#wwZ)G= Gfw_eu[46G1Cu/9*ASKqB1dp$VWp?JI%V=vn]/' );
define( 'AUTH_SALT',        'JvWBs]}O-tgKI(,^`,W[&N]B[85S{sw1Xs=KM*#d(9xzDS^-&pmabc#(,*2ZZCk8' );
define( 'SECURE_AUTH_SALT', 'qq-_)|34]BJ<NP>eWo*cX_tx;d$:y$gn[JP>rgO]iSM?#1i)3P)k=80ryU;<i|Gj' );
define( 'LOGGED_IN_SALT',   'J*@^NsH[Ty0vZnK(?xB{Fs,g<)<ng:bv5,htj+_YIm*@GAre {mP:66N-,W-8Us6' );
define( 'NONCE_SALT',       'zOM{N}iNVxZklG>w#!duJ.ceeWo>y`J|cPa9iMNa5?MS[ai=EK8%G/kWZw@D~Vym' );

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
