<?php
define('MODULO_DEFECTO', 'login');
define('LAYOUT_DEFECTO', 'login.php');
define('LAYOUT_DESKTOP', 'desktop.php');
define('MODULO_PATH', realpath('app/views'));
define('LAYOUT_PATH', realpath('app/templates'));

$conf['inicio'] = array(
    'archivo' => 'inicio.php',
    'layout' => LAYOUT_DESKTOP
);
$conf['ejemplo'] = array(
    'archivo' => 'ejemplo.php',
    'layout' => LAYOUT_DESKTOP
);
$conf['error'] = array(
    'archivo' => '404.php',
    'layout' => LAYOUT_DESKTOP
); 
$conf['login'] = array(
    'archivo' => 'usuario/login.php',
    'layout' => LAYOUT_DEFECTO
); 

?>