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
define('DB_NAME', 'wp_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'QBg~/-P_#iND+Xr>_mPOx#0Z&/5mhQs$aAww9I*8rcoP2]1-8<*kQ-%B}xDe|{@`');
define('SECURE_AUTH_KEY',  '%c)*Y$o jw;wtj@Y*t]R4g1V,M|O;kDW|OGoq5wKD?89!k#iG1zGQumamcTH<<|p');
define('LOGGED_IN_KEY',    '$| wCspC=jAr E /[o]}5]7_vIv/LRf[KWV+[U|rXoBTl=yoAl(mEX%p<*qp}z/A');
define('NONCE_KEY',        '(l6D9x9GwPc7ZMXP%+tz+0|RbfmS+y6H28,SP&OJuPr/rq~60Tlv$lkg3Ahe=nC[');
define('AUTH_SALT',        'Xofu,nf +/Dlh(6@,Exq->WDS~-Jk27#M@$X_|B+rHZ:yuo}! }We-g!WCHiDG;=');
define('SECURE_AUTH_SALT', ';-C`6|P[s^/#!KTbAGE,{iqO#Sp2`e`:BMsVg0y>aJCU7N+`:p4XkbL$DI=net)X');
define('LOGGED_IN_SALT',   'U3S1j%c_dE!ZPRT[!%(oF6O?1!q9/.)DE@[pE`aePwaVtT)_|+@H-e@f0cC&n1+y');
define('NONCE_SALT',       'YS (fN-9CH@<Tjf#VLiy4+oYk.V#]oAR1,o5GQx3-$MGa @57CHl;~`<X|k/FCQ!');

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
