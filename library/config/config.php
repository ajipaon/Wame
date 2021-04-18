<?php
/*
|--------------------------------------------------------------------------
| DEFINE Configuration
|--------------------------------------------------------------------------
*/
define("_NAME", "wames");
define("_VERSION", "1.0.0");
define("BASEPATH", dirname(dirname(__DIR__)));
define('BASE_DOMAIN', $_SERVER['HTTP_HOST']);
define("BASE_HOST", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://".BASE_DOMAIN);
define('BASE_PAGE', basename($_SERVER['PHP_SELF']));
define('CURRENT_URL', BASE_HOST.$_SERVER['REQUEST_URI']);


/*
|--------------------------------------------------------------------------
| Database Configuration
|--------------------------------------------------------------------------
*/
$dbinfo['host']     = 'localhost'; 		// your mysql server
$dbinfo['db']       = 'wame'; // your database name
$dbinfo['user']     = 'root'; 			// your username for mysql
$dbinfo['password'] = '';				// your password for mysql

/*
|--------------------------------------------------------------------------
| APP Configuration
|--------------------------------------------------------------------------
*/

if ( (! empty($_SERVER['REQUEST_SCHEME']) && $_SERVER['REQUEST_SCHEME'] == 'https') ||
     (! empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ||
     (! empty($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443') ) {
    $server_request_scheme = 'https';
} else {
    $server_request_scheme = 'http';
}
$root = $server_request_scheme . '://' . $_SERVER['HTTP_HOST'];

/* URL to your wame root */
$app['base_url'] = $root;
$app['name'] = _NAME;
$app['admin'] = [
  'ajipaon@gmail.com',
];
// $app['description'] = _NAME.'drfgsgsg';
// $app['folder'] = 'drgdgd';
$app['debug'] = 1;
$app['public'] = 1;



?>