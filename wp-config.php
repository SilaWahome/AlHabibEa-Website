<?php
define( 'WP_CACHE', true );
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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'alhabibeac_wp787' );

/** Database username */
define( 'DB_USER', 'alhabibeac_wp787' );

/** Database password */
define( 'DB_PASSWORD', '2p7-2]9aS5' );

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
define( 'AUTH_KEY',         'tjidhade8e2ce2qiebadajpj2dfkixxhryqhq6phz8wtpmoisydgcpl83zrmx0vo' );
define( 'SECURE_AUTH_KEY',  'vof3ijoglv0wuijudlkwl6v6r55vsps4tqa5329epott1chhy2uxpekysmnxg2mt' );
define( 'LOGGED_IN_KEY',    'no7sinhdlvlnwicjgcnt2segxrunykv503a09gzpshw9ojwpvvzucpzaaeveyptf' );
define( 'NONCE_KEY',        'n5bt52mixd9vfch9uxqyniyvrelloygf0xny4kufhyukhie5iagro3knzwxgasek' );
define( 'AUTH_SALT',        'urrbbbfcshoefghtzpyhgwbcgwcrg31od1mlapv5856sv3ep5z3yplgoaxptqq3r' );
define( 'SECURE_AUTH_SALT', 'icpxosc2z6yta0kokvdz2xrvfktmgopu7bdecclqhhyin9j1bz0m0ayaczfzlz5v' );
define( 'LOGGED_IN_SALT',   '7q1vumjlr2k9qwedwowo0fjacbhxwwbaywumnauo7nvkqbgbxnfz4svlbvljtivi' );
define( 'NONCE_SALT',       'ci9vbmdnqfhavcvyaol80ksukjtf05kcgjwokujdz8meirvqb7ngj3eotrrdyzxh' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpf0_';

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
