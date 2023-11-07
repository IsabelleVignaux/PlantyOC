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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'planty' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Hw=Y}{SHF(5M#j^KTBh&+^aF5W1;|hK4[MoY]VZ&Q=mO<(2R2I<kr/d7^AIx`d1W' );
define( 'SECURE_AUTH_KEY',  '(ayESpX>pU@h#|yZ@G2s1]/Q,)UOM&?Q=}AUy@7Ayq#o3`8EmxlwY7CF$a3PfXwY' );
define( 'LOGGED_IN_KEY',    'F-y28%m|Zb!6UH1;?`T_}i^[LKWe^X$Lc??46Lj )NAd#x}`S ghH/(sEpY&=)i*' );
define( 'NONCE_KEY',        'T_fL)$!tg5rn3Q]v(cwd]WeRR{}CAGz!pxqsNd&(WFTJAax$qNVWQ!%6&, QK?*H' );
define( 'AUTH_SALT',        '-rN?rw%-QZ?3o#^Qi!i&$sT2FgmMoYW%lXVK%Ht.Q_)3I1G8]!Iqcd#.#%el?J6=' );
define( 'SECURE_AUTH_SALT', 'naBz>J^__@J71.;U>t>RWgvOdQGxuEgwIaT5`VhC],~ eMw{-r9Ycao}wS@[P%M%' );
define( 'LOGGED_IN_SALT',   'c(Tgd ]Of(;Y5_:{@|Fq2Wdfkn!BPNt_)j| Q]|,,]:5HCTP9&nAY+Oqaw9pO0lJ' );
define( 'NONCE_SALT',       'r^Dcp0R6|j,va`>&ZJTN96 ?Mk)+;b7,;PkG_,k#n/B|V3~6BCc4%&F#p-?f2q=c' );

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
