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
define('DB_NAME', 'bm');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '}!RMEzh1Ay?N$gdLF<Ep<BDIEZl?g,kgP@_fACEzA-miVgfUuHVA&a|39&B2LmwH');
define('SECURE_AUTH_KEY',  '5`NF-gc*;Pmxktd<uT8Q> y,zK%2~3Gemf^{N(MCLB ^k,]Z@,Vd4<SLU9-+9R k');
define('LOGGED_IN_KEY',    'W;KPj4PI)P(ks36/!,sO7+QWW5k?ob9(i,tI)&_;QB{xe)1tQrY*M* .y&dNuuC<');
define('NONCE_KEY',        'R6-R9G]i}py7i]jGgk/ x{d@K*%I;0P=67kD+xsU&^%SHX0mV9Mdrl{gLGq8UkyB');
define('AUTH_SALT',        'Ex83)uJ1V:)`[Pl_m$gO8iDGT@.8S__te+jQpnHzC(<zGNp8yU]A-|GWjCr2vmYz');
define('SECURE_AUTH_SALT', 'p9D&berD};ns[@=fggzr}W{eo_FQ%%_>A)S&uNI[ v0TB;w[XTHB/7zWhJtPdIqa');
define('LOGGED_IN_SALT',   'ki$/llfqI-2Zd|>Qm[V>]IbW{iL!=qvE `VgB?iGKc{o+d0+$sZiLeI6,qayjZb@');
define('NONCE_SALT',       'F.H`>*IF^X5NQ`V_^{.FhFCiaO19AoGSt2SH(@K(>!vS.?-F.D$E<Fd1sff4avPF');

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
