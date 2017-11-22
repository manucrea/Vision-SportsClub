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
define('DB_NAME', 'vision');

/** MySQL database username */
define('DB_USER', 'guso');

/** MySQL database password */
define('DB_PASSWORD', 'works@132');

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
define('AUTH_KEY',         '.:5}ro@r=t.Y3A;({s,lD1:Ty!(v<4,Fg{s]i|N<7m<^6-;8}BrIDitOF=5]t+Hh');
define('SECURE_AUTH_KEY',  'D~DjGM#8aR1!OJ+r_Cr/Pr&TVz/25%VckW1{dvM$(_*w^)kCPui,gPmG*-dorzM=');
define('LOGGED_IN_KEY',    'JR@L)tW^xqkgchuU!:oCZ2#8R6|HvVju`f53U{XVGL0/!x bY;BHwj6$3||vBh*(');
define('NONCE_KEY',        'GV!W54$Y`[SD}/Y3C(tM*(9AJv>w1T~IuL<l0vff%5Z=~~T%_V]${_~|@K^%4^zz');
define('AUTH_SALT',        '?iRwP6[y*o4x-4{].v[5If&6.lUOPwUVaCi7[V0&NRwKeI}eF],9U,F,N-i[W,QJ');
define('SECURE_AUTH_SALT', '&F8V!CnAc`t5/o|=.rK+p/&S<}r >mDaC~Eh8}H2[;l#o_X-pYC+7+ju.%K?RQ?k');
define('LOGGED_IN_SALT',   'm lt?m5(+=RKsp _(V8@e !1iq/.*?qtt9S|SUBzZb{@dB^NZ8arn=kvUa%pO/l-');
define('NONCE_SALT',       '%nHf0.04D&?roD[[4o/ZS]7>]4HvM5/)[1p4F9-5?o3}$*jf@m320zXBfBO<$,}1');

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
