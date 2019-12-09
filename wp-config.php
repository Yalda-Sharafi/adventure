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
define('DB_NAME', 'adventure');

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
define('AUTH_KEY',         'H+R{Y`~?wi8c+p4<F$du6uP?:!?=o=S~I3B=Qr}ZN&>Z% <egpP_xzn2KJ$#Qw^R');
define('SECURE_AUTH_KEY',  '5L@dk3`2kkbcodvw5a<};*lo&Gc?/FZ0#BM-_v+ ~$M &}%w8>a$}1d8@B]kb$`l');
define('LOGGED_IN_KEY',    'HDrn$:[,s#))BT~Y2[pyUE00Xlj_oXT6)J`g`<qj[Ien2y!ZN;Khby30@hABJs,I');
define('NONCE_KEY',        'N<5vLg`|G?r#ow!01<bV>:Apdc.&P?>NICbfyQN]*K-vWedN~fn;ufdBV->T=t~.');
define('AUTH_SALT',        'Cg`n13ChV)x,cNE,3ak73v VB6tIRaS=$_0tY21|muOXOm#?(o~AP %W *N&6Kqq');
define('SECURE_AUTH_SALT', 'Asv^^# 7gF`!<?[T??}2Fis<*]=r%LpDP9RwKdcn9M^=&AH9}tQgq9/2*e#]R0,:');
define('LOGGED_IN_SALT',   '/iN!tMqV<2V`~*A2+q61_oX#1tdyU[7oM92cW]z7jX}v,Jqubp6mF9_5UzZBM%+m');
define('NONCE_SALT',       '__$m7M&8)Lj&#c=Iy}s~O`/P^jri7fj(U.PeY}T8M(5zgr*ef2Q0F@F6^g.(D0;E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'adv_';

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
