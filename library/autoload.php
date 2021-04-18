<?php
if(!isset($_SESSION)) session_start();
require_once('config/config.php');
require_once('fpdo/autoload.php');
require_once('wame/wame.function.php');
require_once('wame/wame.class.php');


$wame = new wame\wame_db();

// if(is_login()) {
//     $_user = json_decode($_COOKIE['user'], true);
//     if(in_array(basename($_SERVER['PHP_SELF']), ['file.php', 'upload.php', 'upload-drive.php'])) {
//         check_renew_token($_user);
//     }
// }
if($app['debug']==0) error_reporting(E_ALL);
?>