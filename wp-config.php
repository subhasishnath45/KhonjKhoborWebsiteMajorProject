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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/www/dlive.in/khobor/khonjkhobor/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'dlivestar_khobor');

/** MySQL database username */
define('DB_USER', 'dlivestar_khobor');

/** MySQL database password */
define('DB_PASSWORD', '5R44lBjgeD');

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
define('AUTH_KEY',         't{/OzsZqi&}Erg-7ceeh%}+.)eTif[&E|_:rO(_k7E(Gn5k@4Rb;{K&Jt-$8W[<(');
define('SECURE_AUTH_KEY',  'Z&;6%YLY)k#c8jou3(/iG4KV>+V0cMaB**JAjTl-,`Vm![!3^|kbHd|Co5p1E(]v');
define('LOGGED_IN_KEY',    '_V%3[5(v!hu;]qhXivP$*`T,#jUcx.b%G8:DgJ0gv$5wFQ.mYc1y]FSGZ[v-EPyc');
define('NONCE_KEY',        'O5hI-t5:]j@4-Vx#i98ae-+;([p92W7(3`xRoswN<Fu cnDZ!-[=jZ-{A60YL&AJ');
define('AUTH_SALT',        'pSg* <Gi~6ScK1Q0a|VH_%-gT(=@xB8o>(/Q]vb)DyT~iB167gG&~tFN)tj`z1!z');
define('SECURE_AUTH_SALT', 'o<.Hu)<^0`S7 {A1@yw_bq(_qmzU2eZjT<bcz}FnnV~x?}78Zm95C#Dg@y]lUWQs');
define('LOGGED_IN_SALT',   'H+$=3COaX6#{iqa_;n~:P6s]Ew+~![wssdxi:I=A/)J|#=|+!Z)+oQkqa>5QBh)g');
define('NONCE_SALT',       'co4_<%X,YVj9ziUf~)&|8+Ta$++un ,@bjd];~@G(db~tQmBb#ug)?~R(n,dsT`S');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');