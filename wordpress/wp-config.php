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
define('DB_NAME', 'TeamAdmin_Wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'Team2823!');

/** MySQL hostname */
define('DB_HOST', '50.62.209.17');

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
define('AUTH_KEY',         '*1vJj%%fr:@4A_/sC=YcUm!{ZMLp6XXZ3Uo5,w;uFl?q-p$l-<C_I:>Sg5=:{tdE');
define('SECURE_AUTH_KEY',  'aAcYl~I?rZP`M=F`Bfe3=DP:9fi=S,XxuIC|l*}0dw32|CqYuFg^?T0fTLx*~ac*');
define('LOGGED_IN_KEY',    '|^gv&v ]`)nKV<+*5p 8]2WM@ IN,|n^l^HR]de[m+{E1Zlp},c#|<z@bvrWWP;;');
define('NONCE_KEY',        '8E&;]+;Ncn7h/(h+7}gLLH-eh8b%)f2PR{;F+71.%}_.nYbv|lv42=unF++&)T%$');
define('AUTH_SALT',        'D`&qWA2}Ev7vmhpl-<;^))3PRP}Y *z|]4e5=z4=t?~Rh!(vPEZ6z$_Ib-m`A=9c');
define('SECURE_AUTH_SALT', 'DPv:4@r`eIa& ,)yT_&$xV3LEF?q9<MA^FzDua 7N&I.8?_wa8!4`O#wg/|k]-I{');
define('LOGGED_IN_SALT',   'pD}^D&oLo3FK*+L?AD967]otx/u@vsIzdXZihad92C#cm.+#05} 2&DlP9<<}X!@');
define('NONCE_SALT',       'U_(l#TIX`@aFXM~ i93k/W5y6V,HWZjB~DIT=_00,n$N5qWxyscZ~)9*j7+xrb9v');

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
