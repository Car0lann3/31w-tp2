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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bd_31w' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Y j/wXI Rl54WsWHu+I`vi-|;al>IT3|_Pg)_`vv^8dBeFFR0G.qLBI-!>MvXn/%' );
define( 'SECURE_AUTH_KEY',  '4D3%=zp!gwSjLp4;_^ggps^|N^?[U}{4&0y5+%U;_pKJ!q$#QlPz|OijiN8XSMW*' );
define( 'LOGGED_IN_KEY',    '|x{h],page1Aye&<#9K$b?Vy7AM 8ZL*$fn~{<RGrZ(YNo1[LTqT;G?tPuo6aoIA' );
define( 'NONCE_KEY',        'Qx$AXUm(~Gc =5/&qOBjcKBW8?(>$aMf)o/@fh*7kn`[FlT+.YMe2O5wOX7MN-k1' );
define( 'AUTH_SALT',        'fL&anYs!bwl(<4:m`j.D}SA~t4^4|Ras@2c?]1a)&&U,KOxq8o7 5iG%cRpZ=%#c' );
define( 'SECURE_AUTH_SALT', '!:Z/(q{E~8/@HCv[I,2fnp1}R0{(WjHdU,>RmSC[/AkwN5hlA9w(T3`n9%D-&J!p' );
define( 'LOGGED_IN_SALT',   'N4obD!Iy#S,<*<{v0DWYCQTLv<+(f4dmHr}d% BXpU;r:$#JJP[Uxrah[clLb@rG' );
define( 'NONCE_SALT',       'E7,k,qX!0v$z1W`sZ OT2!ACE5<Qm#WahnH]=Ua9l<O5bw IXKJtv-3TP/|n*I&b' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
