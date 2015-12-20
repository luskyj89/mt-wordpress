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
define('DB_NAME', 'mt-wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'ykwlkz1uv9ketd0ltfboypc7aatyepsfes0xlhh5gkzsbk7lfezodzqdma3slseu');
define('SECURE_AUTH_KEY',  'eo76ewo1puydob4u1rarwiqzx0llijofizgt086tmofazwfcbti9iqs6eg3f5s5h');
define('LOGGED_IN_KEY',    'x2zfcosj8zqk1ablpiwikaribks3hdeil2n8b2vwnk7tljygpapcfge1z6j1j0mn');
define('NONCE_KEY',        'db5omzyajqc9yxgakspgmtljoatbhspbqob43p1brnnzp083t5ez2atgtwket4d2');
define('AUTH_SALT',        'ewburyvbsw9m2najxsgulddrkquydebgp8t9ousvqbjbrdenleaoxblc8m9ntntw');
define('SECURE_AUTH_SALT', 'pmqd1epen5z99ae4xxfiwhraudhvflfhgxhmmkfk3td4hnfcm4ifvin6xjfm4j0s');
define('LOGGED_IN_SALT',   'wchywyhgbdzptzhnugjqtowl4kixktzcaxhutk9cw1tte2yclpwzov5dwayxvg7j');
define('NONCE_SALT',       '8vfxrtudfnzptrodj1y3o4g4vbsr4qhqbiisg3fwausbokvj7y4lnukizdyavxg3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define ('WPLANG', '');

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
