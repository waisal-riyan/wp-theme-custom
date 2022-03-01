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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_wp-one' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5z`49~eK`CPO=JKQyT/0aAxHOlM&wXB0$(VI)@-%9m4Cb4q`a!@%bW5bikZ_Xk=Q' );
define( 'SECURE_AUTH_KEY',  ')Btrm$A&x_9^GDn&+yA:aOd{I/9mHuU8;2IPyKH86sM&u$<] ZH0]CijB$YJn_8,' );
define( 'LOGGED_IN_KEY',    't95Ry5-[=H4J,(u;KH$aBQv2*q6_S1t/hQ6vRS-y)%O9,GBXRx=L$!6t5/%7Lvl<' );
define( 'NONCE_KEY',        'xgj4;Dke}jtKW-66N0UhFdmT;C&5Soj85Mn9W{/KqcZ=htWDW5}i)w)6AnmT(gQm' );
define( 'AUTH_SALT',        'Sm)u+D-rdU?w+.S8kY7Xg6eLm:ZQ:68+Ks:|6$1p~_IonI(hL06a[P_;*o<,GvYt' );
define( 'SECURE_AUTH_SALT', '7tiqH9^{zzO@VRx?moxGyAD!I%VknLwv19j1f+5-o2^hT#yS4%?UY6_ct75,^Ey/' );
define( 'LOGGED_IN_SALT',   'SbESgX:4>7SD<[a.,#nMD!264AX<9*nZklIBYO5{DMjcf`&KYfWB]oIr&[ -DTlf' );
define( 'NONCE_SALT',       '8BkRgv &2=W/bwdZL~P7YJ7P?`8+W]9({wPf6#6oXoO>>BK#6i~FKwKW,lg&H!XR' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
