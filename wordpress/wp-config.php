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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'docker_wordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'docker_wordpress_db_secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '6`cfkS[qaESb`+6x%p9!/%8}RJu=qy$5QV4D`D^SVl>VObTk/u JkPI%M +8DJ*)' );
define( 'SECURE_AUTH_KEY',  ']TX[$)N|z(*z!^%^kMYSq|(B<a+ok?3[e.T|s>W}VZ!E*m@5,m<dcT[)*,!/a~(t' );
define( 'LOGGED_IN_KEY',    'MHT_Eq*K-}&Ybug0_0+MVs<H9O!X0nlTr< [pLv3lB_(.?rm1]s2WlWL?eyA1|sz' );
define( 'NONCE_KEY',        'NY>(E*Xz,Y*|jD@S $J}Py|@mP }9Xvi/ivo(h8gXwBcb+@kDE/5Ksj|K|ZEY&6A' );
define( 'AUTH_SALT',        '.K,W~dEcgL|_q1/3!hSs8P;fH1P&WdsiU5&E~^@&qwmis[QOb5Rb szxt_Y@I:/B' );
define( 'SECURE_AUTH_SALT', 'WuB(;y)UMNs]/hBj3c%GUs <Xuq9yg<,^@=dEDpFgQwp5B*xl*OUSt%<=T*QAOm2' );
define( 'LOGGED_IN_SALT',   '4haMa<zO-eisd9-zM@qA0*x{69ByocFX>gSbcNp1(8tTH(70TSl?tauOz-pG|n5]' );
define( 'NONCE_SALT',       'nF1^V<-=w{Mmp?Pq0Ow@59R_aE;bd(<l|83$= 7-u=6BA[yY<,le47/9PIZ/;2to' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
