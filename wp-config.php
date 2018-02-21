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
define('DB_NAME', 'learnanart');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '7k:lc7I$=(f2]bIJ$;J5=%L,d0)B-,A,.LzO*Af(C#!b@QzH9B3hGDQ<:zu?!^MV');
define('SECURE_AUTH_KEY',  'Q4q#):Gb#PoHG%$)JQ&<E2`T/N0_ !1{priuYLwPE|.LVRms-uPdOu?=ZCO6=]U5');
define('LOGGED_IN_KEY',    'N]tVc^FPC%@dp)MHpLT2h5zg1mt2ug6wP~YS?peTeU5%{]8tax]d4:cgJ(s [h[<');
define('NONCE_KEY',        'AfYSn`%_<H$mFbk^:[H~%4#&k$XEpxR6Zm;nD+y.oDSX2nlJy{&j0.v-s_v&j3eV');
define('AUTH_SALT',        'CovvK tM|o:;LfIj=DWUz5_/Xe?t2mXDzl(-3FR+#0TH6XTAS5j$nl8ZN%<+1;<]');
define('SECURE_AUTH_SALT', 'WpfsK&UMluOF9@t},oWa6eg$NYI%e}FY<dAwW.G!rv&*q7W<Tmq][Uy`RRWt<3]`');
define('LOGGED_IN_SALT',   'k+#@DHjhD:v`5d]D}M?pm)r5p)j`5PLsm15L]i;UK]9}5z%u.Wl >H+7M.2 bui*');
define('NONCE_SALT',       'T8C0FUUW/mW0fJsKPB(5/,vd!d9;@%8yksy!XdN-k6,gEqMGCvc%Poe1)C= 4s+k');

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
