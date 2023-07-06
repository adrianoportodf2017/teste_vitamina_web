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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'teste_vitaminaweb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'rEKI9hE}%Jv?k=O51x3x>Riz&s_}Db]L=yaEn;/,[C%Eq-cV V[pMQgAr^/oe/Q8' );
define( 'SECURE_AUTH_KEY',  'GWxbhel|tK.6Z$-*bq,b{T_kRxw/(TZ@nxcTO52,g ifezoj!Ps5%fa&84ykZQi.' );
define( 'LOGGED_IN_KEY',    '5Ws-Nc7|huerV@,2WfT@3)7I<?KaCQH&z$FEH1z)$k)!x04r&S}eG.tol%FFBtb ' );
define( 'NONCE_KEY',        '<H)$A)HX1fYp9c1<:wW,{/&IF.FR*sa=m,G`|z@LhVzLMm2_/!z`Nt:R|v&%ruD<' );
define( 'AUTH_SALT',        '3n5[ }+8,;JCdXKm~:_N.0}(?ky(nG9~;^pt4>r?J]6ae0V7_cc:bzJyi>^m/``b' );
define( 'SECURE_AUTH_SALT', '9Wwm?p9>*B`4r}/0k^KQS7)m.bb)Utft_jY{E4{U!qN5!2n/ma.nV/E>EF3d$Lf#' );
define( 'LOGGED_IN_SALT',   '|lR*$0@WRgN5E:JjD-#ab2`.P|f=,G10UJ9hT#Z1monp [AlmWVo^*2dakxqQ I.' );
define( 'NONCE_SALT',       '8.}?/N:Q^fPB,Y*BXc|O-ksC@l&Z$,ycKL(:tV}Nvw54eKXX rj5J#SNt!n <8*H' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
