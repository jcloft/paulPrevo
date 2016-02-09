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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'g70?g:[6+;*Edu2s{za]>m,JDc6X<H,mq)/:`K+R-%$lQ]Wb7^i@kYQ!g-3Siq#E');
define('SECURE_AUTH_KEY',  'Y,0!.xySKz_Z(3+_nRKQ#P+W$hkT,WcDc%=H;{!mm!^w!:&lR(zB+hK-zU|u>ZvO');
define('LOGGED_IN_KEY',    '+p1#s8FW+CPme+*r?|x J^<@B*%3~h)u+*77)<2gmCKT>bzVr}C[`P=Vi;>e*&#^');
define('NONCE_KEY',        'M/`TPE#P{/yp~aYoA8KfD3I|@=9=I?MGLv!OorgYV;{p<XK_y>Do1Q?ar1y-<Q}?');
define('AUTH_SALT',        'jzq8+&6)Bd^t/|4`Sv1[gX,pA(cr[ ^-^wM^s*+_fyA:73XOguc+-HTYftl4rbr4');
define('SECURE_AUTH_SALT', 'd9Lob)._mVKE>]9pPs08:!fnI 08fu}(S?5.|p!w]@V3[CI5hAt%%-lrJ{S*j9Pk');
define('LOGGED_IN_SALT',   '^S=LNM+Oxpowx6.7O&8qH;`be;~/QeRuoD0n<1gB)-X`YyySU7]@Gz=5[uPgqg}8');
define('NONCE_SALT',       '3@wLuO^-tWi+p}[Q~le)N:];?V@|2wyCN@M<2qVnCL|R+2cb^>u^SI$l|;hxHZ|H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
