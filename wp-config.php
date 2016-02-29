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
define('DB_NAME', 'dulacdesdbdesign');

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
define('AUTH_KEY',         'rzD8x07u7tRk1gNWGJ+waQqbz2H/7UNm0Hi34b5x4tLBjAzaZKXH/UcJeXof');
define('SECURE_AUTH_KEY',  'YB4nH67zTBjJ0pLin27BGCBEOme4CX23YTe3Ofy/D0YbutJ9c1xDD1eLE9hM');
define('LOGGED_IN_KEY',    'rRghTZonsQWxPKQxrCpRBaT2c7Grz9syzeitewMrkVxI3MNQliHk5ka1Y+W0');
define('NONCE_KEY',        'ww3eTN0ls7f4MOvFS6iDm5or3msKuSAs2nKQ4hZnvPiv4QVsc54UyFnWKpFF');
define('AUTH_SALT',        'I1B42yr7yY7rIugQGV1uW9hXvfNu69gm9BwHAjFsU11Y2yN1e7sbo0a44Rtl');
define('SECURE_AUTH_SALT', 'wTOaE3vARYF5VdzoK+X9QL3hwq51Uk6Ix21L/4oFPvfmh2BZMwvlP/gYS6IL');
define('LOGGED_IN_SALT',   '8gKoLARwuoI9L37oq/GFx/TUBanp5j+XX04iPPmeoicjVqelbQu7WCJmPCYX');
define('NONCE_SALT',       'OF4uDNmQ61GNef4H7GCBQbBxbmZ7tTd4X7iyi6piYEHGHKxeyZU5cxWjZgI8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wor3767_';

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
