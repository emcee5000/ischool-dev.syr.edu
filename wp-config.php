<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '0Yr5L%HuH`.|$)Wln^vf^3V[G7+]||&nZ{olq5Tx `N4mcv#_bd1SR&5m4%*[nXV');
define('SECURE_AUTH_KEY',  '# thbm|!Lm5#EtVW|^C;Y!r8Fi/mVn,}SYiH)h@`EGOT$[dm-0k)b4V}_;x$TZa%');
define('LOGGED_IN_KEY',    'a#Tu2F]CE))Abk }V{Q:]|JP9`g?L8n_8hKQ;O*l+Dl=^=rI:SH?qh,G:q)tUX~<');
define('NONCE_KEY',        'P+~Vw=JQ>,/0b ^HKL6fKu2 X %>a_p)}sx+DmI/kZ.blx?vz6qXy4v0}jL%`*{#');
define('AUTH_SALT',        '--`4-v4Hj+JwE|CB>-CcmpoVV((p=?=dkton-~?GQ$v#.hGeDVoZRUOm>D}gbQGi');
define('SECURE_AUTH_SALT', 'Pf~w.L6!J+1R&)N5sK|~dumGX^K]kf@rOa*XH5dfJ()$hxw%sdy,(+;KtNoTZ%-L');
define('LOGGED_IN_SALT',   'x$zRT(bp+4QH!{mT.x%ifRL~u-Qav6CWgj={x{{J@Q_|T&BFbo)r_1=MuZ7uPtFr');
define('NONCE_SALT',       'q402pm7|.gV-OT^x|0)fqGE}P|=&ut@gD<&~=?{]i0]O4g7a4,fHf KdCyEJq:aX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
