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
define('DB_NAME', 'advocator');

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
define('AUTH_KEY',         'm/fqEYXmC<+sj||WDis#9%D2G,`6<iuJmy)wc0Fu]lJnaoqV7F8-^j-A(nHsWjI^');
define('SECURE_AUTH_KEY',  'rq~W!$)l$6>Yu1F2So5E-J_k^OfSOXV_Wxw{||r|1g|J`nWNyhC.>2>7tnqRs-Pn');
define('LOGGED_IN_KEY',    's;*z,>p|g+sIRq+S>Dy|OU6MLz79r)EJ2y+|su4)kh+NJ:9k?69X`J=QW=RZp~JG');
define('NONCE_KEY',        'VOTt^T__3p.?zL8,wQS6cpSdE8bBtSBW#p!]3#v76rc.0b}.bq8Q5DTcN)QITsDD');
define('AUTH_SALT',        'f8-o%<SCSEUrM8-%Z)5=p(1i=59@,o$~ED/6Hfn2Iu0vvFVj|c|Y]F6*hV%ejWtX');
define('SECURE_AUTH_SALT', 'K)a>||abr}+-K]>+Kw$5OmRLy9j{bKXt@lwwsbZGaksQ~UR~Zf2JaRln3enlhaf}');
define('LOGGED_IN_SALT',   '#vk%L{%B~9D~D!8{&#Fkaw#|FJoSG,P8Gnc65?p{SsU$+L)zti%-|O0is.Lq57`i');
define('NONCE_SALT',       '%Zdk_1=T^<|YqZ`L&=Ki4+06Tgv^7_y`!%=d]5>;a- _w3uPqJOA)%sb4).|m+9N');

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
