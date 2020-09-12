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
define( 'DB_NAME', 'wp-test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '*zmFC5KcPH){9?]^m`x+ C2-B|L|-st<Te-)*|7!d_GWyLR!cuo0AcNZRIY5&I;Y' );
define( 'SECURE_AUTH_KEY',  '|Bd5IPk:O}1B}u1eJrW$A3+]nR10m%<5%RwSE;XkOGz^)${mGxMic]!UDinsUIK_' );
define( 'LOGGED_IN_KEY',    'q<I{J!Qqm4$eD?WjePAeTbRObYHVyzn/f+:BjfC>|+J1R(f!_-S}O^ >7rLr!~`4' );
define( 'NONCE_KEY',        'M>kL-ju!w1}$75usFKwwT|GrV:_##.HTlDe<b`z)]DZJ.ee)* Y!bi$d=1]VIe I' );
define( 'AUTH_SALT',        'Zw*UU&14FCqsW^u^3GJ*{dRm_gyvNLaQFutOS]2.sNeiq:[h#XogAZXy*7/:iVu1' );
define( 'SECURE_AUTH_SALT', ' Pkr,?_Ht<M$<6p,Gfnh>5Zpd>d>gP:-3)2|&Oyn#>|L$G*t*G@&A(I.:VVA<qs@' );
define( 'LOGGED_IN_SALT',   '^1~,36fNm*(SnfM`wDb2fdsE19#-~#Zm@h.oIgG_~{GPQ4w}EF>m&m]SA~txJ0dH' );
define( 'NONCE_SALT',       '+R`_B@UF_I*X$w?,<rE0SMjbpZGC6EdP}j~qXTLSM#1ymPQCEJd@y:xTB;o{exZA' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
