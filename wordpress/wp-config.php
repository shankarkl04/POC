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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'h0A3.iy y{<Yms/SCh4w-Ms ?E.^K.kedlEqwiGQB4 <2]WT$YX0s?#W>{*3dN[#');
define('SECURE_AUTH_KEY',  ']<E%/~@S$+@@A>;{fD;*i7%B</?kHD5u%GJZVO8mSS i er#>NjvU(t>4hb;AH#V');
define('LOGGED_IN_KEY',    '?nXc=z&#p`dB(0M*4od<s9tOLNb:8|ob%WPm};%qj}M/_((Av+rnRJ`x0(AN>[@ ');
define('NONCE_KEY',        '0zl!mFJ9hha^TU{hD:J?8vqg#4W@&BKIEy=[_cR(8Uo[Tr[s)o|Fe-/[9pQJbSv,');
define('AUTH_SALT',        'L!]j3W>gK|ds;xbWp81+D{e,`8xOY5_(TKH+[NT9Anz`!@sFw.4-n4R89B}lMq23');
define('SECURE_AUTH_SALT', 'F,Xv>Q+/:CrynQ2y4cO71HwoZ@~k?li1%^v|RO4~ymL74XE#E-[4^@ocmO[jb%0v');
define('LOGGED_IN_SALT',   '2LNZNa54@[hW@H8Qm-+2mmkRz`;~O<25^WG@uN~@VWCq)0U{]k_<M:+e.HwZ&2|O');
define('NONCE_SALT',       '|C_j,{@&DK?$d{Z?poz(>(`32F.5g~iymF1U4D7W7d>_5>AkqVd)qIH;Hw0~H.}R');

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
