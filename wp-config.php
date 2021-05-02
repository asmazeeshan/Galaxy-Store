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
define( 'DB_NAME', 'store_db' );

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
define( 'AUTH_KEY',         '.zZ0BUH~_/n<vDI<HmV)vst+#O&x9%rM51tg>%]ipJ%H@!EQVGa?6LpkCQDZOPEk' );
define( 'SECURE_AUTH_KEY',  'QcrB0z8eWS/3K=8mdkXlh>|wAO:AW93By)Tv|qXd J1K=DY;d-qC;-8<Ej~eP!Dt' );
define( 'LOGGED_IN_KEY',    '0YnCc}&COZeeR{cXqAuzTdxnF7:~{XSzw}_! )s5@B|im=+bv}>ho7]*#a8>o(|8' );
define( 'NONCE_KEY',        '+I#nEcU,W/gaKuns-ML:rxlwyYQ}CONa7]%EK/Ce>fHuH1&zQ|dxv:(Y3n)AdK)}' );
define( 'AUTH_SALT',        'L<dDu>1Jl;:]WL1key&SiJ5vQ&u^!ov3(UIH0m$?8$g|m%zD1U,4#rY> F%zQDmT' );
define( 'SECURE_AUTH_SALT', '2%k,3TzwVZV7&p4r|+.k-_W]gs22ezt?6eHb~m-VkIfcR!_:boD3h9u*W1&CJ?|y' );
define( 'LOGGED_IN_SALT',   'mK<z.{j;5KAY]qh?RG5|A&p9IQ!;!$xguN~T8l(^PF4Ti4yoo2-9m;rso,5R)NFt' );
define( 'NONCE_SALT',       '(lJI@)+1oqx$Gv(rV WRXK6;Z7sjWRSc0>-P#f#O]#V)l FVb2(|Y}7vL(.od@>k' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gnhkl_';

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

	
define('WP_ALLOW_REPAIR', true);
