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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\GO!\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'Go!' );

/** MySQL database username */
define( 'DB_USER', 'Raquel' );

/** MySQL database password */
define( 'DB_PASSWORD', 'abcd12345.' );

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
define( 'AUTH_KEY',         'wN<y1.~m >t[63wf!F1p!yoxB.`^ `EHHafOu<W^<OwK%$g,{8wDrr1uoA,u8*eG' );
define( 'SECURE_AUTH_KEY',  '+?Y;ZlMqbuoaVTJ,UV@+jX0E7;or$W>l@iU|!k3W#t=YiE{$Qd:5{~t]0Y*S5TM&' );
define( 'LOGGED_IN_KEY',    'V3&Vlv)+:z/T{?* Ah90Hc$Ui&hozLgObzmo-R/l5rL*Zr/*^M^DeI,czZ6=@`kT' );
define( 'NONCE_KEY',        '=^K4:,aF5_DY=qq+s3pV@_S)Bf8)#rDB$5Gf8sSavvLsB;grM~y]#Ubt>05TAfL3' );
define( 'AUTH_SALT',        '_,P1PYnseAV57MY0l{vAP9qlg*Bd|*4S^i?xV584r~^AayvLIBzSk$*l/5KeGfS,' );
define( 'SECURE_AUTH_SALT', 'h*?>ghLKU.sq1,f=9}Y1mf6<Er0~>;tebG/Pic)5WSg>wc~ NZi:*%|L)ZvVOG-O' );
define( 'LOGGED_IN_SALT',   '#i?-!ZFy@.Uh.4Jr_#GJCmb5`#t=F+q51w:gpK9]@ADnbblh.s(g^sdHTN8^sx}.' );
define( 'NONCE_SALT',       'W:FFuu6;L0LFu5I>,eoT/v&U`$-QtuHjJtYh@#f`&5D;}r8|Y<LkLm7=*WF/E?q.' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
