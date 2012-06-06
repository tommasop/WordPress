<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'WordPress');

/** MySQL database username */
define('DB_USER', 'WordPress');

/** MySQL database password */
define('DB_PASSWORD', 'SVBTLY obtvse');

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
define('AUTH_KEY',         'Ede,<UV8^lmm;NO |eQa?>{i4R4ybHfU1E7{3^{*A!+(*}^MNaP*R|ddS<Rl]bK(');
define('SECURE_AUTH_KEY',  'Uv90{$[eg-7biFcG-F-.-SOg--ih>`TWXFI*N7,10k*!<|52z#H,B0%>u}=8ukOw');
define('LOGGED_IN_KEY',    'Y;d%uyJ;ey96BgZ.tTzX=,IP+11}Z!zEemp2*yU[HBy*Q=||G=_KWnDIq{sC:MTP');
define('NONCE_KEY',        ';Y~Tc2Jzy[B$Be{+I%e;I~E5n+=,H,g~cE9^[Ww j1br)3<Z:n-x^-W6m6;Tz y6');
define('AUTH_SALT',        '*_Gond`34}KAkS^D?3[04,II~I~U4~17EDIt5I,&{r@,M_P$A]H:Xpr9d*Ek/09X');
define('SECURE_AUTH_SALT', '$uFB-k`K~w9UI+r?+N+A&#4o:w|,/fK-,e[ <1UhPS0+k#_5up2O$-TtjZH|M@3M');
define('LOGGED_IN_SALT',   'C/n6,uPLf,..h:%a(a?j/h~>qJi mzypHALGwM!UUUJFV+A=Ul-WMsGiRO%MXA}p');
define('NONCE_SALT',       '5k=tL+>J )=zF0-LS5,>R0;w13j0f4XB8MYf. x+sHR/r&wop$+d|!.5v)EWMRtl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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

