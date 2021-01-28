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
define( 'DB_NAME', 'bharatagrofarms_db' );

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
define( 'AUTH_KEY',         '*-c*v+)NCv9{jDk.cD,~Z$PWjhyk%/UgWrwm1y5HoJ}(~i;22HZH;d}4^lNQQK%z' );
define( 'SECURE_AUTH_KEY',  'qo-A6t!4V|U]N)Q4P7tl`*u1h:(EdQIRtwK.gd}|<NmsKH!!p5XwMRe$RL@N*lwn' );
define( 'LOGGED_IN_KEY',    'pFu_}%}F`s<obi<!(;#Qr8kpXEe-qx[JFE7ST3N*ga@G#H`.YQL3]VtAW-vW&l</' );
define( 'NONCE_KEY',        '}3h/}:hD9.rb!VUR4%duU$`H.k]:*SH4kEz.?+n%mwBU%+h*70bGX#KJ3N!q>Om%' );
define( 'AUTH_SALT',        'GINFtne@2TAOp$sLGM#FR]$Av>>cG5f]jwSAj`R$-8mC}9r(t`_!0v1{N@]P,b0R' );
define( 'SECURE_AUTH_SALT', '6DSWgkm[GBJ6XH>t5cg,M(OE8QsT sHZzRM/%y8O_Yn;g#76gJ>Y_.kI2.!v%PZn' );
define( 'LOGGED_IN_SALT',   '}[@aH>rJ`TC=,n&[:<(qH&`dccv({.bP_F<tiRk76!Z=k%QpU0wqBRj(ux,t4X6_' );
define( 'NONCE_SALT',       'b-SV(lffsG_ Ha^vbf+eRb9Q07gf;a*jhY[Ln4lQufcFviGimoB~~b3LNfjQ@OSk' );

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
