<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'local');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',          'gX10tb_|}e%+Uhim5A|D7~LM+MqOvLDLoirclMHn?eI(*-d%;iGFOq%2H<~IT.ux');
define('SECURE_AUTH_KEY',   'BY/0oKj=Ll`xLXae56A {Fk_|uGio=eM,B&s2Jr%1mQQY#7(Gv(%x<MAovGp!{Fm');
define('LOGGED_IN_KEY',     'dvvDELkW4 Z;QGFA]C1@q>gEMc{p%0+)@TEWL3ABQgZ0Ng&=gVU1]-irrOfX_61{');
define('NONCE_KEY',         'dB?!ma2C{1IOF(hmNousJ.f6ok}/0,k0j*QQ>otJ@)C ;lSSH&Bz/zCa7L(?o1;;');
define('AUTH_SALT',         '1$dBfgV)i>vivw5!{yw{^La63t;VVhN:nS!u860V2u9d%ylUdcGKy]TZhk8Sw` F');
define('SECURE_AUTH_SALT',  '7lQ;|qZUkD{WIH-Uf6ntaA8z!}MHnEd9X0HP&Y !1epwjyQTl#Ibi4@o>0e^%WmD');
define('LOGGED_IN_SALT',    'H{YH1:t)>AVOV)3i{{=NC`^Qvf+Z Dp/-pj<=J;*V@lxAa6Fb[8GqZ,z6(RL:rR-');
define('NONCE_SALT',        'D>i[OXqv.y.#&lDSMT0](fCIT`CBfXj-:C6f33`.yxpe;WU{H>))!pKoX|>;)`=K');
define('WP_CACHE_KEY_SALT', 'K*%PtT.vj&p.sz0CjW=ObIjT[J&ftW8Nm8G4g Ll=x}7(}f}wfKR:4fdIE<k/8/Y');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', true);
	define('WP_DISABLE_FATAL_ERROR_HANDLER', true);
}

define('WP_ENVIRONMENT_TYPE', 'local');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
