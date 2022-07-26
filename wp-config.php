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
define( 'DB_NAME', 'admin_wordpress' );

/** Database username */
define( 'DB_USER', 'admin_userwp' );

/** Database password */
define( 'DB_PASSWORD', 'Rahasia16#' );

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
define( 'AUTH_KEY',         'D*o22)MN6A IUtDVk$n3E%dz7v}$4ha*)^>iwG7FVQ,8L_=(;t#!bgU[GMuy2Ufd' );
define( 'SECURE_AUTH_KEY',  'VKmd%u3eKeiRQ*N7zw~|!#-~gbgyV(+d}}4Yk6v,.E3ZRIr-yfK7th UL`XpZ!{F' );
define( 'LOGGED_IN_KEY',    's>wJUrv|&)4S581!iS=1r;K1x>eBl`M;fB4=m]oI ]KGFnekrcAHY*yI*f7IKGZB' );
define( 'NONCE_KEY',        's.d~v8gR-]4LVe+jP(eAS+F_0p$,};.tE@35Z<9t([Wf]z*zp2a.;}Z+c]TE5}Mw' );
define( 'AUTH_SALT',        '~Pu-dXt=-qZF:bweIkgqm:BC;sYcYkvk:=hUe?bx#ZkdR%R &?{NQ|_E~@9<5l+x' );
define( 'SECURE_AUTH_SALT', 'WtM2cD(jLLa]Mk`sf~6eJfdATP-/gYG0[lc--v_n@:zyef#aPPp1nI)p02,f5c^-' );
define( 'LOGGED_IN_SALT',   ';X7.m_p]ek7#du/QN!ohQ-X**ii-OA+l*er0r/V$A!FQ]^mB%-E( L]]<7{;}dtq' );
define( 'NONCE_SALT',       '#}R$#fS/% JI|r%mo & J^Ie{ke Wj5V=d@lTg0!_fVQ|OXGZJY9&hCnltB%&#c`' );

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
