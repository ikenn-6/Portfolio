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
define('DB_NAME', 'game_theLastConstitution_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'nakinaadidas');

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
define('AUTH_KEY',         'y1NCa3V}HRzvgcy=]X*V*JE@.wAGR^(85+DOXzp~wb|e%iIuQOdwUQ^=!zgRJvXY');
define('SECURE_AUTH_KEY',  '!^,Ekyh`E4{y&NWp^n%[7!=T+l8q5Zb1GR]~HCc*cC6/dZ(>tnE<.)U2Q_D0#=>b');
define('LOGGED_IN_KEY',    ',A[Lwq,Fj:[TIb]~h}=5Yql|Dqfzue%[_X]%E[Np7yM)I@G$T#nBaw;y}]<A{5G#');
define('NONCE_KEY',        '#Qz>TXbL+NF3=!HLNR!JN%._^(O`rb?CbFHpAT1V?in,``r]|*#zJ0xi`>_Bf,9K');
define('AUTH_SALT',        '!VpV5#:r@jkXmt,ad(Fr?M/[OjaV!No|xm<yyEUg(o-2z `pt}Uo_+Ww@lXO{?c*');
define('SECURE_AUTH_SALT', 'o7qn4g|>1gI/JwvvImvvRSnT7R3s~D+;q3~},TCdrkKfG>*TiF.sE4*m9}!1~g}@');
define('LOGGED_IN_SALT',   'Bq1bW1YG*&.QaqYRCZPjIG)#LK6y^Z)Y984R9H17G*Q62.me`c&]bk7,7@F[?Mki');
define('NONCE_SALT',       ')US3<4),A]g?:Gw,eOsu/B)DAj7Z-yM{Db%UgQgi.x$-a2ZL}[On;A^8XCUk5W@_');

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

