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
define('DB_NAME', 'Sql980734_1');

/** MySQL database username */
define('DB_USER', 'Sql980734');

/** MySQL database password */
define('DB_PASSWORD', '24z3xi0444');

/** MySQL hostname */
define('DB_HOST', '89.46.111.21');

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
define('AUTH_KEY',         'hCZ52h&LI6oLB_TayaqRS0xm:1L}!q%;>Ns7?HzzGA$vdk:2`pGLhoivxiZ=D7O ');
define('SECURE_AUTH_KEY',  '@>WfuX.R?4.JZR5W/[vEZ5T$<W;@jwq%dPX1JDjj#&LkzU}_{NXx-.Z!+>@UWG<j');
define('LOGGED_IN_KEY',    'eA7)&3Y8UDZCJ8X6[kps$`Q|&i0,NBN;m0%)+!W*|%ywG@l:7aRs&iaS3sx,,<?~');
define('NONCE_KEY',        '&`IHcJ{Ii8x)5qg8]r,0yyDN_NJxV]dw`B^cyp]TCDd.J1YKGe__,qc8iC]:mRYQ');
define('AUTH_SALT',        'zhTA=6GVve[C`|m8r9Yq+xwZ]11}n3*nr&H]p)6z|=<tHk=RSXWu0ZC1=vz*.nh?');
define('SECURE_AUTH_SALT', 'fFk<|01K+/o;U4P)U^5akmp#8I[F;!gT.[>vgXdnymQ;Yf>W5c[VrJLCfT9sM_gx');
define('LOGGED_IN_SALT',   'MaQ#1S-U^xjV*6&jAasxwLCwK0J]grIi~@waA  O0tJWgO&6?e!SG{b*sKg3ohY}');
define('NONCE_SALT',       'U}]3 (pKg#*y%&^x9FL?fyUve1;z$E:}?DomRF,r.HPAkRhT+|`i1B<]JKd7U;O:');
define('FTP_HOST', 'ftp.angelika-mair.com');
define('FTP_USER', '1400302@aruba.it');
define('FTP_PASS', 'a848cc92ac');
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
