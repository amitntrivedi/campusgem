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
define('DB_NAME', 'campusgemdb');

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
define('AUTH_KEY',         'lU{^IF5P&?O5:*~pdDWnY= e2U}S99SWrG.t;AA*BGE^@-3jI5e;sm{ijzKzG`!Y');
define('SECURE_AUTH_KEY',  'JcmA~n]S0HB=j%}prFighws&+jGN~SZ}hS.?tQKVkOQofOoa^EaJfO0Xo2p-p=  ');
define('LOGGED_IN_KEY',    ',<VJX^>G$%6?7q`4f5tseYdCzw=q<54!fA1Ey~1?~3pSkhP^_W4$3yWt)tIA4Ls1');
define('NONCE_KEY',        'cI`5?c/qhsXj2JYthi-~@W6pfRdG)6phe@aU4*xv3lc!;:a F^ [+kGztmm4_TWV');
define('AUTH_SALT',        'v$eOUlF5q~-X<k`^fILCVn2 `L}p]NB4s@)Y4oKBQ2-2fT6!:x.83^hg(C+$/ ud');
define('SECURE_AUTH_SALT', 'E#:h1!*tT))QKzmdU7K${9n&8{.%,9lfXH<y[fj9zzzlJBv#04;2#,C--z{1SQ8j');
define('LOGGED_IN_SALT',   ':x{0~o|@#_;BeCBMpIz[_GiyLmfv7^VFRne?M`73bK6)9[-b-2z6GcN@A^,]DeSw');
define('NONCE_SALT',       '1P8]qjHe>[G!5sX*MOJ#Gk&6%Hsu,t6lduJSOP3)2#`;cTV[(P7m^s@-z9+0qbve');

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
