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
define( 'DB_NAME', 'exfitness.me_db' );

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
define( 'AUTH_KEY',         'sPogOo@):&|,OY|-Y2tz?m^ZT:<,l(#vMnpL;(1LDfDJ2)d_sDt2gqHr`5/Ydgp7' );
define( 'SECURE_AUTH_KEY',  '-~U?o2Ne;m~h+^Kx ZT`%tBpsqVLP9DUD{v.,}_1y!XC34N/k;zm4q~JjSx=w=ev' );
define( 'LOGGED_IN_KEY',    'nT3-6u27OL38/= U@!>.!@;jIY$;67XUGzix7HU2U-Xz9b3X#vE^L<)J+?-}yK2h' );
define( 'NONCE_KEY',        ';{nN9?lScXAG=<DVco?&1N/!2hYvcMP=0FRou0`qd5/L4j|y~D2bR:!NzaROZSi,' );
define( 'AUTH_SALT',        'w7,xAACw*:e1?zK7Chu_N!R,CcW;T4~158G4pJ@C)A=*0{Fii2<sFprk]|`PQDw~' );
define( 'SECURE_AUTH_SALT', '*lEbM6bQJhdo3?Yr<CDsgCY,(A@JlQOPkD+# kmU{AQ5nE]fpsl?7JhDg6G$UV/6' );
define( 'LOGGED_IN_SALT',   '[IS!z`G}F dJGiJ.[t@pfw _)([+Gis26cmQ}DiT;W#_Jcozg+gB1uNJD|%t6=Y~' );
define( 'NONCE_SALT',       'OtA$FbClH.?$y[<}Y>40bvux&XAZ{*Cubp&.FKagV%_u6bO$@2MJ^O@Y62tA}yvK' );

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
