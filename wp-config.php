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
//define('WP_CACHE', true);
//define( 'WPCACHEHOME', '/home/u509642/stilberg-oil.ru/www/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'u509642');

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
define('FORCE_SSL_ADMIN', true);

/**#@+

define('AUTH_KEY',         '+1_ku[BxT<!i8Y!XO(DuJWssnP7e]$+~<];,#Q6Em_ssDsE_RIKA~DcMjSHlFJ6|');
define('SECURE_AUTH_KEY',  'W J6z1VP0u_w*FmSr |&_5`=<S`[a9d#R^R3<f|-WKgKMV6plYD@1;!D}rKDS>xx');
define('LOGGED_IN_KEY',    'yM0JHh8V+c<m`-n`~zK lTw>dNf*+>/h1up#ST:@!U {1w[+:5}Cl2AH^;$;&2Z,');
define('NONCE_KEY',        'b:M8U@]xW8~X]cZ+<>p9;6Re5GrmBgb*%Xl(Z[{oMlD4);ajEC2!Lwt045%aOw$h');
define('AUTH_SALT',        '3Jc3&?8?VPOd-+/+Y[MG(Nv5allFj2+!pr+ge9yxW=rHfRI$:?*%YMOSyZDg-gT,');
define('SECURE_AUTH_SALT', '@pxWsyTyW2sN9+:No>Zd.k||G#BnQv6TZEickHb7+{j>;O|*(~;-xf)Feq.lu[0K');
define('LOGGED_IN_SALT',   'E[(JaZ>)4yR v$q3plIe  %r9So9co:8ckhq`n1<}(>McwJz`Q0lMu-!m+(b0yEj');
define('NONCE_SALT',       '-#VDJX8iR%hw<25l>72Cl7!u*#yP<-< b%|5o#lat2g&dFv?+ohCgMs2Kz3qD<#~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
