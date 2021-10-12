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
define( 'DB_NAME', 'test_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'xes3^Uolj`QR&?<9~1ocX%2bQNWipo_i!HZ1`_MWA?|$&/5m MYF<&5hN)AZ8MXT' );
define( 'SECURE_AUTH_KEY',  'udpP=`B|xjq-cs.,pgGfKv{(q`iaJzJfJf(Sjgh0@Qmd,2>3Fv)L!Y=c=Dd[mbU*' );
define( 'LOGGED_IN_KEY',    '/ 4|r7-A ,U{c}D2>yrU*P@}c{;qQqv*4,U)XU,;?!mpd{Hl&&lXL~jGy3Fteci%' );
define( 'NONCE_KEY',        '1V!|z=fHx* D>0~PXRUK)-y +UDrk%4QGWIN}10hL3?i5fTJRhW=,3Z!ggmZZP8:' );
define( 'AUTH_SALT',        'mBRd%3/0{ljr3C))9Eb<YNTd}dkm>A1AM]$}u1jizn-`^mus7C9X$Pf#`=p9;dEh' );
define( 'SECURE_AUTH_SALT', '5#yNmui i%E_p:_^d~N?F.0?-Gq*XG~(pF6X!X]apg^:b5ePQ)l.,x@l87EZ;L-T' );
define( 'LOGGED_IN_SALT',   '>_&H;I8kvNt>7}S!HXYnb}bCx^*U~:).eXW$>pb0ys=feG(Bo}T#,|o=@t X.agU' );
define( 'NONCE_SALT',       'y.u$u{DC59;Jb*;] X /z(rJtK.;LP(}=6X|LKG<h&C;sQX|MPN5&Fv-8-S=qy!t' );

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
