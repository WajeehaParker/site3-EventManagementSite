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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         's1%s[@HhQ,4+hrRBT!@+&bzygL_C/Mc+ bjn/8SvRTEFsC}&UB|hdyYNCeKJbL.|');
define('SECURE_AUTH_KEY',  'Hd~C~==(T_.39mqYbR$8-MlMrrDye`f&l<(P1=F8u.;XyuWX :^{SK%*3/38aszI');
define('LOGGED_IN_KEY',    ')]&rV+2T$V8g#o:.n<^QWso^3gTZS(rl1khZ<!75|@1w!?oC}0sdp.Vs]&J;:# q');
define('NONCE_KEY',        '&4~7Um:Jm2~tu-+keh70Y,JR?W{B/@hs,&?TtFM%JH>`Z@i{sGIE|(Q@=Y[JN2q7');
define('AUTH_SALT',        'fyDQ;q5=8ner0%k$:Rh//h=U39*tEcj`mVLmRGiOywt8sq:nu^GW<rk;54x/CrRJ');
define('SECURE_AUTH_SALT', '/??01]^zU+(WHN-$:ars2_3eW3Vf pFFV,4^l_m5j1{>`2J/rMgTKkSuKAB}[j]t');
define('LOGGED_IN_SALT',   '&ZmAz5^.J-ciBw&<n<M5lZI.Li$+=-7Rplox!Aq60;=FUB-&Pe>M0PyHH}fmEPyq');
define('NONCE_SALT',       '0#,TFUC5[O9a@?w%/Q`ICaVzrRr)C<q}`j-f{Xa9`*%QVh>0HK21<F46FCqI{m_z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpnde_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
