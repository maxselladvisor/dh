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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'live_KQnor' );

/** Database username */
define( 'DB_USER', 'live_user_KQnor' );

/** Database password */
define( 'DB_PASSWORD', 'gvuDuiXfnFtd4bcyJ4jpwzYo0N7hdQNGl5' );

/** Database hostname */
define( 'DB_HOST', 'mysql.10web.site' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '8Ss;M4k)!nuyW3.o;siaONP--}9T*|tTc]<PV01P(%vhx;]J!QK:#S(mFc$D,.Cg' );
define( 'SECURE_AUTH_KEY',   '8GX!Z1O+u@dRr6$p7^:&UJLp>i@0Q1g?[LJN:Z6!Jjmn&{kK(5E)|~v)l]l32Dcb' );
define( 'LOGGED_IN_KEY',     '(#`oj{5aKCiwy7,E[cU_sBqb}|V:/5NUgvd=VKmG]2%1r)x8WRV(E)vG^s#$@|L-' );
define( 'NONCE_KEY',         '%$QSXMI$Jupa]|? &u$K$FndYZ`?y9-,)|O@&R%}{4GeoaxJB>S>zYRG6k2tTxVW' );
define( 'AUTH_SALT',         '=DyH+j5:^%;;:]c8P]+mReFme]e`v%`:#@FxBltU!++<FG{y?23Q.]Ri+dSyfv>(' );
define( 'SECURE_AUTH_SALT',  'GmGO&hht1kR_fb2s/[G&1r1y)hQ~Ifl(rVAECyCyJN=sBMPdc22sTNJ@5E]MG&up' );
define( 'LOGGED_IN_SALT',    'qBtCJK{U}[$)R9+A|?PIC$>CQfgc!;~Pl5+6VuT?9S5Rj!<XiY4NQ2/Cd#oG/<|q' );
define( 'NONCE_SALT',        '=o3}_j$CXbn1g2}[Zr1Z;|nx}k6YIy9SrCN#F94HUJBB:UOVE)DjYwL!_R*+2LJq' );
define( 'WP_CACHE_KEY_SALT', 'YGrW|xK[NwN[bf8=ToNY]J,I|w#V6h9s,21_G7D`0bn&UZ8x{9{2m8V>FZ^:rS U' );


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
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'WP_MEMORY_LIMIT', '256M' );
define( 'TENWEB_CACHE', '1' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
