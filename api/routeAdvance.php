<?php
require_once "config/ConfigApi.php";
require_once "controller/ArticulosAPI.php";
require_once "controller/CategoriasAPI.php";
require_once "controller/UsuariosAPI.php";

define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] .":". $_SERVER['SERVER_PORT'].dirname($_SERVER["PHP_SELF"]));
define('LOGIN', HOME."/login");

function parseURL($url)
{
  $urlExploded = explode('/', $url);
  $arrayReturn[ConfigApi::$RESOURCE] = $urlExploded[0].'#'.$_SERVER['REQUEST_METHOD'];
  $arrayReturn[ConfigApi::$PARAMS] = isset($urlExploded[1]) ? array_slice($urlExploded,1) : null;
  return $arrayReturn;
}

if(isset($_GET['resource'])){
    $urlData = parseURL($_GET['resource']);
    $resource = $urlData[ConfigApi::$RESOURCE]; //home

    if(array_key_exists($resource,ConfigApi::$RESOURCES)){
        $params = $urlData[ConfigApi::$PARAMS];
        $resource = explode('#',ConfigApi::$RESOURCES[$resource]); //Array[0] -> TareasController [1] -> BorrarTarea
        $controller =  new $resource[0]();
        $metodo = $resource[1];
        if(isset($params) &&  $params != null){
            echo $controller->$metodo($params);
        }
        else{
            echo $controller->$metodo();
        }
    }
}
 ?>
