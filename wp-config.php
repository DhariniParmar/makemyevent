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
define('DB_NAME', 'portfolioproject');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '~V{p&tzCtrbydTm8]4amy93w/8zeCr+.Zpt{C7d|xu}e(LkJZ+W3VKst(!/{M#f7');
define('SECURE_AUTH_KEY',  'm!E4nnzJ3m+D-Ts^FkwOKTARXSlqvQL)#[ZqhMz*9:=.#N|s%!FMSv4]q|i5Ss})');
define('LOGGED_IN_KEY',    'f]pU5oSCyq;5vp$l5!,TYBJ;&xbD[:3,+0>l!?Oj+37M)}lQc?$3V@H=PMU/{xn:');
define('NONCE_KEY',        '%:81!SLo3TN&>>MR}ok-x<=/LBgstjjIFP|=z(x&lOVg^97f8r5:iPtq6&!Ke6QE');
define('AUTH_SALT',        '^hP&fyD`uH^Grq{`PB6AQN.>*Tz=Y!8oD~eNUi[E<<yDV&wNL50oQc0%oAtH1/=G');
define('SECURE_AUTH_SALT', ':uk,}Cc(=0yk<pDJav5)1e/F eco1cY+JYM2FzS$2G=y-igt5d1DXMJk[(F7[y4z');
define('LOGGED_IN_SALT',   'Gro8P wvOYLbI,|Wf8d S?M`~.ha/1{=hNpS[d @Dz6r$>I?>euEVn=KvRianot8');
define('NONCE_SALT',       'YAL}!pCbp Yl!)LX{ ;{<W<ni9A@AzkY1^S@(r@,|l9yCJbd bm!B<5y{4;Fy7v/');

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
