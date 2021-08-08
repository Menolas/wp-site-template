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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'template_base' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'tuQ?]b466&_0/~[?cBTw]|<W!RA62IB@x<0T},pIXjgS[0H^l@4~q6[;ou)/| 6Q' );
define( 'SECURE_AUTH_KEY',  '@6lv3g?p;wF+}?h2WjUFF?21x2{Q}f.#a>>`U`y-oAq=^l2-DjOVQYrXZ(oAp4)3' );
define( 'LOGGED_IN_KEY',    '=.mOZiBcYKfP[x}@iIHa4iDFd~vZCjxj^YT((_/>eh0!2ay@(=Yzmgm&]>k5a`%]' );
define( 'NONCE_KEY',        'irTd+9=OUOTtZ 8pY+20.GB}T579XX;><%[b]C[%~m/GU^6;l#<kM4RLLvB)JPi1' );
define( 'AUTH_SALT',        '.~ESulY,M|zF;lf ~vf%/ES9&TaRL:NKh&Xn}Hj}Xef~&YNzoZ}%::,Ru5J28rTs' );
define( 'SECURE_AUTH_SALT', 'MC;IT`*>B{_@:#Sdr>H<{ z: sgz5vt=I46qW=hli^qVzbIHQ@lY/Our?[?.!tnV' );
define( 'LOGGED_IN_SALT',   '6K6FWC8eHy-:_`oL.dk%/q5;}w-j>9VT*q3]5#~n3{DBV>~>9(5Ub[Y|20hJ>? G' );
define( 'NONCE_SALT',       '(^s!w3C=XW<WU]LiaQ8ETA1|MXMw4e/vKG|.ZsYZ9Gg@8MIw)Llna;7HqD r<%MB' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
