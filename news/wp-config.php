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
define('DB_NAME', 'mishastechcorner_robots');

/** MySQL database username */
define('DB_USER', 'mprasolov');

/** MySQL database password */
define('DB_PASSWORD', 'Butterfly3933');

/** MySQL hostname */
define('DB_HOST', 'mysql.mishastechcorner.org');

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
define('AUTH_KEY',         'sAz5M8T}P!V2i81GH^f1@kZo#bBy!CYg-_KB?&p$-V,|eq 2`W#&Xp)@26MPftS<');
define('SECURE_AUTH_KEY',  'wzvO3Wx5%z+[DJH63(QCp81arTJ,Z$_X#E4%Wx/S4S]g|&silcq|QRjRI)|A%f9u');
define('LOGGED_IN_KEY',    '$I7lToTc?*0V(8NSyh-+=,)m/e%;IC ylGex%.gqv<8F`FH3|!(JIW1y_S591{5=');
define('NONCE_KEY',        '9;Ahz]EiSUUW]L5k5`xTsbmBOft6gz0q#-#mJ?EQ||_m+DRtfBimPS|d] ~WjBjG');
define('AUTH_SALT',        'i]uw3`&Uu-b3#}*Mkb#;zZvrOBNh*^`ii>b;QhXtPK@c)#rTsdx6+cr[LLG?*rQ*');
define('SECURE_AUTH_SALT', ':*$eF<8Tl}uIsyg,lRLw=Wg+i,v^uZ#nKLzZEpN#MpLmmi:I&`+]6)-LN&tuJ}{>');
define('LOGGED_IN_SALT',   '{c:2T8Akv&dD8sV3*_w?SmzSnE,CUphe||FK%r28mE`T?:|K}sRcA[|jT88PY2CA');
define('NONCE_SALT',       '4Qu|$E)G$1-Dc-8U-.;VjpJD$HcQhN}G](cmL-MK2:!LAPb0-@T<AOcwfKiFOj+4');

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
