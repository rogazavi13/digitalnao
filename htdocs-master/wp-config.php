<?php
//Begin Really Simple SSL key
define('RSSSL_KEY', 'axwMqMSk2AGIIby60Os2UFRNQAD6i77RBE2ilXCgOr7vDugF9YvcTTLVC23MfV47');
//END Really Simple SSL key
/** WP 2FA plugin data encryption key. For more information please visit melapress.com */
define( 'WP2FA_ENCRYPT_KEY', 'OnLnaYBInUYSB9Vk3SV5lA==' );
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
define( 'DB_NAME', 'if0_37246937_wp785' );
/** Database username */
define( 'DB_USER', '37246937_2' );
/** Database password */
define( 'DB_PASSWORD', '85podS7.X]' );
/** Database hostname */
define( 'DB_HOST', 'sql103.byetcluster.com' );
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
define( 'AUTH_KEY',         'hfzi0nkktcevaqzoif1kjv8jp9jrwne7apq0zwmpdih8ubczdmesyxlvehnujnk2' );
define( 'SECURE_AUTH_KEY',  '01nkthquudfo4zjctvzsavcrtsweykvi0hzhfqyucsdw5p4cjha6v51ow3pbsuxc' );
define( 'LOGGED_IN_KEY',    'eiab1w0najapulddnjhorn3jbqd1difx2vb8cn1jxymharbfllhiy0yifsw9d3rf' );
define( 'NONCE_KEY',        'wotzqpivp4z91oyoyiubzlqimjusbxil9e1qbyeaqldvwv2ebm8qejcmy44ocyei' );
define( 'AUTH_SALT',        'lomjuxbhekydzfakibbhnxcccrtecskijz8cwykpozbshskr0aqeb8thtzepm7d9' );
define( 'SECURE_AUTH_SALT', '2rcwbpaalfdqzqvqomkonz98fmjewgtgjgfsgkwtqhvxcghfojorbsxeal5aarcu' );
define( 'LOGGED_IN_SALT',   'aepcx3b7la2mxwd49pefqzsqaowhjndlegrxdabrzywh1e2faeticpqozzp500b0' );
define( 'NONCE_SALT',       'iqmhd5xvw1iflrcshfxxo8qhivf1lb83eadmf4acru7zwsnb1ogcupxrjirswpsm' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpwg_';
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
