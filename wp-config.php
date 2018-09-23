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
define('DB_NAME', 'wp_task');

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
define('AUTH_KEY',         ')AM8N6{UG+}_5vOzrO7ECO/Nc;EnG!5l_ZPJs*nSCrl.w~uq$F0vttQsepRXD_1H');
define('SECURE_AUTH_KEY',  '-?9nAZJ(8YQCe skeJ.`S|1%#8@)cZ*h}`V629b9Q{=d(}mTQ]c(d&TM;s@- Tc9');
define('LOGGED_IN_KEY',    '!Ao9k7.-cp&Nh++3VR@7;wyvNT5H/GfwtlaD`.@rWZ4Zph[Vp_~MTIy?<26T36^[');
define('NONCE_KEY',        '3;P&opxI=$f++l]&Dtdp%@y[#)[x@x<4g(>.oH$wCv!;m2b}-^|_hz/}:=7FAlJC');
define('AUTH_SALT',        'Bk;O2OX[e#NtQL=mVY%ICk^22NHFzQLc,{Q*AG;udbHs7rX/L:z(lYS9emKvV&u|');
define('SECURE_AUTH_SALT', 'i?&3i5z}lu|t=o/DMvJVI|<G|nCeXtE07v?H9sPfA1$[{:)Ya,E}!#1a`Pf)N O*');
define('LOGGED_IN_SALT',   '4S@x3:NKE2S&wzo)snA7XW8(Bg h/dV/93V4b#fL~g1h>q&#C8^Q{h k_FK$);h.');
define('NONCE_SALT',       'n2li<X3ftZ20Am*[Ck< CVHk!>Ze}^>5iB%|HFfAa+XYC<Fmb~J9=X/`2&A>sd;m');

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
