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
define( 'AUTH_KEY',          'H(83$GJ]au$e[zYCdsPS|IHqQy*G.6~Se,Hy;dliJ;Kx35fZPWLzQYc_xPq1.4BM' );
define( 'SECURE_AUTH_KEY',   '})4~HbF_?!)xcZ1xP/hp]hi`S%l9$|vObz,M;N!4A~abVsHgi&h`BV4<dL&}q*$j' );
define( 'LOGGED_IN_KEY',     'pW S*;c;k_ud,!K}W%GkP>(#_TMB?WN{#W2-dE(]+xU(J)v&;S|3&kp$Xdi:t4f/' );
define( 'NONCE_KEY',         'qEFd6DJFs1`{IA).X,95plZF!hUJw9Km;atx)=GX<&~^EY/T2bT78~potunan#dJ' );
define( 'AUTH_SALT',         '|kBIs(OE*C}0mde2Mg)H;GEd[[y|Ys4)sn}jzq&UVLtWEVj+<_lcWd&,#-*jDaV ' );
define( 'SECURE_AUTH_SALT',  'K&Z)l!UuuO7;~:+8,k+NG3}izzyBl.6/C3YS>6tJuk%,=? q;U1%23Q(Rr:oW8B&' );
define( 'LOGGED_IN_SALT',    '}g9`Dj(w}SvO((RM4.Nm:,)d5>/T!Ha]C^%y>gOvv4L;yd)s*$|`8CmM)C-BA6*I' );
define( 'NONCE_SALT',        'fDYH,:qjfC~Q=i:$dcg+20uNT@j<[R6?.CH*(U|Qks2JUCr]AD>>%Ehqho$f?U3-' );
define( 'WP_CACHE_KEY_SALT', '<jao^~j><WPo.-k<y62(c;SkPFxt5S?q>Q MGNTBm*I%~9d[b&Nl|&L_I-{XT%UP' );


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
