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
define( 'DB_NAME', 'hormuz' );

/** Database username */
define( 'DB_USER', 'hormuz' );

/** Database password */
define( 'DB_PASSWORD', 'hormuz' );

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
define( 'AUTH_KEY',         'kL@Cr7jpd~u8$NHJ{vQoOoeC.c~+*Ef?h!FTmaojzX}Fr1YPE=@*%g:$W}NaJQA1' );
define( 'SECURE_AUTH_KEY',  'X{@4bF@]>JKIpJ%;V#MF9_v6pqF!G~/n{q)hty:0)N9k0~Kz:|/Kg{tA5$e826e+' );
define( 'LOGGED_IN_KEY',    'vs2`^Ra7vXb>_Y.D@?+k?%(Dq_lClE)2Q7*Fc:6K=-d$.J$C]%2hU8=!}`@<u6t~' );
define( 'NONCE_KEY',        'ySIzp$S(63Z-V_kRI>{ jj! vKv3L]TF@I:gh&mt:JStE+I+nM@iy3@.W(ETLO-@' );
define( 'AUTH_SALT',        '9|4vg{s>Ahq~(OwuXvm~o3 +F>zlprcm||x*}` MRiUxw4N8]]LHu/r>v2G2zo)J' );
define( 'SECURE_AUTH_SALT', '/(z(ds]N!G-.YGOk{bnCd)!Eppl.rw-Ag5$<icJ1^<pxfo=%2J?(|yLh1r^g9yL(' );
define( 'LOGGED_IN_SALT',   '2aq#OfmHr(fwMVqoQtf|vLc+,5ld2vg`k_JxLs_}d.&prx%Xm&k}i!KMSJTC1tUN' );
define( 'NONCE_SALT',       '|9ri) n-4tzBQ=}5Z9Hu:x|,Y!D*: _$R2Q7klEOi(-;WMG;dUZXJ)(R{._juCS$' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
