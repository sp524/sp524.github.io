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
define('DB_NAME', 'websiteDBuh9en');

/** MySQL database username */
define('DB_USER', 'websiteDBuh9en');

/** MySQL database password */
define('DB_PASSWORD', 'QEbNtN9cUG');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '88UcMYIy,u^q$m6I6IxAqemWiSeO~#-#wG19sdlZk4[0!}@|Xuimai2_15l[RRCNB');
define('SECURE_AUTH_KEY',  'skkUcQYM$>y^u$qAMAM6mxit*pxitep9:1|1_:~NVJ0!}@,UJQFMBr$nyjuEE2it');
define('LOGGED_IN_KEY',    'v0UcMUIQ^q$myiuf;6;6#Sx~t-ltC:8[4[0!RcNY+-ltdpZlVkoVgRcN@>z^rynyI');
define('NONCE_KEY',        '4@B}3>YfUfQbM$<y.u*qALAL+pSHODt-pwlsh18:8}4kVgUcQ^}z,v$ryn6E2E2iu');
define('AUTH_SALT',        '#~D:5l1C0CsckYkUg0^}^>y,uEQAIAIymuiqem6]2]1hSdSd:~|9K5IbiXePaLW#x');
define('SECURE_AUTH_SALT', 'EI{;.]+<x.t+L9K5pwlwhsC1C1gocoZk4,ncjUfU,<jXiT.;*<+.t*ODODt-p-l');
define('LOGGED_IN_SALT',   '#Os-ksgo8!,r$r$n7E;Aqeme;6]2#;_SdSZO~|-!w!sCNCN@nznvjrBEujqfq6q+');
define('NONCE_SALT',       '3bbiTe;.]+#x~t-K9K9G-lwksC08}8>yjrA{6{E<LTbEiIP2bAH{q;x*i.ptW+elP');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
