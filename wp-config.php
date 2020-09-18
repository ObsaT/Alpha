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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zion' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'k*z8l;O&Kc/vQ9cOG$MU~?_t`_ypwk|R^=,7U :;0`Q2@$>K6<JO*UGxjzZ%-2F-' );
define( 'SECURE_AUTH_KEY',  'I,n4c9nXDcC&tJ,U3V|7S8H:e}WWx|>Ay9oeP4^Mfnd5+R3/$?3jsRD6FQS(nd)~' );
define( 'LOGGED_IN_KEY',    '?mI#E/| J>E1wl5O@22KiDs `w.p__mRJfJE36T)FqdQ-2}~y~GT_J%B-~-F}Z=k' );
define( 'NONCE_KEY',        '[z95o0I%//;s3R,BKW~#(7-sCDBk:#[ZA^!Rs{)ChCZ$nhmV?pAA.<Rd| =b>qI ' );
define( 'AUTH_SALT',        'kiI+gh7|:5e.f0!QDp[X)zDow:/DeLR,)N[hGet~:kIrBp]_)85O&g_TT$-;0E4F' );
define( 'SECURE_AUTH_SALT', 'M3VW1$WF*@&f3L]mqfG~6jTF1|89hH-,oop(ql6m~APPgD~`G4pj,-kl=PE{Knl{' );
define( 'LOGGED_IN_SALT',   'Y^Or<P!nttTNQ>&3;r6*<pNjKu&HnBBzdvC7wFq.]%2I-]td1l49VqBMzcw>_{yZ' );
define( 'NONCE_SALT',       'Kn5r!^iX0.~,F1C_<nZ7cH:!(`C2|-6{uZhBdOW62g X{#3rBw#(A8kS&OBNQeR/' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
