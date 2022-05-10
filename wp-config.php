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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/2QF9fyiGKVKROPOj8Ib6zB4PltyjdftUC4oDQj0OWl7KTKSEvn2CgUEJGuLW9fhoJMlDLPG1sMQo6TeQ3DKkA==');
define('SECURE_AUTH_KEY',  'dzUp9Ea55ZEmvGE++gHTwAnfJIiNRWceAQEHcmul8o8n4PqlQeR2rFrl/9SmFXzSwkukW0zkYrdM0vylmcE6bg==');
define('LOGGED_IN_KEY',    '9oVhZy11ouEfwh4W4Pzrxk1FtE6R8nIUATOtPhKJokhAl2EQ3hsHDD5XstG1ET3iz5p66e9VvdhkzVoSxZQ/pg==');
define('NONCE_KEY',        'bExAwQtT+oa8MHrSRhgczAXvUBAXVIkjpNoz2bHWWRo6Pee4+jLOH38cGr77OmGsLK1GNciQoBkV98cFMQW5wg==');
define('AUTH_SALT',        'bQnErjAW1ryd+VHG7QC4gs04RG28GKNnQ9hYrwkxSbrUqC/WKtfhKk0pSGH9jZ7w/+wGipUGXV9Sd4GpMWaIKQ==');
define('SECURE_AUTH_SALT', '6Tv+kNxf1ERnyYi9ajDF5ZPQkX1T2yyfujxjx3+xJC2ssx+8uuOoi8eIjpdYbn2u2pwFPvTU3DFawcWiCJOT7Q==');
define('LOGGED_IN_SALT',   'SlWubCYhxlADedMP4mZWHnurq2M1egyptTxpVK/6aV7HX7UDwiAwyqv7rQVpq82lm4OdyAiuxZ+IcVgMayJlhA==');
define('NONCE_SALT',       'zF/qNskoErxQVlD2lgsS9c6sW+MfKyXFLI3IWqOo7TondUs+tkxTC8oZghwPmuEYtHY90AA0jPBS4UQrR6vvjw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
