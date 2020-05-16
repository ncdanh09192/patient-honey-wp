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
define( 'DB_NAME', 'patienthoney' );

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
define( 'AUTH_KEY',         'N9/iM0xDI.FK%Tf2mE[ =Ho+tr2n6Hk(wo_*XAis6@?`EJK~JT~z_ OT`;<*o<NL' );
define( 'SECURE_AUTH_KEY',  'Td-azd=<2f`i/%IDybn7/acg1lv@^|hn/GtR#l$sg+[tzKFV].pGWk^+BK/v.E2T' );
define( 'LOGGED_IN_KEY',    '5QsTJ_uYOB~_d0`+g!P$VHl/ztZ;McJ?)q7=gd;Xo;6.,:;Ub45j^4IAX-Ua}p!`' );
define( 'NONCE_KEY',        '4:LgyO$n_V:$GJu/+R}Q!.h-N3l-<n30[F?@7s+o&l2.*)>u-DZX?W4G1[n1h<P|' );
define( 'AUTH_SALT',        ')|P%8Vv<kqc/aiEiXSU+%$0;DYIvy,#}ir0WtKbOniWFekA%|/S6er$j*|+.Q&L7' );
define( 'SECURE_AUTH_SALT', 'i`+OAqwJ/oW)dW#T8FCZ+f$Psx9mgFb:HIbC4@.[@$T}^$YWE<|{G@bI(F,WSA@7' );
define( 'LOGGED_IN_SALT',   '~OE;tJdHsb}r5N*q]^N,`:u{%-QC7NZaHW.{G|pv)sh{W_qj|7=~G_in{{39n_<K' );
define( 'NONCE_SALT',       'D!ceFsN889?.G6keMqv2B6`3^o,;mn*C11WqHrT^z3UF-d0{yihf/7q;!U=MKfMM' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ph_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
