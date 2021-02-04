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
define( 'DB_NAME', 'test3' );

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
define( 'AUTH_KEY',         '#V9jPZu/h .zR-k^R0cWS]Qt4 4+9Nyz dQv}%%dsoP`[Q*,hD b,M|%ToVo#.$(' );
define( 'SECURE_AUTH_KEY',  ';O6!M]+S`+J^cL;I21uGBIfOR)TF;BB ZuKn!^8N4t5Y~2[w++MukevFhDas^qCR' );
define( 'LOGGED_IN_KEY',    'mf/DTl37-Y1@Q[e9 }-IY77)<9TUAw<MA^Jg~Dqmn@ vor)_!?NriC;_Y:?%!IZM' );
define( 'NONCE_KEY',        '?I;qZGCOReXw^99W!`fU<XeHBX{Y:kSF@he$``z~vt`.V`<&9N/q6ld2?*K4l^g~' );
define( 'AUTH_SALT',        'M{[*G:~*)n>d (rt/!JVYqGR86W8zbgGynhCkfy)90e((VAfWT(nfl$&nnyq~[QM' );
define( 'SECURE_AUTH_SALT', '3.uYc]:u<#|)gTc-p3t;x=6-VV+EEpqJI?i:uC6Kj;:o)]ysFYuS+!cw3faRP$zs' );
define( 'LOGGED_IN_SALT',   '%(@sQ9iLXr%}mQ,vxP9fUdI(GN*zF~7>GFJc8e3*Ai9Mo-MZ.W(]fnevp,Cln{lY' );
define( 'NONCE_SALT',       'aR>IapEUSu!oT2k.j;u=&qSX4UiAEO80_j~)>F(B`]S=Q5H75bIV^-Z/< $f)(]1' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'smk_';

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
