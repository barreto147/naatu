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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'naatu' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mE4DZh-T`mz/K921){*szZ(kLAiW(k(18NJz<zkSxG#:8!lzV<qnfJe1p=7]B,~b' );
define( 'SECURE_AUTH_KEY',  ']u}F.k PsS:}A,*Op-IgS!yK|-vKO*`LSu|Y(Nf@1$pL6p$o=6ojTt$A{ULB /p`' );
define( 'LOGGED_IN_KEY',    '.~`.DJ}d~<$#J)$1Njp}Z#58GOpjm_bJ{q%{%Str0m8Mbo3OflAxI[!*]$LUjFC}' );
define( 'NONCE_KEY',        '^{.Wj]~muYBqF*/<dXK*_lgAwq%!q<t/83!L$D[]Q-4nsV`z<u|P?hJg`T]1j3av' );
define( 'AUTH_SALT',        'cz-d,B9+2Dh#GB-[`V,&FZFGO ob-D_2XRDO{=YPL}AbvNDvW9+`k]@o=uR]/O3d' );
define( 'SECURE_AUTH_SALT', 'tSV1BH`8^0*&YD_H)!U;j ](pA_JBgm57_E)1/#7(~ug:TKKxAl~J=>Q%D^d[[%,' );
define( 'LOGGED_IN_SALT',   '<Vf/AHSQcUY/xNZ,2sI|k/{yg+z>?[6o0U3=a4;B, *<1+6r<q-Y7mMCY@A1u]Rf' );
define( 'NONCE_SALT',       '%/G K$o]`Avi[_OA1_Z:MB60hP$gS;SRisxQU!kdfuoH&SDUH({%N]BCF*5&CVwv' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nt_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
