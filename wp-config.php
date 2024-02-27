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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '-+I5Ue-Rd<X6`;^;qCVBT9m(p^zAn%W[%=FTHQ&60G3|PcNNLfmo*9g[hEDm,a7w' );
define( 'SECURE_AUTH_KEY',   '-Dgu50VDac[_[7@:8=gqG*=GSH8`-CqBy~<hmL(lDaPhJr0wfv/Ct/af.Sq;[x%!' );
define( 'LOGGED_IN_KEY',     '.~Ud*YDA*)kR(hgqa8 >-W&0L,C(fcY8Ce]#H92zxkt>7Ho$VL&)Bv0Dhc6a:(iY' );
define( 'NONCE_KEY',         '=TJnxZ&Gb_n7]h7%tv.04SqF59:kOM9iq&ZzBs*YXew=Wcv$Km4#jq[ji2;Sa0M`' );
define( 'AUTH_SALT',         'Shut93[+&y.Z=eXmZ(PUDywTPV58WWjvZ{m~!L@G#}(EeNEWA(#VvS*KL_#ghKH+' );
define( 'SECURE_AUTH_SALT',  'b_]K+s(q7N0ByI>[RMU-b.=i!2#&Lp6UvMoGFn`nm4Lj]-C;66tlOO1g`s5C$Yoo' );
define( 'LOGGED_IN_SALT',    ']$%ri^}7?Cf{I2-$Z$)$o{!~HnoN(`H&_E;^|8ic{!a<8&on~K_{V~DjGNqg=-! ' );
define( 'NONCE_SALT',        'DSX|tuPd V!3IZb,S(ZVj2!q[!&A/1jBr/{bQm=87@k4Z;g ^S<B CB?y~lR5zJS' );
define( 'WP_CACHE_KEY_SALT', '0;gTB%V<wI}iKT>uYV;E[vro;,bPaiY*@hK}j_bG8#3iL[U%ndgqvG zhAL$vk76' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
