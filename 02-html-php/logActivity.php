<?php
include_once('session.php');
include_once("vendor/autoload.php");
if ($_SESSION["loggedIn"]) {
    header("Location: index.php");
    exit;
}
define('LOG','log.txt');
function write_log($log){  
 $time = @date('[Y-d-m:H:i:s]');
 $op=$time.' '.'Action for '.$log."\n".PHP_EOL;
 $fp = @fopen(LOG, 'a');
 $write = @fwrite($fp, $op);
 @fclose($fp);
}
if($login){
write_log("login success");
}else{
write_log("login fail");
}
