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
define('DB_NAME', 'coffeeDBlzkh6');

/** MySQL database username */
define('DB_USER', 'coffeeDBlzkh6');

/** MySQL database password */
define('DB_PASSWORD', 'z1AIFowtt1');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '-dsh:Gw|VKdm*PfT*2ibuEXL+;eTm6P+q.Pi2#6m*LeS_9;at9SRFY>8ncvFYNz}c');
define('SECURE_AUTH_KEY',  'jMc{^7nbuEYQ^3<XujVp91K-o|VKd1|8o!wKdR!4:dwo8RKz:cRo8}Jzo!VJc0|8L');
define('LOGGED_IN_KEY',    'N}crB4N@r,Unc}Fvn^QFY>B0gzJ7Q,y}cvj3QFSl5[Cs#-OdV|91h-K8V|-:dwk4R');
define('NONCE_KEY',        '5-KdS_5lZwG5O~1dVo8:Gs[Vk0|4k@JZmauDT.2#Tm6P+p.Pi2#5l+La]~1h+H5K-');
define('AUTH_SALT',        'aDti+LDW#9;exp$}gUn7QFr,Qj3>7n^MfU,3j$r7Q$fTj3M$q^PfRkZ|8o@NCV!4');
define('SECURE_AUTH_SALT', 'S-[Zsl5OCw[~NkZm*yIb{A;bqAL2eTm2Hx]WLe;9p.xDW#9;at9SF3Nz>Un7}Fr,Q');
define('LOGGED_IN_SALT',   ';tD1L~t#Wpe:HUjY>BrfyEU,jyn7Q$<QfMym*Pf.2i+LbP*;!4gVo4R@s!Rk4');
define('NONCE_SALT',       'vQ^fUn7QEy{^Qj3<AOhV[C1h-KCV|-1gVo8RGw[ZNg0J8o|RJc>C4k@rBU,z}*2#');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
