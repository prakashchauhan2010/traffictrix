<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tutorwgy_wptt');

/** MySQL database username */
define('DB_USER', 'tutorwgy_wptt');

/** MySQL database password */
define('DB_PASSWORD', 'SP4J2j-]F6');

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
define('AUTH_KEY',         '6ep8tgnlamj348spwiuckh8pwrnyuv5urjmennmvlfobgiy2i8dqbn9icpsnybvu');
define('SECURE_AUTH_KEY',  'e3qel52orq9ipwl7mtjzwo7tn3n0552jsv3xbifv38nxohlob1aqueptwzil19mv');
define('LOGGED_IN_KEY',    'clp1mnjjpetrv38vsrtr0bb7jbxzjtstdilmnxz99ajiqjykn27jex6inu7ta9ne');
define('NONCE_KEY',        'mzeieaxlecxzkubbckyokfqxlzr2nzyzrzocgq7bshfp3sy0cqf53zqob96xnmbk');
define('AUTH_SALT',        'vdvrcopzhf8tsyxn3o7bnsureiju1efocgbglrdinteww4q3gocu6k6omt6ws24g');
define('SECURE_AUTH_SALT', 'aieki91utjmumt2a3dvwroxtqg2wvrlktqmh9ymm4nbczu8uma7asaloefetmtxu');
define('LOGGED_IN_SALT',   'berkcwll5rj2ek53xhlakswmsjdoarnn1cydiaemvjjnsi35f1bs22bc4fuaoplf');
define('NONCE_SALT',       '49yu2umv9qivicbald2c5fei7tiv8y5xntlowyrp2jza2l1qfcgcw0rtgtzdusqh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wptt_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
