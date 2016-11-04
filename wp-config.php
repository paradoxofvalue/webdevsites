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
define('DB_NAME', 'vlovecom_wp194');

/** MySQL database username */
define('DB_USER', 'vlovecom_wp194');

/** MySQL database password */
define('DB_PASSWORD', 'OKP8p0-6!S');

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
define('AUTH_KEY',         'eajrvidd9gpdiznth4w08mvzuulsnicom61u8x6rmnaqkj5rjl1uogtsxxqlkmet');
define('SECURE_AUTH_KEY',  'xgljtugrr8ze6cjqffi94uzhoay3gqlcfbstwioguaczng8wft3g2yelwg3kpu00');
define('LOGGED_IN_KEY',    'vwacqgshoqsqzdnhqltisazvalznfekfzqatbzwtwpcibds57oe7sr91sdqxcxs2');
define('NONCE_KEY',        '4rreawbenjudlaezwneb1dyteyqa8oz67rwdrix4g7nssgzkut8lkl9byn9ysgfq');
define('AUTH_SALT',        'p0u3rn4g9aefvzdvlebdouilnqgxxpk08lqukfr58jxuxzoyio7j4gujqnx3rud8');
define('SECURE_AUTH_SALT', 'petm64nddcsqimyitdhrxe2pibm1s5bnh1evsjwy0dwuskqmx8bbdanappeqimyj');
define('LOGGED_IN_SALT',   'cpgaw1l2tzkul4t5fc7ijuw86bgmbot4xuxfddd3icqiud6vdtpokz3gkln2yi35');
define('NONCE_SALT',       'g6wukhx9jpuoslhqyl6l65tgnji43mvgisecn7tjzen2pcnmueg4zdjtfyedx9x5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpbe_';

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
