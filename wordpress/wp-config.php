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
define('DB_NAME', 'nav_theme');

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
define('AUTH_KEY',         'W?2[l?U>c;Mv66(H#G%6s]7ueCL9)SR^:f.wXUR(g{9Q(XD4,GGar@snEb =B)LZ');
define('SECURE_AUTH_KEY',  'QaJ2^m[[`Oz@TY)IJQux MOWe!.c.Pi([urRVc[KK##l]l0*(Q<9hu;-YD%K.]?B');
define('LOGGED_IN_KEY',    '&IV[^{]sLX:2{y6 V$NiSM{Zlug(`2Zr|%@^H${|ky0}@pD4QX}x4`jZ&S6s$XLW');
define('NONCE_KEY',        'gpHJ/{^m&mfSgdjvyEd6qC<jx:ghDQqJUo*ke]fX)z@35E8KtsIK:xp6JiigskCi');
define('AUTH_SALT',        'e(e<=&`:p(krj)^_D$h0O>adKO&|GU8%Lf2Zrpr^8Ww8{p==B7:Ud|hZ_;&3Z- /');
define('SECURE_AUTH_SALT', 'wBrRgFdl:86qIpu%i4fhko8fHI1!,*)Z:!FZRMj,gf]!<c-Fu;}gzT^tw!RM}Ik?');
define('LOGGED_IN_SALT',   'U)xT33h<{S|B%SM~}H>^XcZbR~Nh?gK{ahp*FeUu]&Z[742kn@^zJ_ &tK+RkmP ');
define('NONCE_SALT',       '%k~58awDQN!w~oc2h;u[POa7Z2F343$cLuz3KU#YSWXV,$G6NK0M=8b!HuFTGnl6');

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
