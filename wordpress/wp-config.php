<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'FirstWordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'H1r0O4=^iY*N?5EW)+O?UwF+Nb$7x@ 4r,SR,1-Zf>%5~$awio5ClJu;t%zn>[Ks');
define('SECURE_AUTH_KEY',  'ZNJ2RG.~?~=PQhK8b/5h8.9@~m7V{pI-hBJX5W;VH2-A+D+xN>^*CtBb@(E`:Ek?');
define('LOGGED_IN_KEY',    'sl&V#m!r:W#^D_q4|PjUY~<2PkA}VoWTD3SEkFvC~GF#CMLH&EM4N<>z*j~!Uh48');
define('NONCE_KEY',        'W!+d*]Gdp|&IaCJuw}K--{q|QFS5j]S#3UO,i6$~z-Aa*!_#pUg_:aLqOVcG{*Hg');
define('AUTH_SALT',        '-|WnN;yoy|mP.rBI$a,E{rO]D,B!W>K6+-yn9ol0}8m0g#^Z(TF8/hAW@m9f*[=N');
define('SECURE_AUTH_SALT', '|}Ln #wu))ceLYgfSp2zm|Tw+-V7qbZ+K{H:&;9Csey_[/{UE+,yIqE-2}M4lLFA');
define('LOGGED_IN_SALT',   'U[Q1M$NuChitgw|+)kh;wia_-*s>M{yL..Ma~| %0)$}~(7?br*|aj~=Fv<(d.y5');
define('NONCE_SALT',       'K82{wCfmgyl[`QdS)gdh|]iLmH1({#.R]Q,Y%LQd<]sXi#zXpMz~W+XF1sjt0|J^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tbl_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
