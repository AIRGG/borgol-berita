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
define( 'FS_METHOD', 'direct' );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbberita' );

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
define( 'AUTH_KEY',         'VoFcS^;cEhii0#Xlz|*XT9mLo@/tl-Uz4w1K|:nQV@23cG-JdE:0y.nfCSE5Xo_H' );
define( 'SECURE_AUTH_KEY',  'c6X;tthFs]XS1.G@FMR8`eni.mfD*=!*e3:1Ne1Y>mI>A@V?V=Ojw!3F{-ojm*|}' );
define( 'LOGGED_IN_KEY',    '}&kCZ<zC09N$+Ww_e;i_}`59b9_!txP&@13pu4L3-l@?C}f6@}_H?=LBL[_HsjLO' );
define( 'NONCE_KEY',        'LxMuNR;THTyG>`oq,eYJnmhQ>1h0Yj{LQg/I)4.94?9w]h^.1urjW$DH;pv<_98D' );
define( 'AUTH_SALT',        '?0gkcFw<8d2gw2^zd`adN215a+:O]av{#%hu7i@uz7IId.4fX8qR+w2B;3|)vX%e' );
define( 'SECURE_AUTH_SALT', '1LD*hZ/uX/PYmUo,MS!o<?&1$kMtxTBw9,ao.@e)uCGI8wLACfk[gZrsYD26<f-u' );
define( 'LOGGED_IN_SALT',   '.$LN{Lm:c`f&g8YTle]}}9`eGQ1i&&}i[:-Qt9,dR/9Ja1ZBh2j?j^o6Dy2MLp#5' );
define( 'NONCE_SALT',       'tJ%;`C2J()gv<e{iF-^nfE#9kjx>J~,|c-xJ9Mm1NW.%?@A-[s<apr F1OaRt;.(' );

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

// MY CUSTOM
define( 'FS_METHOD', 'direct' );
