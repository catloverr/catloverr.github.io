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
define('DB_NAME', 'testdev');

/** MySQL database username */
define('DB_USER', 'testdev');

/** MySQL database password */
define('DB_PASSWORD', 'Fluffy2112');

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
define('AUTH_KEY',         'oD7LM^XO-#5yY<i_xRw)=VH/~hvS_bFm~sMrq|)nPec[1cUyiJXLs;|V|Tv}_I27');
define('SECURE_AUTH_KEY',  'c6vai!ZPKE[_{sKoWFTK.]<j[7N+LxB6iFLkl$6FBz2}28xbj+dB6m_NED$,|Ow)');
define('LOGGED_IN_KEY',    '[IQDEI3&43(U]{$e9^^)|X(ZazR0GS0k[8E/Y5F[T(CZcB1p!KcR>@0])J,QZTcI');
define('NONCE_KEY',        'IG8(a+zarUQ<D4P5/Xyy-0w=[-T?m>nD8r>sJI[73jaJ.+!I4,{k$D^S:O70=Rpm');
define('AUTH_SALT',        '6LH<cjCmv1;SQ5E<8>{l]{Dps+)3gkm+Q3oDpy]#-zWH e2@nxnT2TG5)o1c_eHZ');
define('SECURE_AUTH_SALT', 'AdVFjdxLxF!<J^BvArh+}lr?$T1fewn%C3:lhJru!^x9C)fSU XU sn|9Vw4Alc6');
define('LOGGED_IN_SALT',   'K0^:kDbcd/fjW!R-4H2Ir/Hw?BR9nr-3&?|Gz(grNRf-tARkM|U6tUC|!#Aw0C=U');
define('NONCE_SALT',       '~l3*w0KF/U=5&w3$OfCOvR[Scj1U(VsF>D,g6j+0Z$w`h 2$RjfLWLB%-6 (=l<d');

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
