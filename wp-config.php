<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'securive_wp687' );

/** Database username */
define( 'DB_USER', 'securive_support' );

/** Database password */
define( 'DB_PASSWORD', 'P@ssw0rd8541' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '92kuy4xos5tigob0zctuxvo6heb3nbpmts2lz4rwd4845mzp9poozhnzmhyjicab' );
define( 'SECURE_AUTH_KEY',  '495wty7ewqu8mq366nv8lpxthzeuzvjgmw9zcxlxnraiahxwmkj3uz8rujvbnrpw' );
define( 'LOGGED_IN_KEY',    'cscpsi9hntmlgzfckvvlt2yeeqrivssarcfgksjos5y2iiciijocokqtgfdwteql' );
define( 'NONCE_KEY',        '3u8nb5iklecbor7cdspbidqykzhlyagy1y8mzi6ygsuda7iklmjc99avj26z6xdu' );
define( 'AUTH_SALT',        'n6uzjule3im7kdzczmgstzz18t4epvok11muirgdwyedrxe8qgg86poohl3tzyuv' );
define( 'SECURE_AUTH_SALT', 'p2lsjnd6cizignkjbvwmvpchanueyigzeaggouw0vyjb3ql94mi6gy7kipxensjv' );
define( 'LOGGED_IN_SALT',   'cbrtbdgckqhluzgvngxyasyylcgmbo8rkp6x0ccyebiqilkvmogiwljxwaflkj8u' );
define( 'NONCE_SALT',       '5djivvxsgxn1xmqjevcqqj9o5atystzrqsffrghfkvjt5iqzcpjyngqnkpkgslda' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp8s_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
