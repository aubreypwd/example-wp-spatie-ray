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
define( 'DB_NAME', 'localhost' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '.J!^$*Dsj%66O1!jhR6,]G}/{67h;$3H@8k>kkVL|K{<WD=1Nwq&+==ped/m7*!R' );
define( 'SECURE_AUTH_KEY',   '{akQLFFSK#<cCX:7e9/$yv0O)hu*c~Xs1 3dMONuA*E3QceCO(-4o$@, 4+lc.ho' );
define( 'LOGGED_IN_KEY',     'L3BsWA2McZa,Y1LLE0V=qpw#~( ;!4>Rq3X.;AORO|UbUG/ag-wOz`u4QEC|~(Wt' );
define( 'NONCE_KEY',         'AANC=c_`AI|e=VEq /@3n]O5X4|<|4N!Cy}ZXh0wzACp?*SThix7uZawMZMM2vWD' );
define( 'AUTH_SALT',         'W!%p8(q95(iS^DX-,UkLTG!}CRjhs+s@/V7m>XyV^K(u2lqfs#y;uW1]EqS~UD_W' );
define( 'SECURE_AUTH_SALT',  'ZOu8]2#0#oZlF{%r`bzB/_dt09lqo@n])DWh^@94^kl?=s}U@i:+A1~%jBNr_AUb' );
define( 'LOGGED_IN_SALT',    '38bXYa-`_W2-1pX/d$f :dUzPa6/H,6he{Xe-:2T9fYyqVji/`j0aX:O,_TKkS?f' );
define( 'NONCE_SALT',        'B)/f~]/XDb0TRyJsCkqMRM3}C}9|h_baO)(UPT:SZIbfQ,boI~Kdy1x!u+5rcZm*' );
define( 'WP_CACHE_KEY_SALT', '{ghu.A6AZpPTMCftsXQ0:vH]qN5NDji1Lu,v;M*:zM;U[7<4||v6x9W-y*[/2:2E' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/*
 * ==================================================================
 */

// See https://salferrarello.com/install-wordpress-with-composer/
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );
define ('WP_CONTENT_URL', 'http://wpsubdir.dev' . '/wp-content' );

// Spatie Ray modifications
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';

	/*
	 * Now you can:
	 *
	 * ray( $variable );
	 * ray( $variable )->showApp();
	 *
	 * use Spatie\Ray
	 *
	 * ... just make sure you run composer install first!
	 */
}

/*
 * ==================================================================
 */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
