<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', "wordpress_db" );

/** Database username */
define( 'DB_USER', "wordpress_user" );

/** Database password */
define( 'DB_PASSWORD', "w2}g4X\$£1(%a" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'endscbigd3h94vwwjajn6lwqk7tbvz462wg9hbjxiowokzdo0rtyy6mczoz3apoe' );
define( 'SECURE_AUTH_KEY',  'tutshmt9jdqygktx8t833g8himyvfijiikyvdl4soeqo99xwrkmalwkhfuhums3e' );
define( 'LOGGED_IN_KEY',    'gy2ocgjff4v6fonoxgsa3s49piauve5mdwcozyzixepmkwyfgqy9pfuo6quwodct' );
define( 'NONCE_KEY',        'crouucqyriuu4zy5si2mtl5fj7qvqsa4wqghzcjjgyfppglpb5tphcwbampvu20k' );
define( 'AUTH_SALT',        'w1t8tsk5xu26n8f6w1eigiyqis3pqhonk0icyva7vthyveik5plijangwu9sweqa' );
define( 'SECURE_AUTH_SALT', 'wfg4ksvj7jqqzfytvllb9ytbcis1eyauemf2trj1g6btglsao78dwau5qjm6m5mp' );
define( 'LOGGED_IN_SALT',   'arcl6lvpop0j28miv6nmici1w4fgtnqsvwsyyikwiaoeo9mmiqngcb27juzxgd08' );
define( 'NONCE_SALT',       'p1kolagklgblvurchzqcazcoinnsvxpun8grsomwfiyp4dflihnyanvzgj8mhzh4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpu6_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



define( 'DUPLICATOR_AUTH_KEY', 'sa<=G<c^Fj9sVae{y_pZW@iL-pNjwUxcbYk/phQ >6@Z^U`(b94F5#EdId3[9Z=h' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
