<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'w3pqSf0D9DWMND0/QnyjE7Qp8e3n36EsyrZeYg1QJqZQyS4hsFAM3btHpChM7m5bd+AlXTP3pESlIC1a4+uw4w==');
define('SECURE_AUTH_KEY',  '1xojT21WAFkGKzxoyp/I3a7TDMrDJLpGxD0Psv4qzjBMbKK76D0Lp1CaoZE00xSPw7JpxiieWuvQZKN8EDLUKw==');
define('LOGGED_IN_KEY',    '1DBoSmq5oqW9a+Aquxso/CmIlpS3b61UE3QfSSi271w/90OZHyCMDMuKO+g4gT+8Ri0/X40atPl62iTUyNpFgA==');
define('NONCE_KEY',        'vT8pCSeY33+k+vot4zAfuPtN1p7I54T1Jyh8h3ok1OrOPO6NpJqKMWg2H/SzqgtIuDZFRLl2Fpm95R3amkkr2A==');
define('AUTH_SALT',        'd/sGyqd69JlM9pE8QcPafw53nIJSCy0EsYbstCDQzEEVH89b6aI2tI57o38B3G1V7EadWXv1Kx4TiZ6WcScw+g==');
define('SECURE_AUTH_SALT', '+kPM0pEN3VkxL2pXa2Tma3Ukko2sEUxnSWm4oIcuU4L429kBCNVnjO5Szi66G5tRvr7r1uDi31kbEbNi43Nmuw==');
define('LOGGED_IN_SALT',   'NT/83MlE/ZHd4TGg6rs3akgWYDrS/hvFJ3w7Oswry4O4kNH7V1yaP9VYFSwixjFY70xdtSAX3VTEARZLFd2MZQ==');
define('NONCE_SALT',       'y9x/7cfeEEM/vmdSIIqnO23JewCd10J7UUjx+K8UIFLyCq2H2wWtq8JhgYNOA72hJDARE3wdCswz37VO6k5+5g==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
