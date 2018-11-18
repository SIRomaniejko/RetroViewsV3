<?php

class ConfigApi
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'articulos#GET'=> 'ArticulosAPI#getArticulos',
      'imagenes#DELETE' => 'ImagenesAPI#deleteImagen',
      'imagenes#GET' => 'iMAGENESapi#getImagen',
    ];

}

 ?>
