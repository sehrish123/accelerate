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
define('DB_NAME', 'word');

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
define('AUTH_KEY',         'XZn@3Scd@YTXp[&GDX=Wn7Acr0%eD>MMa)&f6|OI|cpVneaQGYMaB*{}9A(m(]r`');
define('SECURE_AUTH_KEY',  'c|!jl|5abFn8*-gmqpb-JZLQIdnYR3!~BN;muK$ZP7L|;!DS%_@|??,,KAqX.CVI');
define('LOGGED_IN_KEY',    '^gi3EYmK,$O[ix3k}SE$sr{lR5rcv o=mUjb?7t2_Bvmqzmhy]L(4PRiLTnyio6)');
define('NONCE_KEY',        '0Ub68nNVR16w*,J;n?#G!arp@L:w25PLKn{qloj M)&[CT{$dh&9<0*l$WGWg.I|');
define('AUTH_SALT',        'MKOG7H`h|t$6Uldq2XF~)aGn XDCS[Uir.zyEbA#=:f!~;f{yQy4tgVbkt~2ZqmW');
define('SECURE_AUTH_SALT', 'BjBt%q:4}NvCQq6(vpSDovA*f{rn,:8G )~1=v=LHp:O6`,3$4)[Iv`2qy|GkZ+&');
define('LOGGED_IN_SALT',   'j@(pj[/SR~lu%.:[~FA}$IKx8M:<<N?+zm(&$ERw.shFVp|fZQt!vT,3J*Bo8ry[');
define('NONCE_SALT',       'VhF^6fSj-mQS#T;O_ yFv=rCiad.`$f:**SGTbF`L@AZgj@]~f7Bmt7$=/opcYv-');

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
