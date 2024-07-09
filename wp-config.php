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
define( 'DB_NAME', 'lavishsi_wp431' );

/** Database username */
define( 'DB_USER', 'lavishsi_wp431' );

/** Database password */
define( 'DB_PASSWORD', '8jpS-Z4R(7' );

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
define( 'AUTH_KEY',         '21lfavysbhmnwaivmxcrfeq9r5qhgb9pj29zmo8emg0msrc8bkq9mt33b5bv8cfx' );
define( 'SECURE_AUTH_KEY',  'cpbpihg4suzn2ocwcmx15trj0vxdta4p7ayxcqqmthms1zwf2dl3rb39ba6obrac' );
define( 'LOGGED_IN_KEY',    'lyo5la2erre71l2jrjzaechb84mbijvabeh0nmbgt7nxvqwilov2ttugpwkm5ppg' );
define( 'NONCE_KEY',        'gpfl66lislacl4sqgog3d197lwe8h0fq2ceeojmoe4p7pnpx8tbnhkx3sxvhbi8x' );
define( 'AUTH_SALT',        'cg316xvaok067lgfmcpvwhrx5bcxrhndudt1hsnnflhlgoxrdyh4phuso3hq9ug4' );
define( 'SECURE_AUTH_SALT', '5rxmqwtxrn3psyfznmmvwewggwedrmta8ft3lqbuu5qsptohiu3xwcwsvd2fnvoz' );
define( 'LOGGED_IN_SALT',   'jswkmyq1xandgmaa3xfz06wonqqwj3vzzz6g2g23ym04eqo4lih5mp0htf7ebrvh' );
define( 'NONCE_SALT',       'gmosgakrolyiaro4i270tnb4erjgp3yalj86oxwpfhdnmvz8ctkntq5cyxg9zdlm' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpq5_';

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
