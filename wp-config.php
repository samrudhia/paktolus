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
define( 'DB_NAME', 'paktolus' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '#5SKBiX>XYIU#_`Ak%}f]cKiX[_R-kaU%UOA7=_k@Eq6Y)=Wl1gegn%E-MpCzOgS' );
define( 'SECURE_AUTH_KEY',  '=DJ^l?Uq-6_8i@xYn{NPt;d+5&]t/q~y4!N{4L+O}|yW!G=7ktO1qz+ z{*+pE9E' );
define( 'LOGGED_IN_KEY',    'dYfOCn12py^Vz`36$])lh7 g~h[d8Q$d<kEJ0>Hc).f).T7C~ :Rn4N+L1$1(l=q' );
define( 'NONCE_KEY',        '@n]*:tW,DcG,X%_#Lv@2CV.`z-~U8+bORt(-p<AiO`_$eS,G^lHNK+D9%&mE]+m!' );
define( 'AUTH_SALT',        'sSi!=Uw~jD)hwIk|cT58QdJ8onjP2el(?:6Dy?*h+@FALPU;)IUh<%Dh1=3U!s%`' );
define( 'SECURE_AUTH_SALT', 'Nr.uV.[;+./$l09D<AY_6|%[2f_dCYYl`0:Zj7{2^>r%{Bhfs)6ns9QnV}2,)b;/' );
define( 'LOGGED_IN_SALT',   '!Dr[TD9W@wL!&~)i/lXdAE%r_<6njxfESnT8f[$5rW;vYdIjDz$5K=+NbMMC!n*+' );
define( 'NONCE_SALT',       '`WH^}O^1Fc]/23*f5P>^u]:$z%<0pp6Y2*6[FAofv:mh&4CT03NH)AR`p~9}&.k?' );

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
