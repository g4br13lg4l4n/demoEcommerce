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
define('DB_NAME', 'ecommerce');

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
define('AUTH_KEY',         '3wAdV!g0YGl/aB;*CY+l~74 D633IIIY7Gdmh,b<c4@|g$(eN*S>J<+^F.93%T:h');
define('SECURE_AUTH_KEY',  '!L8{YK_}!Kl+Q%PMP>MajMaZSZgmK?fV]s|l&L(%3LC?;n.LI<poC@T%;EmPiy?s');
define('LOGGED_IN_KEY',    '9=8zXySHjk0bCG{p@?|%FC+aqp8cuKQCFPfCU4!R/dY1eS7}0E,8:WOME1em={-0');
define('NONCE_KEY',        'X%$Ai,NRW78u%0M2g[)I<|R?8fd:/|bMlo]UL#a=@S7[YOh(5yIxHS61CD,). 75');
define('AUTH_SALT',        'AE{]bpV)5qNkkS0v{5d(@@PlnQ&BjI|WN:7X7_y/3:lZ%%fhkoBvuzbUSG/L^J-l');
define('SECURE_AUTH_SALT', 'p& ~|hX7.ju!AW+1H5xwebGS9~h1ivT91XjBx*2EZ7?mSPk#L}Ijl-d?z+*,~].o');
define('LOGGED_IN_SALT',   '3TBv%yz-N8rNEl~6PaQjtZ1<[f>du_)1wX|),BDYc*;B5`LIrAU[jGsR[6M-58HG');
define('NONCE_SALT',       '114p-W8HSA#iADD2a1:y;4P3|BWek#[Q|Cu4|Wd(Ygp 5N%Rh.Tz+=3U KUF<ShS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpe_';

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
