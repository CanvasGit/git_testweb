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
define('REVISR_GIT_PATH', 'https://github.com/CanvasGit/Testsite.git'); // Added by Revisr
define('DB_NAME', 'git_one');

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
define('AUTH_KEY',         'Y`Er:2E6K0R[^8^_-t]F>zyzhoh#y#x$?]VerujI(Tt)SKAm:w>`}7v7V}C0D!8I');
define('SECURE_AUTH_KEY',  '~x]mCSmx#3;-YS4A`GF/*TkMuEFtS.j!)tjB2eV!M]9>r]h8)K7T}qmf$SH$!bsv');
define('LOGGED_IN_KEY',    'i<1;pZL3i%9:^-RHom$_*(6SWsW-NlbW3M4<t5>E*]`/*4v5[;%NclCI?qo>>yQ.');
define('NONCE_KEY',        'g#M,I_A382fTEq.R{Aa<hGRH,l`;=[bF(c?FbTxRgs=6/O5Gez%$lJ3m.9gf^]68');
define('AUTH_SALT',        'tSRW8xnr}(JEP]uRf<%3zOf48sHsf(R0aFxKz<l}:|[kH~y-jgwjZ7y4zo%R$B)I');
define('SECURE_AUTH_SALT', '=ju~Wl~BBi)Ct5S)L#?mO@hz5XZ5ReU,&D3|M]#lc<]`C!}ltMffq+m|JhC:XM$)');
define('LOGGED_IN_SALT',   '9]f=i}jT~zJU}Q1EYOqZ?k6K.$;ia}*Td:uCl/yS8|pJQBQ!bf2.$l= %dWP.hRv');
define('NONCE_SALT',       'HYtb>>- w3mz;n(P|<I@pmJGhb&J~AHHhXJsm@L;)28f^0WHt@?}.0^(e`o#Y-yg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
