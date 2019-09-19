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
define( 'DB_NAME', 'maservices' );

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
define( 'AUTH_KEY',         'sBX}tT_+v-^x`Ff?6M|drP!RZGBpU(+!tf?KSoc6x8u-wY8r4/r?VzX}mLc4,i>n' );
define( 'SECURE_AUTH_KEY',  '=$G.7a%1FZ4uNs5t|5@v!J9zY|Wz9yV-u},+d:WjtJDGYOabl;n&$[t^|Mt:;%8.' );
define( 'LOGGED_IN_KEY',    '8A_z:EEI~W]iX*H({2h3H|JcQ<pggj^29QO45[-W~<+,g H[]e!-,JtaK`w]wD+F' );
define( 'NONCE_KEY',        'HLy#uHdPKWApc5;}Wivv/=gqF*n<OLs`nmwE#~Ci*3_wrCuGH{S2vKF_UAsCXBcx' );
define( 'AUTH_SALT',        '02C?qiV?IS*cG8<pJyDk<f(c}xq|5uli!1Q,H&?9-{vvEF&6[JO|[dhQJb< pSx*' );
define( 'SECURE_AUTH_SALT', '8HCH3yFu>HwbJ`{)J$1ix=jhrM<X6FgVS`sA#XGq@XB5<,=R=-454iD#Q-o{gFK,' );
define( 'LOGGED_IN_SALT',   'Y5v6}zn`I&b5/a=L0anBgG(IBCF$<I9hJ~eL9c%,_ST`0cfp+j+s$YQh0v^Z!=|6' );
define( 'NONCE_SALT',       '~}0.FtgF$&[2sHHrI?/d0=n%jd{~t%#$&L`hg4rC/]T$XP:G9%o5tvXyar)wrGf1' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ma_';

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
