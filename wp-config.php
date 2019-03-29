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
define('DB_NAME', 'wp404');

/** MySQL database username */
define('DB_USER', 'vagram');

/** MySQL database password */
define('DB_PASSWORD', 'vagram');

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
define('AUTH_KEY',         'podz8uxodak6qrglmpn4fce54jgoyls9vkziyyfaw9hlsxvf07jfooloeg7eplby');
define('SECURE_AUTH_KEY',  'begaykcwaidflia9nsvsxqpbepuenjar00i4vzbdqotlmnbn6k1et3xofwlduksq');
define('LOGGED_IN_KEY',    '5bzci2jdusuih2syjyrjp1utbmn5ecdh8nwds4hubohky1fc4baydjsvndoz964q');
define('NONCE_KEY',        'vsbwc1cju7wucs9gco4ama8qrn1ey6xoa345xbybw37kjamrps7kk5sh508qjjmx');
define('AUTH_SALT',        'uxbjkchyqxuxz2qwdruovm5f0aidhpkk5c6oy60pgnizfwrrc9e6ytjceuuezwc8');
define('SECURE_AUTH_SALT', '1ksnxswk239mlsn4mcdq8ug5q6jqcimdbxsqkmfrjjunmgo1s2srfsegufannk9u');
define('LOGGED_IN_SALT',   'hfyj3wq2ejz5tpiyfqemwdd1l06xxd0c6qwfa9lz0c36xqfwawysl2nvcalphk3l');
define('NONCE_SALT',       'j2p7ktapmngyeufnblkdqwi0tvztyprlpwdun3fxoko0ybiif4j9ahf8nynime4g');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp10_';

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
