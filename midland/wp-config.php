<?php

// BEGIN iThemes Security - Не меняйте и не удаляйте эту строку
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Отключить редактор файлов - Безопасность > Настройки > Подстройки WordPress > Редактор файлов
// END iThemes Security - Не меняйте и не удаляйте эту строку

define( 'ITSEC_ENCRYPTION_KEY', 'UnFLKFF4S2Jre3pqZkNubFZHWl9gSz9NLHZ9PUEzUVlGRjo/KFYmN0Q0Q1JjXUZIPT08LGo6KlBOYUJtIFQsZw==' );

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
define( 'DB_NAME', 'midland' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-8.2' );

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
define( 'AUTH_KEY',         'Ez^Ic4P6m4CI^rL;-5y=o}}Ib7?`C0qwYQ1f.(FB)]>8nbki5SSDR*el3KQ{hMw2' );
define( 'SECURE_AUTH_KEY',  'OyH5EG/dQ2))#V=}n2(LAbz]O sEtC$!;I*0hKVQeWLqd50gCsk;D@Mn+LZ8<~R^' );
define( 'LOGGED_IN_KEY',    '2;*uhtu>^,{ZN4XBn_b|m3N0%goZ$ j@({tk%b-%E_|};y1Qie$6QBEnDJWx{Oj&' );
define( 'NONCE_KEY',        'J7@^__yR,}.BxUeuid-O)`2jUx$DzV~=^$rdnnT>TbH8<R<f@oQHCus0TksYEmWk' );
define( 'AUTH_SALT',        '/Oy6dN+MYakft`X@[!tH@Z(7N2]nEWGg!BC_TOH@&H]?GcPO0]vs&]=SY5cD-t;D' );
define( 'SECURE_AUTH_SALT', 'Rz?`J(wl99?l`+-(KPkp W,YqN,N?_.M8ZF[EN~O>eQmElw`*hYzjrU$B8pqvdS2' );
define( 'LOGGED_IN_SALT',   '3RVr`Uyx8`7z]V BLm&GZ>!>?a9t5)) zd>Pi#4mUCbW3t09p*D%90e)9{b1oX<V' );
define( 'NONCE_SALT',       '&0N@F(#w#Tl,isvz41E&3g(14A@)xzN<;I5b-yKK.uX?W 7vx4Dp`7F1/EwAPGB3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
