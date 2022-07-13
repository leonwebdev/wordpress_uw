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
define( 'DB_NAME', 'wp_project' );

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
define( 'AUTH_KEY',         ';?>?smJL>M2|U2yX$``7J61c3Flnw7tMI.W&v#~qaqD^C<U.MIcL~ku;Wj!;Tj(l' );
define( 'SECURE_AUTH_KEY',  'oC!K#yXLL0EALOu~+2/pw^9?yxs<OdlY!up5([F&*6-qqwD$BrE$1[PcFlFvnzIS' );
define( 'LOGGED_IN_KEY',    'vD>{=#0b$B$LR:m91@/,Qn6?{^|}w, v}6mC^!2nOk3$e($bD[?P/eR$WRd.7;M+' );
define( 'NONCE_KEY',        'DnV/x%GKZkNVr(:*e3Z|{tl-U/~`z<PEdihOzZc9J%E{1zV!#Lkjru@&4h l}<d.' );
define( 'AUTH_SALT',        '[H{4+nVB+q=?>`m;cf}+dhL6&n*hCq+)UlVGcc^!hn^d1OM,oa<Q5X&p~_qE/!{c' );
define( 'SECURE_AUTH_SALT', ';biO&mp#Q#d=-zhC$|60)fbg={Y%2MTA?Y<j7T,47n9GP?gGf!Cg4)1De.@>bNi9' );
define( 'LOGGED_IN_SALT',   'e@~:OF<!UC(It5bV#DBc<>H^)hY_AZP%,&/ND!#@|WcH?aOr|7ysP^0((6W#.Ar_' );
define( 'NONCE_SALT',       'Xh|-ZFNBv>Z:[>fgzO0OYo[Ah>zt 3GIHG>aHvh/2Jkphil[|0Hir%{6hZg^e9_j' );

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

define('FS_METHOD','direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
