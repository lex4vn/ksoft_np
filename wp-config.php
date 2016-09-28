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
define('DB_NAME', 'ngonplus');

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
define('AUTH_KEY',         'sR~6Blv1 IVb8$ot3a^hQB0PTDCxuqA 0%WZb>D8d<x]{C``idW]i!BKRIxc6Gb*');
define('SECURE_AUTH_KEY',  'Tt!a~ao44kqaep@1p6e*5K_EXLr.,QyDE[{s^Kc6|Nl .Qi lclV<__Wh[45}vWd');
define('LOGGED_IN_KEY',    'h$beM[Zb(PFR<`oeP9#I+t-sJmR$#p@JsX20JO&xaFo%2X6QVYA6Y/s/0KkO;;W|');
define('NONCE_KEY',        '7l|gj^Mj!DTUnJR?V+zN [BclA}%1|qa.Y&M?oF9)7V$eZ1K^ZFLBk-(ci`x1e9i');
define('AUTH_SALT',        'Lts_+/wu<=)##k*zs2nK{=1}4ICo*(KW?X&ac@zvlCMT|w@PyOID2d`=l_!ivTAc');
define('SECURE_AUTH_SALT', '?|r]!9NnWYGZ]+HtB0CaK0Wgjo4Xacm*Sr_,3+i|-aZL} q3sF.mCL=YHni 5X_5');
define('LOGGED_IN_SALT',   'v(4[V%La<}I+.ktPM1Q<8{C1c$1b_jY8eFhx7^_jCr;}:P0$h==CGv<2 Wk#=Us7');
define('NONCE_SALT',       'ODxIT(B#hs..|+SUdSA3uk+E~VW5Pp:J(n>.sL?0C7S2V62>g5:boduMPamO >d*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'np_';

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
