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
define('DB_NAME', 'jsanchez_wp');

/** MySQL database username */
define('DB_USER', 'jsanchez_user');

/** MySQL database password */
define('DB_PASSWORD', 'Superm@n12');

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
define('AUTH_KEY',         '7hp)c3ReF#fYdjZ6P_+xeX(MwI#P9-4Rgm wX>y_Hpf=_EXd?J#{km{|HaC&0iVB');
define('SECURE_AUTH_KEY',  '_QQ{x8`YvEAF%y<BG42)j<%!K*dY)WQOuoxeza~*mU8K%b2$YQ.qb??1b`Qxa=o3');
define('LOGGED_IN_KEY',    '[-Aq rM:K~AjAM+f^;Ad ^ZqFX>Hl=N/oi=gyFT?u/ 1%zmeWupH]h:Dc[{0Vrq6');
define('NONCE_KEY',        'M1&r[W|}9p&;o1unZUm9$?|]pXW,$)E4wR=P76B0Og?2a/]^,f,6QRKY|4&.$0]J');
define('AUTH_SALT',        'if}jz,>$X8!l28`WaDMxWGl[js%%6fJL{zG;=sMYBPppnxAgdVc@XiyEpxOfO4l{');
define('SECURE_AUTH_SALT', 'Xz$s4PmGF.Dvo&3E`h(%#O0mAYPxsqa=5cTEZoBFa4:o}$k q/j_QU5`ALdAicjt');
define('LOGGED_IN_SALT',   '=kF]eXgr?EK:4Y!:/<f2u`%+7)S`htVA1fP#kd=JVP`0,UEue*.s>z^4WS(KMiHB');
define('NONCE_SALT',       'W&FhRMe{TQH=9!Bfi98b%CIbvbj?GP!`T$)79pBuKEdAf<*m/!+*4=*QTlwF8vl}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'press_';

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
