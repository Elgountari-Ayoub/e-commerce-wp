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
define( 'DB_NAME', 'wpdb2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Ycode@2021' );

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
define( 'AUTH_KEY',         'NSYclCC~j B&m9v`IBqua>WJ3]YulrIrq@Gm~CtNBgQ^(BICoTE$Sb)D6U(;jXYN' );
define( 'SECURE_AUTH_KEY',  'cfj|?8ois*ykGvj;41XkRHkk/&6Hy_B)}-&Ku[&XNM^`2eV_s3(/#M9iq:)YlA{r' );
define( 'LOGGED_IN_KEY',    '|v6FLBk?ifP]_!qH!cfYMKZ/#@hN~=hjw59I-akSq[TzYD,)*ZuanugDN&E;^#%|' );
define( 'NONCE_KEY',        '{%/xyXq|b*3c<)xUBSV1a.dPlpv0WKOp]h~^AZP+*sG%p#Gz{^5fki~sSMo%{|dF' );
define( 'AUTH_SALT',        'l)X|bKN-~QW1- .lt>sR|g$UKBk,L[J~HZ&$=9 .nYxXp0PlF6F=Ha52{ K-a:T&' );
define( 'SECURE_AUTH_SALT', 'Xo2{{U^&8JV8klwwxW{C+P`t3{)GqD`Q|+InW+4Z-2:90)]7G}3/&B)AOwztH63,' );
define( 'LOGGED_IN_SALT',   ':E> UTAtPl=6~$T1BjP40f#AST+MQ!IJn?eO5<K1]?a0FQ)$fbB(D0Y6>!x1E8-Q' );
define( 'NONCE_SALT',       'UTFk7z:D)%haQN5t (ZwU,zFjf:]1[$Obrxw=nlI>-&0F[6LICg:#_&Onzg{XIN}' );

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
