<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'vulcpwni_wp561');

/** MySQL database username */
define('DB_USER', 'vulcpwni_wp561');

/** MySQL database password */
define('DB_PASSWORD', '7!EP@S484Z');

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
define('AUTH_KEY',         'fuencpovf7pg4h7kt3si3wwahugtxfme25snf4uaykmjikjv5coaioamdpon4mfl');
define('SECURE_AUTH_KEY',  '5nd4qvramodz9srmryxhvlageoa35oq3tihveukixqkkbboljahfspxgmhliznvo');
define('LOGGED_IN_KEY',    'yec9pegj1ne9omxs2g8jexcefrzloyb92geraouaynnxib8chqi2uubwxt9ei36p');
define('NONCE_KEY',        'blwpdwdbnm4f1tzamfh4tzjj1iopxjxy6r7giub3wmb3ng3yuscgss0kbd5grmrh');
define('AUTH_SALT',        'fhnsqjtd8llbzkap9cydkpdcbuecvy3jklybnlefvctamiqtjcg5mrctm1ggcpyj');
define('SECURE_AUTH_SALT', 'uyktklzxcmbwott5duymatcpr38fvtiommkxf06azm7g5goncebprpmolf8hksvq');
define('LOGGED_IN_SALT',   'vnjjixy735qgrvuiwxp40mk1epsr2hduwgm38yrbnqxczfqlbm4mvsfoptkefqz8');
define('NONCE_SALT',       'mhsjjrvxvewnd6whpghnakxlaldnii1zxnhuidmo8olcrmsvatcib7aipskh5rxx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
