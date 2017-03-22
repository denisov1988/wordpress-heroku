<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>Ckh|w+IbEUg-$MF79++nt8+.odb/~xx;=*mYYE)-ZKwM+~1ta+d#^OmaNJ#+4bA');
define('SECURE_AUTH_KEY',  'u:86miE-;_oXsU[vEZ*st4R$F]gnd!S_TL0Dt:5dg>:WlS_g101n(Py0Q-3@BZc/');
define('LOGGED_IN_KEY',    'Q;{9|A)cTvp[_QR#5>meU>]qrNfS|d-rY|6ke]|m0+*g.##K/^;+l5,3XnJ88v}6');
define('NONCE_KEY',        '/{1R|;xB.|?B $@,d;Ubpe]044g9]w=&C4-IPfSqrB|XyL~81<yR.nEn-cj:r3y}');
define('AUTH_SALT',        '6)+(h@o@<+bt1+i@{5LQ#Ca}tn*SX2E>)<|e7+Vn+wPUT-dY30B8W9Ay3~ju>xu}');
define('SECURE_AUTH_SALT', 'P)b|WIjNQG nUs`402WzTl3i.?)P! H7o0o-kq7u?t/cG0>]{fJa1(nO(BPqk:Z7');
define('LOGGED_IN_SALT',   'O^*N}gE+30^o2?<GG!w]<Iw]V_O.bv%*(mL#+8W<p%H-g#U@2]K|-AYe6 PJ++s@');
define('NONCE_SALT',       '8<</=7c4<6A:Rvhjj9TrN)~;|#N.+FR{Bd^nS^{-/DBTDy(%;uw~zuxLOvRB5Q(;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
