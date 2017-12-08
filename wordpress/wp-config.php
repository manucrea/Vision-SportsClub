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
define('AUTH_KEY',         'Uuh+8N$mJTM&`{7bs4~U1c7}0!ffM;%ziplpMGT%IzE!f~Ta@ojG>e59_N2kS^A}');
define('SECURE_AUTH_KEY',  '7gQuv5&yRM9t$[H[Kk5Y]Q+aO75Ici>[71-1:B/nufqh&zLT=cohB#|?P-$q:v0Y');
define('LOGGED_IN_KEY',    ';dR|]0{l;+>S&&MYm7G[PmDU[EL! v:$,[.)M3bBvx3hR7Vzl3?#5T*%|l#g13c%');
define('NONCE_KEY',        'SoexM`^$AHHllEfI>d9ai/A9 8j[:^<Pgxt&eanEQC^|rCD,L%<O.-,m9~>yIO!y');
define('AUTH_SALT',        'ER=T<$?Z.qggcReO@#VTm5+9,q%Bk0*_Ik]dr/$@Z~{`izE253 &V*Rgswt[bDC!');
define('SECURE_AUTH_SALT', 'nX>7#4Qk4kA}i_98HMN}Uu>Hxv$QE+Kc98KTf38xcD}.1gPz471{UDfBc$1B<-OC');
define('LOGGED_IN_SALT',   'o5k3fSFbc>i{_rpMswbwixb} _p-q+Eb5#^B8k[`,]v^ZN8y$[ltaCBB|0nHCX},');
define('NONCE_SALT',       '>YVI*|Z?xx #7tz-|X9!|v:}o`Z9^e9Sh}}Mzdb:1O9N#35-J^-]0sPE:r7VQEq{');

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
