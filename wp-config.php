<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sql_wp_rmemprest' );

/** Database username */
define( 'DB_USER', 'sql_wp_rmemprest' );

/** Database password */
define( 'DB_PASSWORD', '29d3e4827fd99' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '$OuqzM_35J[IQ&[j->!RsOCF0}z}vuFeqQ3+F[~14#ZQg6B`bZ*yX;F_5E;/3_cS' );
define( 'SECURE_AUTH_KEY',  'Tp9tx!UDJKv9a]U0^^I!7Y@#ICyxIFFSPC,Vlk6-w/=fSf<%HN1Zx!o;@;<`/hoC' );
define( 'LOGGED_IN_KEY',    'NRuWAPB^ZI1kKe9B{3w=;fW=PrV]s#!?9*d7G3^zu(oH#/Un-S}0qsXHh@Iay},l' );
define( 'NONCE_KEY',        'WN[El#T5@-A8YAp2uM>.>?g$N_9[pydL>TwdKJ5r#mDcC}Gy-JC8c0A^Wry@!m}`' );
define( 'AUTH_SALT',        'y/s~_~lEZVe`FB6^3brYQ9>M6DWf4guB=^TQ?5:J]M!q#TcePLWTEv9I(V3#vVn ' );
define( 'SECURE_AUTH_SALT', '1UbWCPLpm`Szm,buy%Q~e<yK5$h,GhicfaD|;cCZzE+7zJ+2w>oJh^KcpR U&lg-' );
define( 'LOGGED_IN_SALT',   '9,F7k1;9LH-fZr;q{ZR0B~kqW&E^9gz518T^MwvM>aYL}^deo4N4%u^14C{T}W.)' );
define( 'NONCE_SALT',       'gD>P4)hJ;lsCq9wCEs3;2,ePp)|{2yqTMr<&_]l?xz;kx`oZCP=~+5Fa3FfT?z=]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
