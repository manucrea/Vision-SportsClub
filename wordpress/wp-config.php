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
define('AUTH_KEY',         '[wm*$5B&4,IT0b;kbn<cA=^#QdBPT`Q;g@V|q()6m#9w%d-9yg<1U*}wPAAkc1w5');
define('SECURE_AUTH_KEY',  '8,FX8G]D_7z2to%K6{Q`.kxVH4mzGs)*L/|TkuUuMlrrMMv)={}zgeU(-KmBV>LF');
define('LOGGED_IN_KEY',    '(UZ~EC)sonR(Jpkmz]9HrQyYa<V7^/xMSHPVhFU3@#u4?s$Wix;>!rQ8w}@.UwP1');
define('NONCE_KEY',        '*267AWVZy}_41nq7Y|nW9MJ%LMjzj_WFY-6M*Oj6|`g-v;C;!6s|z;)|^nXoNJc<');
define('AUTH_SALT',        '4ray02*d=d`gJpHf8a`zdK[@!M,{h,YcH;1&TKD^8JKk/q1e5r+w3+H3%N>De-M^');
define('SECURE_AUTH_SALT', 'LBQ-VC}93mJu*kKWzc4]to!nGj{WW9(^ YfL~w!#tPCk#K[ry%<H8]>`+gW!<&:c');
define('LOGGED_IN_SALT',   'C)w->Dhw0=oNsl6l!:^o.?Ql_; g*U2EW1tiZ1JlFLmv@yQ>m?2O+QP^*1:{|Glr');
define('NONCE_SALT',       '4j-83&qldQ2DbyKXu{w<Q^~;qjC97[(?x#c4nK~Zbg!w1bE$vblY8,yS0Xy:]Ne0');

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
