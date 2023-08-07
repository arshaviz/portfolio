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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'nqF$clJD0nv/.pNJ!l&r0`tRyA`AGM{vOYdn<vw31:h|OS%:nb<1 VR@g)*T(_$M' );
define( 'SECURE_AUTH_KEY',  '!v,Y7Q+cD RDt4V%~T[FyT6_i(1|!U`L9T& >ne0$8<|oYU!P+6Nqo$by`6*./ll' );
define( 'LOGGED_IN_KEY',    'hI[;(kPkZ>dA!wxG>9aM4fNr_h?01VK>wsvHHcrIYL@iM/>/pfpM5F.7iY=F$F9!' );
define( 'NONCE_KEY',        'JU_0-q#@0pTc#)d(;+@Vh^fTXK3HD2/Gj^{-<60@5joj!uHrS*9o4GKsH`.Iwr!x' );
define( 'AUTH_SALT',        'Rvtu:*9}%3.BPt:DobffE88ie17YvV#ck1pR(QL.-f]`9nBKdd^JkrMF#z$nr}ow' );
define( 'SECURE_AUTH_SALT', 'mS0gtHwQRg.w^+zo&yQ<@XBZ?*={ GC{j?WHpNnRLOFSaHzRLvHeE#.Y_8K%<VS ' );
define( 'LOGGED_IN_SALT',   'C#2FugmyIC]rubCQ7TdY{=mZt7,(,y`-{ce N/>{{?n2f`>a*WJW:C&;!>=9/a(v' );
define( 'NONCE_SALT',       '7jjR^l ]2@O^;}lo4z7/.&ZpVpHWD)DK#s2~LYUIm0|h#zo6&I@_BE/,A1EqQMck' );

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
