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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\wordpress\wp-content\plugins\wp-super-cache/' );
define('DB_NAME', 'projects');

/** MySQL database username */
define('DB_USER', 'projects');

/** MySQL database password */
define('DB_PASSWORD', 'Thestral01');

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
define('AUTH_KEY',         '[e;$g*M7GdJd+w!UFUx!;>T^5^R!sqT==POtak5HI`WXc!t*#8t=_$L K%=17w]>');
define('SECURE_AUTH_KEY',  '%Enej)G9t-KAV2 B%Ca}K{R36@^5Kyx|pA;@D$(&wB~AAvNij.5C:rC+9E$({1Ik');
define('LOGGED_IN_KEY',    '%%Y<XUV`_T%q`S }CUrS-e0*~tMm5.%PiwqRC_.==Abf3KR<(`f?h!.^LXE%/fn.');
define('NONCE_KEY',        '2$W,N:<aWv)Fpr~Y /G=N?c(>(NtX8VOhl$JMH+D%`1^4MBD6[:LqPuGielk(R})');
define('AUTH_SALT',        'bm]zT[U+N)#4 .A606>6Yu/=?*`<.Gb6TR_k1^:JL}p.41Y`?zFXo+=o^~T&=I5X');
define('SECURE_AUTH_SALT', '=q^*Yku?xa2 *0{/;{T8c>`v@,8AU;~^%h~K=eSlT39V-S$uoDM^2@_h4XZ3H0CV');
define('LOGGED_IN_SALT',   'olS^a]MsQ;gDA+N]K-o//0iQlBEAoec]jI@r78@,Gyol~8wU+{i1c#IT;7eEBr>_');
define('NONCE_SALT',       'fmIK$.jkt_#L8#6f5vAk1!W&WV!m1E!^R8qhQLG/CSTC0`us,g+Go+QvzxvG&o&;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wprestaurant_';

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
