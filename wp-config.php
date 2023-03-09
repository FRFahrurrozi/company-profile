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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'b{D4=6t,4iV|~,_x#EiCQy1v:5Sa#^8iFOUhmBrR!Ji[~=vIn3+8j~xQgp$y(X4Q' );
define( 'SECURE_AUTH_KEY',  '/}*sIMLpB`Mvjal`}{1gPV^,Gwp^HEcNE5:*,a(]n;)KF),KoFx~+%5l%nqNWUDN' );
define( 'LOGGED_IN_KEY',    '1A?X+!F1476f~Ns2KWb!E<P UI5 Xx!#k. /Lzj4?4Q;mPI(HR/.OJLd_>Bk5=IX' );
define( 'NONCE_KEY',        'qF2YZ(r7KlYzt|u|q2ib+?DV~U9Y6m6(h7zWf2,EWy11pU5B]W?[&K4S&KKp;}2^' );
define( 'AUTH_SALT',        ',Q0y|*R]x`Or{0|a,2r-bZ{}+P4M@?T0Ly/~mLbW;z[&omDz,PbD Y$D}cY=GpD}' );
define( 'SECURE_AUTH_SALT', 'jQO|(Jb|dK[hBLuETjhhbap0ihus>[@*5csmbO _x^o{EZ?>sxVX^2kc_mA-,@F1' );
define( 'LOGGED_IN_SALT',   'It~_sJa}SMn}Lm51[UPjtmwy35m+m(U(3Cx<=|_3g92k60`Ph+x]`AIRW)qD#ZC3' );
define( 'NONCE_SALT',       'n5TN.o{:)}zVqz:m`Y#bk!<!DU8Her*ch($Zu iO)|T=>95TdC^AmB<|bRumJrk>' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
