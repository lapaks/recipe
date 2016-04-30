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
define('DB_NAME', 'lapaks');

/** MySQL database username */
define('DB_USER', 'lapaks');

/** MySQL database password */
define('DB_PASSWORD', 'pattake');

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
define('AUTH_KEY',         'n#lTUVnxs@_Br8nBoYS%$@UK6J{1{_CU;9M7c9?q<BJs&nhk{-@KYs^uBT}!ndS<');
define('SECURE_AUTH_KEY',  'nPFbU)T;SoHKwDN*8E?9&Cb/9/]R$#wkQ*HR)-$/Ub02|YW;8 0LWeQP,7mXJH0*');
define('LOGGED_IN_KEY',    '*0%H;21I]}d!9:kv!H[lH28] 5/g)./N+;CiIMX5ao5a4h*1A3Rj.^=*/sB+BA(A');
define('NONCE_KEY',        'OdXe?E=@GNK:6PD~wyUD2-lRuaZ}X[naBx8~&a0ZWXGr#T_`knnl5^EUb8H%Z_h+');
define('AUTH_SALT',        'eit%NK,-,LC4FB0*^!F+o~T0sOP2GF))8.k](!+r^-7]q#ozXusu}4BO|,%GLOl~');
define('SECURE_AUTH_SALT', 'zg%oD.0MvWVRA.g;?cEik+h^6)=}rA&,]+!+o?2s-)v<LO1(F+<1mU|5iAF^MfRu');
define('LOGGED_IN_SALT',   '|P B{cIgT^sR=ab9Pi;-e.$nT|}|lCfe2RhOCrU}_VKro^OGfA{Bzmy:d;_7ib26');
define('NONCE_SALT',       ',EdJI:ID_]*xD>a.+&v}+yU@Or.`Kj.>n{`CjWN$c&EG&nrtNOsDHQ/{HS&kZ3c$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'r_';

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
