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
define( 'DB_NAME', 'asiabrightway_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'abwP@ssw0rd' );

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
define( 'AUTH_KEY',         'Q$MG&{6Pks$]EPy8!)fyPw>iqRw$zVK&*AL.bJL=/5FpHRv;^_[5D7]]=pxdFiA#' );
define( 'SECURE_AUTH_KEY',  '7XN|q.sWdTX=:h}^Wf:-a(Gbd(0=1{*8s,td68lGG=)[+d}9]Xo`I)omg,YF<!dS' );
define( 'LOGGED_IN_KEY',    'Ix>j+FS<$cGS}t$C-]sF+TALCj=P6v|&`8F[p_ssu+Ad*%>KJkBrI/[THGcMBGE?' );
define( 'NONCE_KEY',        '{Y +Z,nqs1Az/A$%;kcHve.X:LR%qcz)Nk+&^KUD^*:HFGqZqYPBWYiI=qbO5eWF' );
define( 'AUTH_SALT',        'X}Mu<~shy$[b$jSOpuRfTewZ@N;+W0b_BDF[@91c0tKt#?;dlY$0-dg=hHL72*G2' );
define( 'SECURE_AUTH_SALT', '-qk7._i#{DT=3Lhd8e9^Er)Sfl(R>1U{6:*HaB1,?rx@c*%h#GK0X@-lYH#bA,zk' );
define( 'LOGGED_IN_SALT',   'ps.)><!C=0_3/BZgD[*fxw>-rUiTr?wyw1%Y-k<rAV~5]Dd=t#?gsKAQ7V>{pd=C' );
define( 'NONCE_SALT',       'TY83H,#9m:X2f?%>U<#|J:F9x0cCy@f47oAk5vH_+]?Bk1 f|HXg;:k|`!]:j)D$' );

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
