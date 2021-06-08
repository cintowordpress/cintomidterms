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
define( 'DB_NAME', 'animaniac' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'B4)!4[NGb#LMbez?F2Gzh/S%)fHw`=B5%On,~<tuQ3MN:o 7+J3IF;Yt;*-njl5?' );
define( 'SECURE_AUTH_KEY',  ',;kg2(,Y:ZrRWp[5969$7&??GI60~_t{av?>x5}.x ;7p?TsSKTpXD:O zmMCd6E' );
define( 'LOGGED_IN_KEY',    '7Av{^]U!qVZ?kW=t]6Jex/~19?g}BCl>:e|xQnd7D_E`yod+|1PjzU|BcY(3{mr(' );
define( 'NONCE_KEY',        '7?i&1sv$N{)jKq~![(p*czmF,0a!Krw}.J>-Vr^;5>Sn5+QO{/fy48w5fSQLoO#Y' );
define( 'AUTH_SALT',        '5*Ix:6[n`y:o!#QbU3?|NdF;26<zv$ps},9$`Q`Tl.v9#%fBviNO<n@fF:XUQ(0~' );
define( 'SECURE_AUTH_SALT', 'H@F<KF|yz~MN+qZ?=2)^pUo+vg-a4}VmB5u6z&nCyzs$B$Zpq/{z4kI>|HKp|0Ra' );
define( 'LOGGED_IN_SALT',   'WeFygh+9w[2G<Hb(@jo2T0}&30>^[*V]A/ o!Y7v^l^]~if1,y?sKb<d_x`s|@a%' );
define( 'NONCE_SALT',       '~2_KL+._UozY3 lw5=VLp^._voBa.)EH)zX3zo14I{>9}i){.<z,5o<jd,--)Cj4' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lab_';

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
