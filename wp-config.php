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
define('DB_NAME', 'wp-maxbrilliance');

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
define('AUTH_KEY',         ';.BDmpQ )}Bb{.p$w#s)%31y7;UJ TinH_N1CaRd;3tYR-06u@zX|scsmELQqo`X');
define('SECURE_AUTH_KEY',  'A)Hu%5Z?OSGY$T6<_XD;_zcv~yDHrvj)FJ`%EBt>L~c}0!nTw2j<o:j^))U3SS~J');
define('LOGGED_IN_KEY',    '<Df_mNr2{rQzDf#>^eG^p*w6gqta$E,Cpv~OV>KwC,;:H(QZ)G/eK*HNI=HD]E;@');
define('NONCE_KEY',        ',&dX,>Oyu #Gbi*7??9O+64[,7HGyQ5^bJV3iHSqh#VPg+zhS(o2ys^t2QZhIq|~');
define('AUTH_SALT',        'AkL[Fdloo-O6zEjD]v|J.c59::Ytj1^YL5Ao GwiA2><JKB:Jb43hRlrG&DX}%0:');
define('SECURE_AUTH_SALT', '?1@mVD{TmyX;ZL+bA)>.c(ASR1`$k@3;>/uAAm9x&cV_R`RB^M.l1Zp<[0l~sbY/');
define('LOGGED_IN_SALT',   '61DgxhEX5!=t?h$]^8ILuyOAH|]0Y{9TRv!S`[h!X!p{]cL@7wXlwFJv;4^SD$KP');
define('NONCE_SALT',       'DgEPqB<f%mUZUSjbzIt}d~fWG]MJD[54y#cvCZ)ty^HMTfEw?z:GtXF|`135/!C.');

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
