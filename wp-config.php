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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'nVR0jY/d,]L&i60R%8rVM@.Yf,(dhU-7Go;tmO->{uZAe:hx-Mwy.IP(o>=MqoS[' );
define( 'SECURE_AUTH_KEY',   ' ]78g@sPF?jf7|1<EVigBXo*,BC^&5,;/I:kl5xzt`q4CP@:KM.y|H,54JLffei?' );
define( 'LOGGED_IN_KEY',     'V>pLaL@T+KX;9DX<<p#Y5Hne<bB5EqQNh<+!7&/yW0iZ!CA* |dft|ng &u,a:q8' );
define( 'NONCE_KEY',         'Qs.m=@!}JyS7j>30U`Bop5cfE_7*7C8|kI(2Sa)8*1IL?c{[[tgtXsE:R%3T+~;5' );
define( 'AUTH_SALT',         '0FXa4F8NIHnlPn^qK7AeY7x3>{tOje;~N%mS~Mh656?iYJYa!B9)je5 @L~/aAWT' );
define( 'SECURE_AUTH_SALT',  'ld;4ffW_qH:0 AmhZZdF6gAGSp{JFVtHHh x,qRqjqGGd5!%>cIdo/3%nxtnGh%P' );
define( 'LOGGED_IN_SALT',    'DCbIm7*R.x{W1#2(uyi,u[SDp3ub-~X&PC_,e5Hustv4a` Yr@Ut^zxvA@Ze!7(Y' );
define( 'NONCE_SALT',        '^(1i)7j!VG#eyC)G9f~wYzHp9N=(5PCga=U=4,H<}VLAa9yl6hxIyBOHYM=>cm:U' );
define( 'WP_CACHE_KEY_SALT', 'J^F#`s3-}o4$f!g]R3!4]{}*+J`$_ek1_f1L;OSnG_!.w]p07C`~%3ZB7^>^`irG' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
