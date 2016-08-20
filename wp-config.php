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
define('DB_NAME', 'wp_test');

/** MySQL database username */
define('DB_USER', 'wp_user');

/** MySQL database password */
define('DB_PASSWORD', 'p455w0rd');

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
define('AUTH_KEY',         'Iuh&1;7eoRA#=)N||Ao*?Z` [osO</+oG;S/AQyiH/X1GZQ_q{_(g]~~Y6,Q@#E^');
define('SECURE_AUTH_KEY',  'fMC~nt2qQ|(bS&5rO2EIYwqe|:my$c@`U#gxY9(+^3xl6$1/XPb<_7*yrCSJjQI-');
define('LOGGED_IN_KEY',    '2Cw|0@MW3O3+|68VJh=Sc?G$H[eoa-vDeW:j*F*9ki$1:y^u99O-pkS0#YFZ vus');
define('NONCE_KEY',        '0ohxdTCL@3^LYbCJ(3p[I~QN 09Qcs#SN!fBeKC:aZ}niT8,g7X2.D5L/R*m{S9$');
define('AUTH_SALT',        'qn0N^b?QmtFVE7Wv 30i.+?3Z&+2^<}8M?9ih7Qv$A8#ayOA.Zl~UC+*TtFEdSGb');
define('SECURE_AUTH_SALT', '2Rlo_:QQox zy[2YL(SQp|//d6?_b`D-/%@Cn:-lY`MVyWL/=E+>&Tm[ApF@]kXz');
define('LOGGED_IN_SALT',   '_@s[vz.L0D+-/o0.H|=-GMXM._-Y[|Ss`lw/oQrZD2;oY@*cf,PCx?hjc+|D+i?a');
define('NONCE_SALT',       'E<glKy|kh&d8I(OV#U9!@ugNR:`Q61iuTj_/2CxWHLN`5aquHoomWG)ML@HN+oes');

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
define('WP_DEBUG', true);
define('WP_ALLOW_MULTISITE', true);

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'mysite2.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
