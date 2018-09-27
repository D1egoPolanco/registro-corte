<?php
ob_start();
session_start();

date_default_timezone_set('America/El_Salvador'); 
setlocale(LC_TIME, 'spanish');

header("Content-Type: text/html;charset=utf-8");
header( "Cache-Control: no-cache, must-revalidate" );
header( "Expires: Mon, 20 Dec 2000 01:00:00 GMT" );

$uri=explode("/", $_SERVER["REQUEST_URI"]);
$c=count($uri);
for ($i=0; $i < $c; $i++) { 
  if($i!=$c-1){
    $ur2[$i]=$uri[$i];
  }
}
$dir=$uri[1]."/";
$url=("http://".$_SERVER["SERVER_NAME"]."/".$dir);
$_SESSION['URL']= isset($_SESSION['URL']) ? $_SESSION['URL'] : $url;
define("ABSOLUTE_PATH", $url);


if (!ini_get('display_errors')) {
    ini_set('display_errors', '1');
}

require_once('conf.php');

if (isset($_GET['mod'])) {
    $modulo = $_GET['mod'];
} else {
    $modulo = MODULO_DEFECTO;
}
if (isset($conf[$modulo]['layout'])) {
    $path_layout = LAYOUT_PATH . '/' . $conf[$modulo]['layout'];
    if (!empty($conf[$modulo]['layout'])) {
        include($path_layout);
    }
} else {
    //if (isset($_SESSION['SIGJP_usuario'])) {
        //$modulo = 'inicio';
        //$path_layout = LAYOUT_PATH . '/' . $conf[$modulo]['layout'];
        //include($path_layout);
    //} else {
        $modulo = 'login';
        $path_layout = LAYOUT_PATH . '/' . $conf[$modulo]['layout'];
        include($path_layout);
    //}
}

?>