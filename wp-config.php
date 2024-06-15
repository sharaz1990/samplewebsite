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
define( 'AUTH_KEY',          '}SKOBW5oBAPu`RJKKVtT{A#b,cm9B:PCIzi@%.#FXwdQX0fl9G7*}@?&Z1{_+t;]' );
define( 'SECURE_AUTH_KEY',   '[4}.EekS%veobQ{89Xo1<?uoJBU%Y4;OZIrIvzH^(46I-eKqv&b<}|yKy`UG&~:W' );
define( 'LOGGED_IN_KEY',     '4<F*qI<Jcb 9bm#$)[4%,^>@GX=rnM721fsk:?9uC@k/+_Oz}~cC:g MCT~Vnn7)' );
define( 'NONCE_KEY',         'u?%99YDiG]7SJy,k/ctv@@}acz2ncz0:JxB/A6>7tUcCZJ@;.;==hOU*!/#zq8,@' );
define( 'AUTH_SALT',         'If9*c;I2m5Ps%}RGY*|WB5MV$>L&@iHFEi#MT9|bM[Z4P4svB BV,5&2c7~wZ>+q' );
define( 'SECURE_AUTH_SALT',  'hi`+r:(V-/:Tt!IbH6[o!$]bzdTfnaF9O{j<9)Gvv=q/j7GqRO2]=I&J0[-KjDs/' );
define( 'LOGGED_IN_SALT',    'jw5|/sTJpO4P)wlOpG6pYS};eG?a}KElhU>>1r+`QNz0]PYT(7Fee0t .9qyuk$p' );
define( 'NONCE_SALT',        'DIgKi(].6E>]Mjpw7NQ^^sP+EjNX}kZT-5PDIQBD3F-c5e]f*Ta&#!Ggl<V Qy-M' );
define( 'WP_CACHE_KEY_SALT', 'RbZQ#pTh=JzMdVo?~<4BoKuiA@h`-;{ILeAR(VUC]@Ghf/8F8!2.!gkxp&nn(N86' );


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
