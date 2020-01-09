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

define('DB_NAME', '');

/** MySQL database username */

define('DB_USER', '');

/** MySQL database password */

define('DB_PASSWORD', '');

/** MySQL hostname */

define('DB_HOST', '');


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

define('AUTH_KEY', '82d5eaaa8ceca49f010f61c196fa5dc7ccd116004994c1dc6bf85b8cf91693ef');
define('SECURE_AUTH_KEY', '75676b43ac081398cea2a5f98c75b9ab6a7a7bc640a6cba3e8efa3d0216b9aaa');
define('LOGGED_IN_KEY', '241259d7d8018de9317dc37608e308e106c3133fcdf19caa315e939b990eba34');
define('NONCE_KEY', '80aa44ae3b1ec77a4ab50a68a3cff8072bdc81c8d49cfe1dab4929149acdb949');
define('AUTH_SALT', '185608f56dc6839d1abc5d5f95fdf6aabf8ddeec26a67a71f10d37588e607131');
define('SECURE_AUTH_SALT', 'fc65d76b9cd14e9087ed9613c42227ed15dbdf6d20a0dec9a48724acdda753da');
define('LOGGED_IN_SALT', 'cffc0b107b32311c4dc0ec5f6b8809933d34827b4129319d7bd59f36880d87bb');
define('NONCE_SALT', '1bfa47ed3407bb90ef380b869f594cc46ca367a833d1dcea5ea0026c5537f5e4');

/**#@-*/


/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix  = '_GZX_';

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


define( 'WP_CRON_LOCK_TIMEOUT', 120   ); 
define( 'AUTOSAVE_INTERVAL',    300   );
define( 'WP_POST_REVISIONS',    5     );
define( 'EMPTY_TRASH_DAYS',     7     );
define( 'WP_AUTO_UPDATE_CORE',  true  );


