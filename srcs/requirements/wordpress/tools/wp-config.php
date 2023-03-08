<?php

define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'mcakay');
define( 'DB_PASSWORD', '42THGtt');
define( 'DB_HOST', 'mariadb' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

define('WP_CACHE', true);
define('WP_CACHE_KEY_SALT', 'mcakay@wordpress.com');

define('AUTH_KEY',         'yf2k[~%6Y-H}Nl>2ZD4t<+Rp#dD~ rO|sWl`Qal_m-APzz:-o{,G^/muMhCWF A;');
define('SECURE_AUTH_KEY',  'LP~SrjDmZ,u_-DJqV/l|iJC%PSsy)IkVK ETuVu&pn`AX%y]&UA38s0_5oTsAL C');
define('LOGGED_IN_KEY',    '0,5Mb_F%S=O~,N6-)-FirWRI vjc?eZ`kT5bA9|NE w0i.:k=ZPV5dl2~1#aj>xL');
define('NONCE_KEY',        'VUn1nnaf|=!7e{CpDi1=Lit8lNXlf#alX2q:G:xx0R|L04Jwy]6OXw7:||SkO#o=');
define('AUTH_SALT',        '8MULg1pe<5Wa^$?#G&7uw+Xr+:D4@M+|.eomTZ:jc+MHNI5c<H:+Ktk!1I36R#m*');
define('SECURE_AUTH_SALT', '3)kzM#]DGH(1<-Bx}Nl-#ry^dBfZuC=aV7NwC]y _8b:IsH3`2~[or%k d##@+5N');
define('LOGGED_IN_SALT',   '_ueBzx7hTm[O4a[cXWhy!_5K(Cv<*p&|(3UAA~+^m!!HB+^Y]]hHwVi]`$8EXA7h');
define('NONCE_SALT',       '?o2j|kHH.-tqJHIp00GYb#Rf.lA*^Q[+~0}/+j>1(&||>ST)o~+w,h=S/3;a.+n4');

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', '/var/www/html/wordpress' );
}

require_once ABSPATH . 'wp-settings.php';