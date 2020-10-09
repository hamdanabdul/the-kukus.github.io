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
define( 'DB_NAME', 'kukus' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'x&Z]!;qA}ru!^$W x/dCH0qxMrNV[#=<0+f#:B5^-8BeUJ&JmQlk@!PVb+-UhmD>' );
define( 'SECURE_AUTH_KEY',  'up]=2r]*Z6]!+tq.7,k?*P!{P!u(_YWs,lSP5S)U~$*!|Z@3I-Z&(R0+5L4nBl8C' );
define( 'LOGGED_IN_KEY',    'K8*yZZkb!Tx{jeftQlC)by>5VD{TihzsSbR)@tXU%^<Cq[vL:s$3 57;Tty5o+SV' );
define( 'NONCE_KEY',        'lDQ:l2!MK/Ca_iE4yWLb}0-_^Q/jhHN6%`R@U1Z}~*QQM=OJ}$ H%3Lol1uSJh?f' );
define( 'AUTH_SALT',        '0-%c9o4+J2if^u&b}1}3V%kU#rxc|>WqH$)aBuA,U/q}z)R  [&{*+)sGr`#z@a[' );
define( 'SECURE_AUTH_SALT', '2P]jl zkwO20][w+W*oZ{m*}D3^@y0C-vCUR#~LE&(@4p_0^(p?6!n7-q!,=R#f!' );
define( 'LOGGED_IN_SALT',   '>PFfdywC8m*[O2(@Dg#Q&C%mSQG~N.XNZ9@/JofB:3ISyI&9vU;9%5FEgmW:Mvy+' );
define( 'NONCE_SALT',       '=i@p:`g.y?.#r<nRgKXf:vXbR^~xr)`(l d>MoT%zf56-2(G=Q~4:|LNp@t?d Ox' );

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
