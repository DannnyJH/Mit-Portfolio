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
define( 'DB_NAME', 'danieljegstrup_dk' );

/** MySQL database username */
define( 'DB_USER', 'danieljegstrup_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ozjyYKXEZaNLPJRZQJuo4muJ' );

/** MySQL hostname */
define( 'DB_HOST', 'danieljegstrup.dk.mysql' );

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
define( 'AUTH_KEY',         'C}]s%_>:9^@e(1*K{6g@gw}S]PZTg]vz)B~zmP?;[O6u#w=onc?$K0h2:s$,;eSd' );
define( 'SECURE_AUTH_KEY',  'nPHz}zY!|W^ /6E$0e3 b7:os  f*)FMgrNK&vbJ/VQL!$qW^jp@MYY@3sLH;@Rb' );
define( 'LOGGED_IN_KEY',    't6hgfCGzj89$|<m2p;M~,G$WVjE6LIn,k`vxq tT7%/2iW|Xi>I*@NAs(v]Z:):J' );
define( 'NONCE_KEY',        'AkcWYm?u~=uDzb{jV6CZ7Z{:iGsLrS}OhCZN8k_#AvP2|zzCi.!F:{i~#BAF#T+2' );
define( 'AUTH_SALT',        '8JVbP%f`&Hfn+s3!1*x$9R/sa;:ZW$H5n2bV6L*RLpqWU{/BVHX|QW5/+A99(=dv' );
define( 'SECURE_AUTH_SALT', 'W=O<Bn&t`h)l5$ =./@3;hy(Q)oOJm=EkTJ@t )|pzI6u>O/Ub8@1ta;~l;~kz}h' );
define( 'LOGGED_IN_SALT',   ']4c`3-G0:idiMb! qedO1&>]:<:lxuKVDJD!mFJ*0G[AM`huOm8sGL[6Hi8D^/J$' );
define( 'NONCE_SALT',       'uCE#kbACVEMxUB$`8bX_|<YaiM|TcdJVz1kiX70wL=xO Fm@cX@ABDU#)eO&e{z<' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'portfoliowp_';

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
