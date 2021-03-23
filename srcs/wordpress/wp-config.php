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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '&51O.O/,Y8e#& eGH41pl[a`t}Ac5;i/0Tju;Jqvd!!n[8Nn$#~.iP:-.kMLw0{[' );
define( 'SECURE_AUTH_KEY',  'pO<(vUOQFx+^;6g@5^l/]9#@pDO{2;tRDnfeOXmG)$%R3c2Pbc*O|18=QQt1m3%9' );
define( 'LOGGED_IN_KEY',    ',tnencirI%;Xw[K^(CEfCwWjC9k;{7VtffLX`Znz4z_@(S3{gMR3~oSfgoI,zCd:' );
define( 'NONCE_KEY',        '-h#&`amb-}Vv)zrI_-|q[B$3_t]F:x`h%-~RT g^.P45=H;Tk$I@!<K:5B-xJ=2a' );
define( 'AUTH_SALT',        '~r8FwX]`?!W z7`$t&U4D1GyNLHyWT7UQ#Jklg~(vIUHIYMhQ0S?gc$9SvcepQ_/' );
define( 'SECURE_AUTH_SALT', 'nb84Rsk<Y:catO*ggNNn[[YSa,N{bdD!JaA+AuOFX:>~;4Q7kg~E(oaxy|n}%z!T' );
define( 'LOGGED_IN_SALT',   '@Pz7#p9KPj@|~^nlVms3*<.k{STFzfG/:QPcy;LMP}iqG=I +r]N<.2ZVG0RXTAP' );
define( 'NONCE_SALT',       '11-x+DN2GKs1yS7HFeaCPe<]yCm1At3i+]kq_K@@do-8*2(3xj6dluOvA(-AO/9F' );

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