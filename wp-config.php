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
define( 'DB_NAME', 'personal' );

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
define( 'AUTH_KEY',         'OCAnh=dQM24ll%U}0AT:NNVpVCjd6|Q-lz*Q6t *P<+#>610EDiHt@6R}[a(AY0/' );
define( 'SECURE_AUTH_KEY',  'MxD;y||bUe2.88hq_C/Dp_0Vq|LgKl^;<sef*`Yig-U[rxxnJAF.#;-H|<U0aajC' );
define( 'LOGGED_IN_KEY',    '+!b+DWe.!-o,][=!/VqfN&^Nxd`gm~x)qBAfls*K*/mg|U%[gy}P=oS`b42+:WN!' );
define( 'NONCE_KEY',        'z5QFJr4+)^34Br-35q5/?;hZk_Zg1>X|mRV`Z6x}d S1fnciT[NYnPNH@`pJ2QHK' );
define( 'AUTH_SALT',        'ov5D05M5kWcrY,m@5fTvDQtMlb4sLA^r]aZ$Z4U2`J<:-+-e-pju(i3X-yJ`t{sa' );
define( 'SECURE_AUTH_SALT', 'E)BD!IE~D?{xOkih;l8wZTMmWU; #jk)<A9<|ZSc[uJ+mutNK.ikZsIocZY`[f 6' );
define( 'LOGGED_IN_SALT',   'NR}fNZTPzhy<?tW#HE8qj12`6i!PyAA=,{q0/{IXE?fe>W>0(MoQX>[B oqOkWm2' );
define( 'NONCE_SALT',       '%`4^]x5gS=G@7{W ?uIRo|>sm!fFbT2aC5wfx>g <BdJ~=s~NQso)[uWPf4.T@5^' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
