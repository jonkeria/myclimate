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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myclimate' );

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
define( 'AUTH_KEY',         'yOy:I0`4Ax{i}K=XZQvpCsyC`l1zD|/hVhkeTrc;)2BE=Q]|`sY<CS),JxcKw=gI' );
define( 'SECURE_AUTH_KEY',  '|TuvubTBP_AV7_CD@hyL4zA!UI_N8 u0yqOv1[;!=h*7_ar<8E8:/$*}C=.ZmP$(' );
define( 'LOGGED_IN_KEY',    '%ndHB6Ry6G*wy#apLE+LYFPzB_s8w,T+[r8ELWlLzddJy_wC::&Pc0xVIQ^oMc}&' );
define( 'NONCE_KEY',        ':yV71urhl;>T)kfvwv4D#Uj)nRof)FA<{o P*@P=zcfO/s#} AjSGc;^P(fdd)Y!' );
define( 'AUTH_SALT',        '_HI*6UK~-A/RZQL-ct!tkg5lE&M2f=3t*:k G^qP2#P[Kal-k.UGH5x?j;AJYp?)' );
define( 'SECURE_AUTH_SALT', ';-0^,v+5AcUo}cCP;p{?&Mcw&x@SEHl5v6U.awXabtI6i`apDli],jBpkKrhjvZh' );
define( 'LOGGED_IN_SALT',   '.&.!5dS`@5BT{`w hD5OaCTV2z ,Xc42m9};gYA2vP*RvSqBdHl[iCS4yj~mvALI' );
define( 'NONCE_SALT',       '%Ll#nLA`KLg{l~FEF,3_fQy:@5VS3N*&z$z1PrF7L2RnE:)QI]q S`NhF$fBz{di' );

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
