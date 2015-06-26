<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'vuurlinie2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '1f5692e4da4d63d48950936555629fad6de5780b9c0691b2e7eb2fc8d5e8c06f');
define('SECURE_AUTH_KEY',  '88deeaa66a2035e0979077549d68e1217e8d0996f26902b7fd273ae7c29f8c44');
define('LOGGED_IN_KEY',    '035bff3e3040ae98e9a461a956ed0eaf0cd7b41950adb0db772fb8cb2f862918');
define('NONCE_KEY',        '387ef7544ea95258fac23d357bc4a6a3d31dbd90f9568ae02d19df035555e7b2');
define('AUTH_SALT',        '4ca7ad2e25ffc5b34ed0ed7f7c320d76344522b204de940bfad179686b573482');
define('SECURE_AUTH_SALT', '897b6e7766754b83fa190c96892bb936a024c402736d5505ff9f024030f9315e');
define('LOGGED_IN_SALT',   '930708eee023963fa430ef2964c949d9d1cbb82597ec296326233401c6f6492b');
define('NONCE_SALT',       'fee32515e5ebcd2bb2ec96338f9050a0f6c6865cb73c16cc17edfd797ebabe42');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress/vuurlinie2');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress/vuurlinie2');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', '/Applications/wordpress-4.2.2-0/apps/wordpress/tmp');

