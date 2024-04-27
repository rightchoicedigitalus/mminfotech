<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mminfotech' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'Ixw{K(,`fT(f8YSUek!mnty0eis:6X^#O/0qQ8_5fR%Ef3LG=:qvxP*i1cv:>&g(' );
define( 'SECURE_AUTH_KEY',  '7ul%%iE]t).W)DtWFv>C#Uv|^sz,fpJ{#t3(tLE%(I I=VNu@^YO9J+-SO)FcA)Z' );
define( 'LOGGED_IN_KEY',    '$?f(@PYE[2#RN PF;qbaAPP&/!#|#,D6bSfMqM#$JvihMUzrggd)aluX!Jfi%^E)' );
define( 'NONCE_KEY',        'QMmg31<Ot=!TemS2A/fUd>={~[W*L_4/!(MH_hkTcL^fqOa`)~.a7Q oan8M4o*N' );
define( 'AUTH_SALT',        'IUY}_`x|Xw*4#{k8X23]_9ZU5SqaUd2Jq>2yxuuk%jc/#EEtR12_Qt]?`V(>[(I3' );
define( 'SECURE_AUTH_SALT', 'D,kF96<H&Ic1EX&|nT}~=TuX)p$lgP,u!(12q/r_^I!u}R3PH#*[r[!P55+W$ls0' );
define( 'LOGGED_IN_SALT',   'RAr)ma ]3=.+AgU5%kk>H(fz(i#gsdX%lR3]R_B%6nPWEEU_{W=!W?P]w#O*cmk8' );
define( 'NONCE_SALT',       'p5;B%ij-)l~0pl.O,/Br|gI_>3z)=y84cZgm:8C94raHEg-Z&!a_9^lXP@CO-o<J' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mm_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
