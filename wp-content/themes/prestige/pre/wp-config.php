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
define( 'DB_NAME', '6xw6v_734a3u67' );

/** MySQL database username */
define( 'DB_USER', '6xw6v_u3kf44sk' );

/** MySQL database password */
define( 'DB_PASSWORD', '123qweasd#' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql39.conoha.ne.jp' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '#ab>$PLi^~)U{Q:f1NO@eUM;i=)$L?vp2cT}]Nv]~{_;O?v/QnX~NpUG}qx_(cy]' );
define( 'SECURE_AUTH_KEY',   'EmmK2G|;0tn({yaFCaKjr tj@+TvFs1K<Xi94 U%u@-vwyCyjO8(-nt/5zZXDuLH' );
define( 'LOGGED_IN_KEY',     'mb2qfqi91J!YKu <%I$s1vG0>Mq3tG8cJd4lc78~w*O-NV[2:yq|dtl0oFBm;5Mc' );
define( 'NONCE_KEY',         '0ZYHKW$gts-^:XmYC&maQ!?n_rt4*<F@XZ-Plvu-nQdS|/gxF#z6kKW<0hrbHJiY' );
define( 'AUTH_SALT',         'g%?206U#IWBj_RaW{i}`^D*^B6$^dw2iE]4M!y.~!.UzSv2#~M@Phw<)fw2_%PQ(' );
define( 'SECURE_AUTH_SALT',  'QNVB? UgzU97T:jNN}t*#^xMZtED+Wd;{;0(B9rF1VA)8f+IgvK0<[gmutcpb:-4' );
define( 'LOGGED_IN_SALT',    '&#?`]^L$?UW^v/0H*/P|Z{VdS6oZyVHi(7G9,3~AQgy0H_7 [Ctb$ud}O?.I1Q%G' );
define( 'NONCE_SALT',        ')s[v_nIitM<ts&l)p?3|iC6F.4VGu3lzmI]6}3%O)d?*v&1@;)P)lzdC7eRBt/*9' );
define( 'WP_CACHE_KEY_SALT', '(g0x6?|<#cuTV8}2oi#o_j2i2j#BTgycU2FzQA@b{i&+ 4dkp,dlIGDm,ujyn){_' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === "https") {
    $_SERVER['HTTPS'] = 'on';
    define('FORCE_SSL_LOGIN', true);
    define('FORCE_SSL_ADMIN', true);
}




define( 'CW_DASHBOARD_PLUGIN_SID', 'NZa67SxlDI9TVSZbdioD6dYEjK-MQuEmmC0TuiUftmsywa6fPzzZJ8kYFlqJT3LWP9RcJMnxrpoScOTY12kvbygIwHiZYDARmQRm5rnfkP4.' );
define( 'CW_DASHBOARD_PLUGIN_DID', 'J5UhplDzb3bgDhCn3BM-cVq5zdq_q8W33niDpxCjWHK2fk58htgbtcYo47i3iggsF2pjAwehOKofhwfjirCiTRAiVU7KTmXqtWyzePR52QU.' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
