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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '12345');

/** MySQL hostname */
define('DB_HOST', '172.31.20.92');

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
define('AUTH_KEY',         '~?tTR!|M(W=6QDE/ZE8Fk1H~xCRyS7Bh+xLIOl1}7:9tg1[kfm?/iGba=EEb)UI<');
define('SECURE_AUTH_KEY',  '~L`&?KqjPR&T9L A|z6ai]>V#tm/fr=a^YYNqG}QvGdjJVISRwna(U0XdPAnOBGf');
define('LOGGED_IN_KEY',    '|?^EWimWi>}km(zeooQcbX4 3z=VhUT9(S/)4~ )4OR:+*eXS0?lT<v,Xrc$z(Ey');
define('NONCE_KEY',        '`D9+b =)*x/l/%;uiB*b1f+Gx)CT>F],q#`HzO}AL z+[3,tQA[S0cYC&%>tkX R');
define('AUTH_SALT',        'DM,4O p6e2&Cf:VHUw?8Y;)d3XqqG6QNNKg$h.(]n 5Z$?]bJ}jce_yRt.WrVjDx');
define('SECURE_AUTH_SALT', '#GNn358}Q~DSg3GIh4!k(M4_`PHv=SwlJ::_wuT4f&^i|8q-t=j9dhoaV*rxz&d5');
define('LOGGED_IN_SALT',   ' OkCT3;D<@?ZGu=!f7QyNDrc3dr|-nnz$|ey4liS^,P6uGR3Jxfo:fUxd-LL=PU[');
define('NONCE_SALT',       'Ru:pdjmW(lDx =LGY*BJSnuZZp{o{i:g<`b/5UfPGI6vVBv(yO77|*tv{5j*|CV+');

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
