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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'ssmaju');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!_yv!=O6@)4N(+x>|9NCbj[E-wlhA UG9>Ygz)Q1WtIcD~M^i6>*w$xo~E;A[)t=');
define('SECURE_AUTH_KEY',  '~KGu@r*~&|.7dMZiCJdZJ5^P,N}yRle8TlYl$}i8C}>NX7{IlSj84r;hx9&8TsE~');
define('LOGGED_IN_KEY',    ':qfkwzWfnU%FDT<(vF{i|M2468FPk<v<xIePhpzs5Fm+OL}0iNcKRxKgn?yqyd,L');
define('NONCE_KEY',        'i z%TN0 =C6x)q3}d|guh[#Fh5.b.b6wl|ieaS`w5`vrH!/:SbKcP7kSfrcMMM]_');
define('AUTH_SALT',        'u0UGMDbW4lqXgZ;R)%/=}[x(sEZc?O)&pLwx?.czF0bf4vX)Sbh;gRV2`8hHDbk2');
define('SECURE_AUTH_SALT', '0q@y+{z!P))jzMr6[(&,[6 2[,{EXQ0nSq(82N1MZ`v:y-]? :` mCn+>*,|MO1h');
define('LOGGED_IN_SALT',   'GoT$UtQ/ug?wu&:hD/)7,tIWoHY#,kg?m]7/#80ayD8r$cm`4X} GhE_%-tz!VQE');
define('NONCE_SALT',       'H?H>Qmr%T#+{g!Tb>1;pv8XVP>oaNAAs:<i%hsQ{i@tXryML51^+B}KzH+9`,NpM');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
