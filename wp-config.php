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
define( 'AUTH_KEY',          '`vmjEsmJ]#mc%$#G9G*9m{mX1pR`qkP2,0;^/2pvCaCP%ZQQvu)`Ed>b5Q-0g]JH' );
define( 'SECURE_AUTH_KEY',   'nja;}h3.v(8d!0jfq-*-*8Q##*N09$C6tdN4#(_|v::&+6fq!`q&L)~jqB6jH8_(' );
define( 'LOGGED_IN_KEY',     'VoL@y]9rufp%E*H#]f*(1LSlGYv]vg5R+E&S4k*,K{!aNS0MFY )b7$QhQv.T?,)' );
define( 'NONCE_KEY',         'iIFV:k2o5}kj>+iA+/Ohci}pY_J*yX6LW:/c_lPjF[z;!9cL}2on3GDncmYglUu>' );
define( 'AUTH_SALT',         '0:(=/Fv|vi ;gA$Cr/$mYown(D7^CE.!]?jsXUpLO6?#Tnr4g+vDldm0[E;u:AJ+' );
define( 'SECURE_AUTH_SALT',  '/-8G~zp5r-jl{_[Lrup.FO[^&t>5E|i2#@;KCv.]H4-L#^c<Uu0lxvN3<V|xskRQ' );
define( 'LOGGED_IN_SALT',    'o6giB^G WN+i{,fxP4#%s$r3m}T+iMPb7BL+UDftW<CuEf&;xP70T7*{gz6(I??e' );
define( 'NONCE_SALT',        ':Qqq7^G4z5841gUdcBv],Os`7NHBQ>RtTIroAnh_@}`:?h)6PGJ9h_!:n=GO}t//' );
define( 'WP_CACHE_KEY_SALT', '$9rthMIiGa:%sM:dkmHj-TE#F`gUIWlN %hFRZ(W;105`YizAx@(x&O`HL^G_E%Q' );


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
