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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thetelry_wp406' );

/** Database username */
define( 'DB_USER', 'thetelry_wp406' );

/** Database password */
define( 'DB_PASSWORD', 'Mp)[.S0CE3@dk4]8' );

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
define( 'AUTH_KEY',         'i5nmogv4nbaeflmymt2xla5b9srssc0xtcunj1w0tpl2sewnkpqvoep5ztse4dmv' );
define( 'SECURE_AUTH_KEY',  'jngj1jycnqrcocazer4e5dq11o0mpjzrxqnylnghhvfljbsyehopauahtrhclnwq' );
define( 'LOGGED_IN_KEY',    'euxqz0ermkumsuxbqia8fjmotkyyby128j1rr6mhrpnsopdkfeoa5mwph4grqc6n' );
define( 'NONCE_KEY',        'e4iasgpvtp6hwgannaqcalmngc5ws3oblbcvg2qxem3sk8mjqiugcoiev49dheho' );
define( 'AUTH_SALT',        'xsu1fx0rcys6l8givukdepu0xgwyupehdn6edq4ltb1avp181bewsnijoousrpfk' );
define( 'SECURE_AUTH_SALT', 'feauakrxtgrvvd0inppq27ym4kuic2q850jbyp8ugynygs5bilyifd5hz6mn8xi9' );
define( 'LOGGED_IN_SALT',   'cmorxciqafy12a0wnkpyr7nwc2r2siayrxnur2phc6anpff8xgn5bcntrpdww4qp' );
define( 'NONCE_SALT',       'cijxryruk7x64y2alvpntrg1p1giy3bvywjzqcf3damd1f3lk9fn3g9sf2vakfab' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp42_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
