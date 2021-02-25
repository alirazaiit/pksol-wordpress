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
define( 'DB_NAME', 'pksol' );

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
define( 'AUTH_KEY',         'm!FD{P=N>J<(QW.SA_[C]_ZWK!tuYO!W2 )yFV(g?@(a+W: FSNAWno.:fYW3.3{' );
define( 'SECURE_AUTH_KEY',  '};KhtwxP@gB1)ceLv+DJ3xa|>XS.lsZQ[)s7sRO5<?N@{2n)/sA0DH {acLJkA96' );
define( 'LOGGED_IN_KEY',    'P 1x@rVM/3YS$getUF>$X;4O+an 35#N{,Ur^Cf7[.l&Y5{6f;>&rz-<9oHeafux' );
define( 'NONCE_KEY',        '*IS@zi3^Ku=Fv>ptsnU}h19NW&Dn~c--*):{6IH3SP{>W] +3HXO~/t?u($wrt?O' );
define( 'AUTH_SALT',        'Wvdm6=qH9O7<$~OTCC}?vj #ottoU}6aHkKlkW0|x3GLqAey(Y9^kW6_*YTbZ&?1' );
define( 'SECURE_AUTH_SALT', 'zRyGe8g/;t/B{`w}e.OBujQFsy3Ys?j3Ej tbnQ,?yc}`JDC%1Tuwqmj}&7+pjsJ' );
define( 'LOGGED_IN_SALT',   'WRw-4@A?^X_o>4DQ3+oqER|SOWk@};4%(pI;<A325t0ddu$6iVh?d)r{Npw= ?v]' );
define( 'NONCE_SALT',       '%%`N$T1Nz(ZvJ6cU/u|$~YZXlo~?aS0=gt={7-6wE7/T&brn.-?+vre6_V-EnM=>' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pksol_';

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
