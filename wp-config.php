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
define('DB_NAME', 'wp-starting-point');

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
define('AUTH_KEY',         '7e,P7ir1DskR1LK6(?m6_CW:9Wiz3`$zQ,=byld<jI{-$|qZ/PT| W#@ephOL<9)');
define('SECURE_AUTH_KEY',  'Zz$=jUk.dHKm4=(KiPs4.Akp@+B`/oq+pF]+Ry4AdVP)(>M;`O]n1&.F*b.B~+9z');
define('LOGGED_IN_KEY',    '( %G`ww-&-(p&4]Ee9$a*6[fXf?k&:[:4+k-@?6lYj[%DC]Xqo.{>:f`)_fk%k,-');
define('NONCE_KEY',        'lAVq,Ba+48:S?z46kY=a!-=@XPygb-%Z>DIWK {,Ax_tcxn;1;+[}D0`Q6pICa``');
define('AUTH_SALT',        'TD|:s0/ j|0v|0h:|M0pV1$;ABwr{)D{@Fc]Zcw%*(@S*iYwKZ&+1xzrcYhE91Xu');
define('SECURE_AUTH_SALT', 'GaRXaG3g60P!ks{CGT},a~$(n@>X2a+t.#&;W!aVy=`!}Hp1mW]$z6dL%X*8Z14,');
define('LOGGED_IN_SALT',   '}|-9F 9rM!lHw &&q5:XPin&pVN+zo<gG.^1#}D![#:?ZTDA}N/q-Xt;zNMQF^!s');
define('NONCE_SALT',       'W|t>Y(o>1h_>EDhxfX.CS+h-2:/w.D;[}LTpc=f1n(UT,?9k(!,_1gA8h-,<D&>k');

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
