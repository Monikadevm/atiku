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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kangondg_atiku' );

/** Database username */
define( 'DB_USER', 'kangondg_atiku' );

/** Database password */
define( 'DB_PASSWORD', 'yNH&LLPD%Hte' );

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
define( 'AUTH_KEY',         'x&KN^ _(C#_8.+I.M2;1}Mr>H((7@l,.vcL9z~_9Q.B3<YY/h&0|/z8x}bC;!jP%' );
define( 'SECURE_AUTH_KEY',  '.nO^m,82NyDeF1e=%<eJVpN>E/SuqYbYndAmX;1!`8=ZtIRGF(;`px2a]^ZE1T-@' );
define( 'LOGGED_IN_KEY',    '@L4jFL*[Be^qVTOfe`WXVlNtPE7 4|iw4=1sx^ z9X[<:n<OT3yw&i05H<#a/z 5' );
define( 'NONCE_KEY',        '$}-9yn?Uze.+HjAPU<p/lskJpCN}P;CZf9-]k}km4:oPMM]1*caNBjR&plW6o0[;' );
define( 'AUTH_SALT',        'kD8Ton[3+^wUpiD!kGi3-tyR,&~3YD)5-M7*yMRZu^StB[nkV#|jr2]W<lO-fG`A' );
define( 'SECURE_AUTH_SALT', '^tKRx>rJk_SeGo<D6/hCsJ@Bx1%&/h)S>Z.=hb|u0L5y_KISQQIe20OB4D^l?[ ~' );
define( 'LOGGED_IN_SALT',   'Z6Wd,f1X?bK@)omykrGV/#-9b4@Vv.3B7G><qawsqSS8G$?Tf] .5h1O^Q&4K+b=' );
define( 'NONCE_SALT',       'fvfsW<^?$r9d~__i(5!Xw=VwsQ}Rd#8{bG,VHz.KM]So:mJv{vTPy;5]Ztu(~(Gr' );

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
