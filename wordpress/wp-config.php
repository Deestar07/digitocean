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
define( 'DB_NAME', 'digital' );

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
define( 'AUTH_KEY',         'b3k0q71d.sJS4&sR^t *o|b)IE3t~`pe*x[-}Y!N2Te(ASPG)3KL5k?6g1 JdA%:' );
define( 'SECURE_AUTH_KEY',  ']~hgZ&=b;E:7vlPd@o9_&P})hd_otV3A^m Zc/?n^pl_v6nG_<V2lP_s$t;e#HS_' );
define( 'LOGGED_IN_KEY',    '}U-PHd<N+= -9^?^^l[9u9jqk]xlpMyZ;a0oS;1Q2zygm.Y.R;svEW5r? 9hmT{6' );
define( 'NONCE_KEY',        'Nymjo5,Gm934EG9Na*8dg6hV`${(BcFk^i1s&D_sT4ns^6}Ui).e(6GqP!r-{N)D' );
define( 'AUTH_SALT',        '-_r?I@:46$!49U34D27.SJDYiY94}QLsA1TMoQhM_C~<i4+,I%Y{!yv&>.=O+r&p' );
define( 'SECURE_AUTH_SALT', 'J+u?/(z,[)w{Se!ar{VT:5#TW6AyA25o`!4(8cS{|5~J{u<Dkm|fKD:LNed):[gf' );
define( 'LOGGED_IN_SALT',   ',O_=/b+&=`42M6 ^o8N+TpubSNFl8?M#M.j.N2F>Q`o`/}y[Skiqo@PDUkeF@(uS' );
define( 'NONCE_SALT',       'cp%aF[t&9i#2A_0@efLzke6DZpth$t3KnB.BZMIB42}U~<7_oSm:$D9ORHT`dm;B' );

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
