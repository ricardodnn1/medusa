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
define( 'DB_NAME', 'wp_medusa' );

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
define( 'AUTH_KEY',         'd/St^$GY+&#x^ ?~&^6u`VEVC>g;epmjM4|&Vey}ss[{&SrN+Rta9}3qsR2X. jP' );
define( 'SECURE_AUTH_KEY',  'E:~zVO`7,WG:n/I(V4GsIpg@/w~`T]:]58kbQiwda2I+:2obM7_L+4<~]OT?#f>M' );
define( 'LOGGED_IN_KEY',    '<$:Cs{m@Rt;HJarvA%pI(w=:/eq9va;|zoXhgp/~c%`84P=Z|L!3cQqs)1yA xDr' );
define( 'NONCE_KEY',        'r9^by^4d:5^4t?2X]^(b)ARk>n5CNs;qV 1;Moi5fN(b(Hs?3&Pzj?m%JRw1X1-;' );
define( 'AUTH_SALT',        'p1FL_b<RZ,@&|[Y.!y$QijuJ0vX1C:_+4%$Oc()2<*#3V}Vs<K,?|]TY1v,rKUhF' );
define( 'SECURE_AUTH_SALT', 'T]a-8 A8Lvu;$RBHL[[nzGzsn]4T./RrIMR]Dnm$nZZ< X=&8DEF0E(lq>^]TN3/' );
define( 'LOGGED_IN_SALT',   'C<Feeb`;INug<RW}C@QUdqi#|[X#NY@g#S]4k0fH_I `n<f<R`&R9X}(_X}Y=A2x' );
define( 'NONCE_SALT',       '!RGg^;WWb<+m@`:Ge4u[j??TPd{S|=Ts@{VUXw1~;p04NHT~;O.jy8Lbu<raGNr2' );

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
