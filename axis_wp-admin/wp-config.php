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
define('DB_NAME', 'anoble_theprice-wp');

/** MySQL database username */
define('DB_USER', 'anoble_theprice');

/** MySQL database password */
define('DB_PASSWORD', 'vE5]JQSQ+');

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
define('AUTH_KEY',         'dsrlDEc_o;v ya1,Sk@&z_]U_A+n{<(+|tV>mg:s4=GF2PIgq_uvb|CMd${7N?Dv');
define('SECURE_AUTH_KEY',  'y^>bQxh]D5gD;=0,XE*ikwNAzFbKNp|N)[R^p(D2Wf%yH`@4#(x[Xse7?XuZQ;~.');
define('LOGGED_IN_KEY',    'W+* DG(d0>KL :]1?g,He^J&o-!d UU%hjv{DQg%3D#hSO,f#S%aKai^Ei`_y]W ');
define('NONCE_KEY',        'yq<mpPCZtLj|3+R eNO9:vd.#hpaJ/_fn9W*><~]n[C`&4VzrB;SXx9&>Ey$?3fP');
define('AUTH_SALT',        'DdhJIPj,2R/V/9%J[w7KF{Gn;g4JzGcdD*d]CnKG;rti80VYuN)!0;yH)NWvpNF2');
define('SECURE_AUTH_SALT', 'Re+#{vm3H+HZoD3H{E{Yv>iHIN6-T|Y,1+e|gs%A#49%kGLW8^>S6c>uMV[+fD|.');
define('LOGGED_IN_SALT',   '<{$#4wYY+{vRQ7t*n|.^[YTDWQ$-(@7LUzX1WzNHp[`SilM7F+`4f}?IY:Yk EgE');
define('NONCE_SALT',       'hK-1CrBK/(7f(}53ZgTX^eeaW>[26-X]Qf?|ySAqC[=IKVHOFK+S&$zlRj[A[!Ie');

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

define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
