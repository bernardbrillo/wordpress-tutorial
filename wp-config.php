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
/** The name of the .database for WordPress */
define('DB_NAME', 'wptu2rial');

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
define('AUTH_KEY',         'R]31Pr+%C8p~x%H~E_8jCo*6v*|{pp( 17AY*f+!o!VG_GXyONiw}vex5*!v}XJa');
define('SECURE_AUTH_KEY',  ']Noq,%4Fn=/3pqrh7>nE0kVYD4?/&gRvB5WIkE+$6k{*#;tWD9E5z$~~P><|SbxQ');
define('LOGGED_IN_KEY',    'TU_(/DKGb72?qo7- SSn74$2-}1W/>kB`my-!Wr__)j@cBcdUk*b&FX}V3~#tH+B');
define('NONCE_KEY',        'ZX]fU?ZDqXm]&0>&=}H(jYLyKUHx4P.ZK@`#5-Q$]GC?U!un,J#2Pa?h[c[d}XEo');
define('AUTH_SALT',        'Vz+|KqSGN{1yW.)_zdQCm$41*j|(]-_vXa[eX`R]s-P|D%xqkX2BSaPG`zXt=jh{');
define('SECURE_AUTH_SALT', 'K>kXP;]QDIT!znU^Tj3dStsKQp7vZtzNrjipan*6DumjNoVQyo1m%lQ-6C$/Xp=k');
define('LOGGED_IN_SALT',   '.$JAC<X+FLdoc)A9.4&VfI:_*1r}4x$YdMkyoN#m0j?e} E=,)5To;ulY-R%LxGl');
define('NONCE_SALT',       'EZ8I3.)#ZMp6@mbA512{0`4I,t<kzIbeuN5T}4E] %&&R3 /fmN[1b]~Ew6ADC.,');

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
