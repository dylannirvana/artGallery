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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'artgallery' );

/** MySQL database username */
define( 'DB_USER', 'dylan' );

/** MySQL database password */
define( 'DB_PASSWORD', 'olorin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[OWaH:`;5ZCtX]=8CjX#).?uv/U#aLXjh&zM%2lW8qLSpc?3[nZm,:wX3s/T00o!' );
define( 'SECURE_AUTH_KEY',  '=OFU6:j4biR]W7O|p8@?EMK]T1n/T8U#elZ*Hb;DNM6K3jV^Jk$f0,R]sI%n*BBv' );
define( 'LOGGED_IN_KEY',    '!VXG|9-5t*(WrfP;{G>ku6$i^oyyw>;UGOrA{lhh1nOGs:avINL{T(qm0V*OME^7' );
define( 'NONCE_KEY',        'x3pi<!`=C8h}g,3EPze8L5g3OOb*9Qwxsfs;8HEjawqWy_qY{H{e$#Jmxe35I_/[' );
define( 'AUTH_SALT',        'YX)*UEM{pm,U/)Qu7876qv dEq?WGOJX0j6C+ii1#Ia!^78ujj`#SLbP1GR.=eiq' );
define( 'SECURE_AUTH_SALT', '/56a/FU>}~WNpji0T{],,lg-{I$!X++hdW$5^=F4qu/i]94v=<kATz`AttT[HV[g' );
define( 'LOGGED_IN_SALT',   'RBa|U_4ie|Sr*JwkHFF2eXP%I7+&#K:b%$<n4tu7y26fm*>H`Lm+{[pY1$=e2g*?' );
define( 'NONCE_SALT',       '{p8R.{AOOJ6j+59)qpu4ZKOH&6%7zV&cKNo%brd$cYE<(_hY1(X:4;m=Q790(V&C' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
