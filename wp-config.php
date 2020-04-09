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
define( 'DB_NAME', 'demowordpress' );

/** MySQL database username */
define( 'DB_USER', 'demowordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '3vKncnBHRoxNFfRj' );

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
define( 'AUTH_KEY',         '|,yG.D#s*Z91Y`FIqvsF5]OCR?Xx;US?skkbn48ko69n`Td1,JqY-Fk!)q_v}FsO' );
define( 'SECURE_AUTH_KEY',  'lX?p||:42{tJ.ylJLJp|;)2G_(&7p3j?rfL6}0NF_9p-FCjS:*Wu<p>9H+p_ks5&' );
define( 'LOGGED_IN_KEY',    '/=*I/l_UCkxIE]I(QfK7y]Bn0myScHO$pc#Ck~fywz%gPK&pc[pX3V|5#[>T)rhk' );
define( 'NONCE_KEY',        ',zcFkoq4V@EORU9jD0^JXtPDJv~M(KTa$8B+?r8O=<?)xfVKct?HG:I?B$asmC^U' );
define( 'AUTH_SALT',        '~^=,!*7+8y=|&|4T(3!uCGf)w$[4GMr(1^qYubY>{vMJ1sEA6 [v =i^qp4G1R=d' );
define( 'SECURE_AUTH_SALT', '2Qo6<pjmhb;.x,Z:7N|)(7}$Q<tH3V5zLnQ{/_O/o*3{lW@,}>qpWEOhr?%>^KYx' );
define( 'LOGGED_IN_SALT',   'QsLFA0&00H@d{ZF+fVl>9BwlR3!{`c>GSq>+g~BQZjv,qVWx.L/aU+jtUXJAd^w>' );
define( 'NONCE_SALT',       '=kH+yG~W( tX5]yfJf$3Gv8.g/NrjcRm4B#_V#,jvQkNd|%x9Ft0:i/=;)?I:?@p' );

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
