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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'FIujmdw~(W2]s8e;MntXk;<oU`hMgn&)=#uI2XBvGwpk_`7>K:u(M+F-f*H:ny|T' );
define( 'SECURE_AUTH_KEY',  'pX2hE|aHs264g? c]dQr~A1Cq~1[+LZ@!u&H-Cxxv0wSDsKige[qEarGik(tB`{j' );
define( 'LOGGED_IN_KEY',    '5UgF:SWZuEo*QPksc:EMl)[?B@[/};C(/Y:1FK}(_c.[HAIZQqdNtO-M$-(^$WVI' );
define( 'NONCE_KEY',        'J9F@1+@BLX~Rjq8dv}cR..k[/)S-+IIA% Cv$AxFV$PHRXo<7n~~GjOctGfb76K ' );
define( 'AUTH_SALT',        'u|(G;e/44:*Atw!(TyR/IBXb3r~B8V;lpq29!a2M[f;9d)2cXo:S7fI!`^g}ecT2' );
define( 'SECURE_AUTH_SALT', 'Rf)#!N=,pv[]e4^#y`0C&#]C#,q419!d-F679Q.;8]<;t@rvlG<({2~7GU6qh^[~' );
define( 'LOGGED_IN_SALT',   'Yi`uNIEVfNu(5#+j% ?Ln{K5d`mJn+!Uuvz>.=N 8yB~on}uV;{<t2<^:h=?lQjW' );
define( 'NONCE_SALT',       '^]vLaD76|XheY6kwE3:VW?J:L]7bU1(Op/K-[mnXRdh*j?{nu{@FH@=(]6Nha3Pk' );

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
