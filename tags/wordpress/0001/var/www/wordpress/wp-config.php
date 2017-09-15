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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'drupal');

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
define('AUTH_KEY',         's;HSYR:]+A<M2aBFBa&:)M.~Xa^Pn2BKiKLZ1x|#Ki!J+ys!l_5Mwj@F>$%:f`*3');
define('SECURE_AUTH_KEY',  '&U0LLc0J_)+yc%@w^6/Pi=ml{:$jiM}xo%g+?Z]o>ev|&CBl7Pk=E< .4,3x |<m');
define('LOGGED_IN_KEY',    '3FWXOq5m_6mepA#Dvq6v,Y92:FGMmC@|adcQ)EIZ NzAYuSNhFT;jYrhI=5qq!pi');
define('NONCE_KEY',        '{W<a_VLol]jFpyT`C&=EO]:9x/6258=eXUlyB{SRbet&K;w8V8U*,_{(?S@;lH<D');
define('AUTH_SALT',        '^B%c|Jl -q21-vSCBUg&6ZH+U6<{~#;fg:~2AT?kPlv%Irs@t=v+O-;.IXvfV,Ae');
define('SECURE_AUTH_SALT', '=KO|p{~Y_9U}3z_Pe>%$~V-.sp@eP:g0eBw{cqq@n1,~hH,-YG_9!2xggM];6AQs');
define('LOGGED_IN_SALT',   '8mw2U0*Bpc^_1-!I[XroCg^)@!S7c6M(wr3J5,iW`Ng86=s:Rx8?M).q/Yd=%$5u');
define('NONCE_SALT',       'h|_d5JAj+A9YO3$%*&ymZ-XadEE8JrXOH:wmwUs1c4 -ye`&M:xD0.az5V}T;KG&');

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
