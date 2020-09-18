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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'transportesys' );

/** MySQL database username */
define( 'DB_USER', 'diego' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root1234' );

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
define( 'AUTH_KEY',         'd5k%BucmH:,LhStv})|- }Qa7/ky.bfZA)YQc0/&pWf:,@`oj!1[uYbtL[xIH4 a' );
define( 'SECURE_AUTH_KEY',  '4<2+6>tM~z(ObB0s<zBulfc9TtbTVkljc:=+CO>)FS;TZLf#y>PpX,~vHC/z B@i' );
define( 'LOGGED_IN_KEY',    'X)#KhPr~wr`tI|c2GAr!E1:k_i[x3hco@T[u5sROiu~}xV r ZgE%trN%R;ADbYK' );
define( 'NONCE_KEY',        '?c;m]U!iq,9RoTihlG^<[7Rp*/A+C.fa8z>]9_w<P%>LyEt~$2-(M{2kyJjzgW:6' );
define( 'AUTH_SALT',        '0>?R=P65(Mx^|.pOEc>U-zU$JPG->Jv@s:d0;Ui|?zd.-~uSI(t^DC_)qnQlRC!q' );
define( 'SECURE_AUTH_SALT', 'aat35.$13}KU2AhE2;mQZG5rM5N@8l3$[iIe(8yKDVDw+0k8u:G%{5{#8Jj:Ntb;' );
define( 'LOGGED_IN_SALT',   'o!~5a47UVyprwf<I^bYf>!$:QJ%Vd=VUT+%d7[$?Qhd@X7sqx!i5=>;[{Um;^Ad.' );
define( 'NONCE_SALT',       '!HB~9%UKP{`ZMzfBV}4:eLBFP}VS3@_rN|!nO/6[-gi)AxK5iaR)#u>W&Zl5`P>:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
