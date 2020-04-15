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
define( 'DB_NAME', 'Hatsumimi.fun' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Cm@j#=G }t3L.^<aJ=(Rsenjj&n}uBAG|xFAf1HPv(<1,C4bb;y`X|6d3A35k;!{' );
define( 'SECURE_AUTH_KEY',  '0z9_9Zj/j<=|W*F3hhxHm NzsCQU+!E{t|!{#ls[8|x-lDDE8afv)OTGwx<iNsqB' );
define( 'LOGGED_IN_KEY',    'V/;9u>+ mjk&[+8*_jkAA~<Doz]~2- {gpxvljWSw;&Uo{?m)!z~d@F]YFjNw%YK' );
define( 'NONCE_KEY',        'ZsrXhADfcLM}U?Dz=2V$E+Mp#<+}uk|#PN/`nfeO]-6UE9O>Lvz4Y .:dwRWA=SY' );
define( 'AUTH_SALT',        '%]OGI G<M49Tv2F!wG^DN.)r{nbd(r!G12eRZbb%||{e28ZUNxgjEO1A& AbYj{|' );
define( 'SECURE_AUTH_SALT', 'ARd-}$^aI/[~ee`8naz`}krV2O7Nb@j^5z{&Av;#_G,(=[=v}1zx4bFVHKR%(j9?' );
define( 'LOGGED_IN_SALT',   ' YXZO$ZToaBD^8W>3FJ$aS?SM:N}H2A#55KZFRI^k$*F>Fv-+5L5KHv8zL)HLQ?f' );
define( 'NONCE_SALT',       '00SsBAjcDk>fxGIp U!O-Jfbb_Iu!vyf/0&<x6Ip*5YgZ?kCKBwXYm|KyziJ7hz@' );

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
