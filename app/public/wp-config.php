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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'opwXa8wh0mqDCcAM4+8AfpQnmfiGwfZL7JOq4wgcpZSs5L01gWehqd1f+CgQzKVJnHNLcRdONHkH4pHAk90Z/Q==');
define('SECURE_AUTH_KEY',  'nDPrYRtpXSXVTFXxlImWgCBDkMGD39facoNnezAQkXHqzHp2qT/EXgfbxsBp4WudVpBNF4B8Icdkdjifnh9sHg==');
define('LOGGED_IN_KEY',    'A2FcdQgMBR2kCtBjehUfMRx7loNyTP1ookdo3cXpPCDdax+jMG0Xq4kY8If7rraGIUCK7kBOVGnWHYxHqqqmPw==');
define('NONCE_KEY',        'CQ3jSMr+ZiZmHdGEvysqmsAWww5T3Scem1n+bt5e5CdMteQqoJXO+t5WcSzzVGPy06v14zp7y6s2fMCz0Azygg==');
define('AUTH_SALT',        'qsN6DbPfI6rMrrCrCO6NzzTpqpHd8WL5lb68csmxlmUCZi3D/LigauMHlL+qa9TrrY59GGVfdUTznWGslWrJBw==');
define('SECURE_AUTH_SALT', 'RSK9N53i8ugAKc42XJ9osX4FUERLLOX8SB8jG/uPyWt4b1G9/g44qlPKGzx4hs5teBLy+CHCNl+5GAxjUPDd+A==');
define('LOGGED_IN_SALT',   'HpNxz1zvhgQ93uauQQxAWrP6PwM+Z76fXoU/6z4WIRILupWCkLjAdwJy/kkdo+DH3zQ3h85F8Tiol1aej0ICQQ==');
define('NONCE_SALT',       'aehQN85gaonw/vXoujNst1TTWy7J12pozyf26ZwdniC7zTo3g9EPrzF6xT5J4WpOFH879Aj+S6b+st+H0OE4jw==');

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
