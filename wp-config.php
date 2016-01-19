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
define('DB_NAME', 'plavinu_draudze');

/** MySQL database username */
define('DB_USER', 'plavinu_draudze');

/** MySQL database password */
define('DB_PASSWORD', 'HRLXbzz9Cd5nURQY');

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
define('AUTH_KEY',         ',Q9R{{7zl2H4U}zul:L&Rxf%3S7F Yem%q}FW<n0{ge]NxKgJ-[l+-V:UZY$olK,');
define('SECURE_AUTH_KEY',  'Hgce;j!Ui_$sVao !G 7h$$Sol58DTzx4|u_r|{j-tl&Bw~M|CWv.!T.QE].U.oG');
define('LOGGED_IN_KEY',    'u<]dd3SehPBPP[yeC-A3(b<,qe6aWsuKPW:GPAZKFRRU,A/Em;Ct8O#l.-/|BpK]');
define('NONCE_KEY',        '!oT~[1]fPcEfC&=59rAZD?Z)%),HgUb)z+qo(_=<=PUD)5)va&t{M5J^DE:;(rO0');
define('AUTH_SALT',        '+I`?bcfuRuSh 7*C]Vvu+E<JPyHy5[N|,&zV[4w{zuLjb @%:8M|fl-?zV:LaYR=');
define('SECURE_AUTH_SALT', '>`sscc[+Qhx~G&xNtUkgy+(#O{y%}-PunTJ+,RK8D n5yI>L  Vhu]s~H!7uKsZO');
define('LOGGED_IN_SALT',   'FHzWlwP/+a~a_}qi+L?{xDbt#<wlBHIV}+t5ip+PdDENPI2aBausvRpSe%?Vg;}5');
define('NONCE_SALT',       '#CZuZ)AO${kpp.;>]I5{,D1_j*Q|19cQ[##XB`iW]7xVl8eO@f._2f-j%sQT@7$&');

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
