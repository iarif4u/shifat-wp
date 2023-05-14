<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'arifgit' );

/** Database username */
define( 'DB_USER', 'arifgit' );

/** Database password */
define( 'DB_PASSWORD', 'lnrJEJLypfmAk7pT6Y92pHeG' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_HOME', 'http://arifgit.iamshifat.com' );
define( 'WP_SITEURL', 'http://arifgit.iamshifat.com' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '3T`*Y##-iL-lKDd`S;L/@#q@Cu[En} Jbn>GY-20x *fnK[ G,;8Oessv`^_sVW|' );
define( 'SECURE_AUTH_KEY',   'D=o| qEzCQlqIlsli>TGv0ccBl8=T1CcRed@S+DB=n32Ga*<m^K!Ck|wh(8Z#oAN' );
define( 'LOGGED_IN_KEY',     '/YxZy,nrj Ngy/+%VC6#vPopvdJao>;r8+vrHXJD^ngCbg!>L{EQunL#&( :{UK0' );
define( 'NONCE_KEY',         '?K,.ppT06BVyLsO_dyX]< Rl<%!n$_C*lVFTG48U?zUCpLny)91f5cn)Gu@^Ss@W' );
define( 'AUTH_SALT',         'X=jg~eo~UuL6rL=gQJLhPLhm);AS=VzIv#|biwxhds#<*>pmi4zwSeWgpezoeu2z' );
define( 'SECURE_AUTH_SALT',  'm(YT]+Ib@.+1Tyz{3DhGX[ieEPK)cwxRq]HlM$ De}X+TzWG2wi=7@PAO8X#@t)W' );
define( 'LOGGED_IN_SALT',    'U*YD7#ZiogvMezREUaoh{9Q,?uUHM_)bbAa-=>NRC@>%e]!;n fb-R~sVfq.uj;m' );
define( 'NONCE_SALT',        'yV(pm7.baKku>~-5Mz7E[E:4LJ7zB{k?]:5>>9gEcp%LQRUH#81Q3$Upj0+vqnfv' );
define( 'WP_CACHE_KEY_SALT', '/}z7_c:oY17qioyT0~TBSY@TT_I$NI,5*NHeq~vKVA)xEcg0Uoy=b{lNr$(<]e{R' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'clonetest122_3_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'DB_PREFIX', 'u3_clonetest122' );
define( 'WP_HOME', 'https://cornsilk-cyril-347.x-cloud.app' );
define( 'WP_SITEURL', 'https://cornsilk-cyril-347.x-cloud.app' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
