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
define('DB_NAME', 'afridev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '>z^B=T*l1A[{}{C_=/CFA1M|Ah}3pW;vgY3.hAWprjV2|+K_kp0U9/IS2vn3.& b');
define('SECURE_AUTH_KEY',  '(zW50b.ZFJ`*2YH^<y+pAq_3$WV**:RGAzO`NNIsCk/I^8@I~YU~?JSEfu9q=LF0');
define('LOGGED_IN_KEY',    ' -?8%OBew8MCsCL]1_3%S0]i$A+A2?:oJWOn@kwlA^u5^Ee$@@&3r0rTHAE}r>4}');
define('NONCE_KEY',        'p[k+NgG/w9NeMjVJM`yt+97<*w{u70ZZ3 Y_{6H+eKgUWF/>y5A 6Z~,NMQ%Bcc}');
define('AUTH_SALT',        ',uopJC1c1$eIns)HVkp{4)D1rnO`+1di%C3xUiKr8/[/qpG_zF,{U,f5D#&BlT=s');
define('SECURE_AUTH_SALT', '5QAAdc7~by!$tpEOoQ OPI3lBd[?_1BY#doyREqp*Rfhe]rhyMQV>2P~b<}z=dG$');
define('LOGGED_IN_SALT',   '-Z;uvFfm%;mc6:Im}~gfC`pbL9%e]v#,.A--eGn0{BB0h%hy#2}c]8_Vi,4x-@TO');
define('NONCE_SALT',       'Udroa/YB@~R*R+(yn46/!JhK2st]a9m^5VahNRc3C4>%gGCh$!MK8}%_[WN-K,o=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
