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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '09Uv+mc{JlSB$` V_`rby}DPrzm/p]+wf0QjPUAk/X2{s:T{Jer;Pu#9.W;pB=):' );
define( 'SECURE_AUTH_KEY',   'F(hME80Q1d=9Sf:=rfU+ $gH.,69}K?t~$eGyBa^}Y(6VVt2$Y,(Zp7AV;~oZG]Q' );
define( 'LOGGED_IN_KEY',     '?h0xacU8RUqy.Q Y,Rjt8Z6pet)<,/KuD?[KL;5}G=4QzrGa^W![ki$#O^Ks/yP)' );
define( 'NONCE_KEY',         '1;q0M|Iei*^Mg$ja{g8EN(Pl%vZ?H-&n:xL*j?t_z@(:S*=3D1DE_R&x;q]G)Sg3' );
define( 'AUTH_SALT',         '~%4p@ysAVg.{qN9^`Jny/Vs9YK8U9fILQ*X0 4Q_N`mNcgPz@%v~ VsDs7PrSZ0o' );
define( 'SECURE_AUTH_SALT',  '<tHJcG#SBWm_Yv>+i?zT@&epV][/{Oya/-Eqg=:,b)2JlefM]MU{xuY+%K6okPiA' );
define( 'LOGGED_IN_SALT',    'curj<;Y&`T}BS$K@Xr@mj/e6@tp}BjU$(#yc>W[2zh-;}a1F+mr]5niB<{@S<A|E' );
define( 'NONCE_SALT',        ' {a{=eq}JMZG; ZAjRPqtcae|-j11X]&pE*IAVQSe3toi0zm~<xLyOtf=]sQF(z!' );
define( 'WP_CACHE_KEY_SALT', 'NnmOnAkqgTtZM7OH)~A/QGZ}S~hkk6SF?j&Kw,Y8zSdAeA,uPY23_FW;|y+m%?.M' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
