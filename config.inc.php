<?php
header("Access-Control-Allow-Origin: *");
date_default_timezone_set("Asia/Bangkok");
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WisniorWeb */
// define( 'DB_NAME', 'wisniorweb' );
// define( 'DB_NAME', 'postgraduateforum2020' );
define( 'DB_NAME', 'postgraduateforum2020' );
define( 'DB_USER', 'pgf2020u' );
// define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'mandymorenn' );
// define( 'DB_PASSWORD', 'iU&2d#3' );
define( 'DB_HOST', 'localhost' );
define( 'TB_PREFIX', 'udix2_' );
define( 'ROOT_DOMAIN', 'https://postgraduateform2020.com/' );
// define( 'ROOT_DOMAIN', 'http://localhost/iw/' );

// Define system parameters
$sysdate = date('Y-m-d');
$sysmonth = date('m');
$sysyear = date('Y');
$sysdatetime = date('Y-m-d H:i:s');
$sysdateu = date('U');
$ip = $_SERVER['REMOTE_ADDR'];

?>
