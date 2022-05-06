<?php
/**
 * testing2
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
define( 'DB_NAME', 'bitnami_wordpress' );

/** Database username */
define( 'DB_USER', 'bn_wordpress' );

/** Database password */
define( 'DB_PASSWORD', '17960d4919d2937721ff1a2b005d8c9571d20cbe3b9eb38f69be19b4715a6ad9' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         '187D@}.1^6omxW[4s._4I4%|y^Mzo-P?(Pp2o wnS1X%a%.6jw(;o}1%sEwAlRiK' );
define( 'SECURE_AUTH_KEY',  '-v1qKfk},_7P05+&e9R4GE%[Jl2=@,lziZ;Gm56)Q1HkXYc:{gLEz,=`e:c4[MpY' );
define( 'LOGGED_IN_KEY',    'GNDt`ek>ghdXpDJn=KgV03OP_@xh-R4:uGC]yi7h(#;tkN[ X.d[b*p:@pbL0:s#' );
define( 'NONCE_KEY',        '$azf{xZxHx_rf:B2AfZU^sXZ|SVrcbGu|!=DM3oTkeJ~5qmtjL 8~RKWIj#Q^;H=' );
define( 'AUTH_SALT',        '7{yF.~x9zhIi)z<59xf$1fjE54zJRv|~mjJ!J9wT&_RC=,.?yFBFdy@QV:4+$$ky' );
define( 'SECURE_AUTH_SALT', '2>rmqDT=Y@qaPFvcS)OG{+:IjXtuQ?i-wwmq=E$RX^W2pzSC^;YO<$6T-uLPJ_jk' );
define( 'LOGGED_IN_SALT',   'pj6J;nTm>NY_;B%z/w a:r5>z|mxNC;k:&3)r#W8)*;^V/de:Z^5ibd.s3OafN,f' );
define( 'NONCE_SALT',       '@W(,MOk;2dDFn#b[:yKFU[.HB&4kAjcmL(6T@3gbOl_.88H.?zFIr<ACNn0k.9r_' );

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


define( 'WP_HOME', 'http://discoveryourcommunity.ml' );
define( 'WP_SITEURL', 'http://discoveryourcommunity.ml' );
