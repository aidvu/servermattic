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
define('DB_HOST', 'db1.g4.gm.a8c.com');

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
define('AUTH_KEY',         '[Z}v)6[*Z=#exeWc01 T}y(OMy1`hGym&{E[{c,RcU!FLBPQ8I@hmGi0r*#M1w^n');
define('SECURE_AUTH_KEY',  '`$RXiCQT$v7Ub,ei>j|L9zSvol7Pv@9Zv7T=`S= y=?[-OCj}<MVz#YBL9Mku16D');
define('LOGGED_IN_KEY',    'nePr:h2&uk|(qglKzIr N4)/sW71A4f#nNi?A=$TW>Vt/(5[0o/YQi5L&Zyi?ex_');
define('NONCE_KEY',        'guhJqsfvp&1Kqoie@Hhpt91IOcRLikDFb3jgpG{m:)G?3F8:?c%T~{Zi&HV51&x}');
define('AUTH_SALT',        '=iZRjFB~NON$E57Vjl(?-xcy%|snj6A#PdA$72B}C0v(R~q{z/2~x<u!+a;9#Kh{');
define('SECURE_AUTH_SALT', '`<Puwul cWi.@0OVvCvIf(()k MPPw2DUDTF=UdVB*aa`5t<QiCG@y1f~OLTJlMf');
define('LOGGED_IN_SALT',   '<Hk7Ir]58(URGi_gPnmx3Nm4O9igPP7V-Ue43 !TTL$k#62/xYo{Z?cSGGFp`.cN');
define('NONCE_SALT',       'rknwg)6;%Tzq-~jxnSiC8^R<eQO[a<T5=&Pq<J<R}Ks(v/L#P&w}A;qc{L_#bz_7');

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
