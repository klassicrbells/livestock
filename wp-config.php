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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'M6A:,:P<>DXMAQzd%llMWi{/>?{DOmno!Wu!|U_^HzhiB@e Y&elAt.;w Ot/4s+' );
define( 'SECURE_AUTH_KEY',  'R;s|!,c<>uHF1vzF}C3S)@bR?&zW?w@!bfmMLdNy9oWdcFycjAktW6:Oe=+[bD4b' );
define( 'LOGGED_IN_KEY',    '<KqwT)@=T0bG1[U;Wvi?mWQn*6 1DB#4vSOVj$#7F$xLRZ``;?S?{c(y0ul(oj}L' );
define( 'NONCE_KEY',        'FeYV,SRgV127N9u_zC73.|Eb-)|7:c.Xej[m&*i}^_S=Rj^b3~m0H![xSPqqbg[L' );
define( 'AUTH_SALT',        '8Ql61zz~n~E_Q;be}XWEo(pSUm`9vw2}v5AA}dgqu!!VrnO<ND$|5|4je0hSWw,]' );
define( 'SECURE_AUTH_SALT', 'J<J?FN4q-,>N{a96kwF)W,yFZiV,^$)h8jCT&|24@|HA.@h,jTg]h_50&ano3v3x' );
define( 'LOGGED_IN_SALT',   '|t?6fs!+=1O+7~F<>n=0Bh{T!mIZoNeP++#h0a|bMqY6PaR=@$*> 4Ju<e~:p:FT' );
define( 'NONCE_SALT',       'apWYd<=okSkvs|<:/YqHbYY#NeE(3aT+<-ubRs+}mvUe=: r]B;}qx$KGR4&. /Y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
