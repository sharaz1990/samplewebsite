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
define( 'AUTH_KEY',          '.r;6b|)({ 6H7aX8UgCh:TV2Py|}vpX>}P,!|].<6K2QbooTA,=tKnTx@ZTO]#?Q' );
define( 'SECURE_AUTH_KEY',   'Jp %gXYI`.Kih.?*g@f6$O@k*Z:!bVQzq2+eg=8fT0_avDPDIoCm/E4bB1Qv6anj' );
define( 'LOGGED_IN_KEY',     'ZIO,}.m3Cg`L@C>x+Yc1G^x3z<ZlbIY9jnaiH%OX&V?WBj7F <Zyc$Q~D1^Tf$ ,' );
define( 'NONCE_KEY',         '`U>pR?XJQfvV~gQOF(L6C2@Pbd:=4C&*ccK,-ags-mMZT>>?1 PFhgmr~0#kE;(D' );
define( 'AUTH_SALT',         'g)LGIJZtw)HCiQGr;0{ux4VPJ pvM0Vl!b8u;_F0UJ5W=gv)jI{Sh+0/1@|s%wZK' );
define( 'SECURE_AUTH_SALT',  '$c^&wD(kKhid:[^Ufs867ao8xZy}Gjt<wV^W1%~RNBUsHSag8  dA,N7M(-PI4Fj' );
define( 'LOGGED_IN_SALT',    'S2Wx*A_V_*RfdaP^Gte:YaoS[#C]Gh].Yd}N%iUtjUvk]m%FX1MwH8hM4(t-=Oho' );
define( 'NONCE_SALT',        'OVpR[B;+fVwcx*iF8c:$0wG~QA7H4_dU>&zR5%SQ(S7&V@`.!Te3b#x0-`@W=a4Z' );
define( 'WP_CACHE_KEY_SALT', '@_vo?7-c9LrO9Dv|wo=^UTA3.pEsjwCBz|Fsl9|*T ~ >.M p^Hh@B7IWNraCvU/' );


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
