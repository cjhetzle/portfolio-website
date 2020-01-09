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
define( 'DB_NAME', 'camerpt3_155' );

/** MySQL database username */
define( 'DB_USER', 'camerpt3_155' );

/** MySQL database password */
define( 'DB_PASSWORD', 'A95FD1C2Bl8aszg6k7u4vb3' );

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
define( 'AUTH_KEY',          'A>3}T#0g;>,e87q-;$L! AHN^7kbi5KvFAIuoE|qE$tORq) f!|LK*Pxk0_3.<)(' );
define( 'SECURE_AUTH_KEY',   'W$~k/Foxu1Y91{Ogr|qY|%mr5wT](;VinNf<su%c_vX yp!?(Sz-Yh2Vd|t],2|q' );
define( 'LOGGED_IN_KEY',     '}58r:B`2XALK~a%4Tgu|uTz  .2I~UA3mM^^ytn.@:9S(_R}h,)T?$8a+},<V4&b' );
define( 'NONCE_KEY',         'X<(0GG6w/*_RfjeXa]cx8~XR;>$,vm|kuss6{(/oM}Ti{H[CCCI05v95di!L/Fa5' );
define( 'AUTH_SALT',         '5}]}A0jcxQs$r%$>wvO2KSJ QyTG-.zEmsizY|3LHEEPY8{{&W-2ETo8$T@Nh3p9' );
define( 'SECURE_AUTH_SALT',  'A6#MkwE_xK99^3&@6^2p5UD7<A0U;u6u?[AJei_Kj6`m__ttu~Dkx&)ic&H3D`[z' );
define( 'LOGGED_IN_SALT',    'e,R!@)8rmbO=i#d$`[TWI=[6lUmG(3FWkPf?J_m`KOO`K~(6v-jG?B5inGNDx*dY' );
define( 'NONCE_SALT',        'eH HI:V=^C+mPWg)<]vwrRV{1Rmc~a12SIeO[: %Ac1? kl@TH?K9RGJIROt-Bdg' );
define( 'WP_CACHE_KEY_SALT', '!ncP@Ve#]I&pbi|S<z8Jo(mWQOJ-z9Tw<kiqhnP,`Hj*OM%a.Ys1lXg2.[V,H(be' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '155_';



define( 'AUTOSAVE_INTERVAL',    300  );
define( 'WP_POST_REVISIONS',    5    );
define( 'EMPTY_TRASH_DAYS',     7    );
define( 'WP_AUTO_UPDATE_CORE',  true );
define( 'WP_CRON_LOCK_TIMEOUT', 120  );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
