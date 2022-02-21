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
define( 'DB_NAME', 'shop' );

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
define( 'AUTH_KEY',         'X6V)u(v~LIG-{Svxs/jRR~FZ1R3g{Qy7@lPdVrYRA ZV&CJqGt`d&.7#X[Q$RmON' );
define( 'SECURE_AUTH_KEY',  'ixp<#ZdGhO7^Fm?M|Tndn*kzfDo,labU0+`@|<=Uj7VL2Bh8UPd?;R5xwWM>o 99' );
define( 'LOGGED_IN_KEY',    '9L5l]:%t[FOID}39Ib JSPQ_!bg0G^02g^^cK6@}t&p[u~P%|zsdYkN1PaE}X@Zn' );
define( 'NONCE_KEY',        '88_gg/?0fnn3s^*i)SF]BB$oRQ 3xu:XNBVGiCNjO_.,H^(lsLEE2#R`oGoe:%jI' );
define( 'AUTH_SALT',        'rG$ayw!/x:s~M&!U>LH[2k56|Ys~d9Z&(P#nMvPZ_tkTnZs-kD,!DQUJd>[+>U#*' );
define( 'SECURE_AUTH_SALT', '-mO4Ji+_03?FzD& z1f=JxDr_80KSl}^[+3EXD.aQLISfG.pQDo@z{6$(.*)46-y' );
define( 'LOGGED_IN_SALT',   '>Rm=%1qs8D2!r+vWBC+q2t]xqg0_hqzN[EAtM5m9Dxt>fJ,{OoD>fy9fIob/[5?>' );
define( 'NONCE_SALT',       'j;EN6bPzd=S;3<Fh HZqa&Ah|BEy:i?sLd@1e,b8$d*JMxsfrwod}dp`9dWt>y;^' );

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
