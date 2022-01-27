<?php

define('PROTOCOL', (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://');

define('DOMAIN', $_SERVER['HTTP_HOST']);

define('BASE_URL', preg_replace("/\/$/", '', PROTOCOL . DOMAIN . str_replace(array('\\', "index.php", "index.html"), '', dirname(htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES))), 1) . '/');
define("BASE_PATH", getcwd());

// base para links css
// $uri = $_SERVER['REQUEST_URI'];
// if (isset($uri) && $uri !== null){
//     // echo $realuri ." fuera";
// if(!isset($realuri)){
//     // $a=1;
//     // $a++;
//     // echo $a;
//     $realuri=$uri;
//     echo $realuri ;
//     }
// $uri = substr($uri, 1);
// $uri = explode('/', $uri);
// $uri = "http://$_SERVER[HTTP_HOST]" . '/' . $realuri ;
// }else {
// $uri = null;
// }

// define("BASE_URL", $uri);