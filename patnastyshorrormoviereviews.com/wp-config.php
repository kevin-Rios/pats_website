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
define('DB_NAME', 'pats_wordpress');

/** MySQL database username */
define('DB_USER', 'krios_wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'kriosP@ssFORPAT');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'SXoWjEGDTj:%?gw<o}/c m}[g6o^nI~Sg8Z|]et6Dio@L{iFX~w/C+|TPSPH.uIg');
define('SECURE_AUTH_KEY',  '<Pb|/KIi</E;XCR(K1|YhAk0W:8:?S|&8f@VDP7(Y_r/Cf/5*SE+[E,1@c`a*50!');
define('LOGGED_IN_KEY',    ']SWu9(8zn0XLg*~X>a+;r#I!e3W=#48zNlb`hsj&Hob>}t=5.tUcmH3-WZ.nSyph');
define('NONCE_KEY',        '.sDrfD8PTZ.p`>!v3Z]L8n||-EoPm>r8CR &w.)q|NQ9Cu*2Cq&L(p13O$qR/ _t');
define('AUTH_SALT',        '||17|R/N&M:D*> O2)g<Za,aju$4L7.y+6+ ffE7,O!U7JHq+LwG],|LM>O8PEp3');
define('SECURE_AUTH_SALT', '=F?h88BJO&-J_0|YP))2~V|ilK[}`^IyP1^VAv#+uTnUIVU-8!S9wsG&K`Wp5vBA');
define('LOGGED_IN_SALT',   '*DL`ey| qTzVm+!c1A{)L$&Q8W]_~`%DT|gK*GCH}X-yGl#;DB,o>C9kV5~NLK!F');
define('NONCE_SALT',       '@B6$9-y@:#7=-ModjL*|[]$Ey}9R;=uhY%j[(GnUC-5<9Xc$?WEAcwJ3Y)vnuhF&');
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
