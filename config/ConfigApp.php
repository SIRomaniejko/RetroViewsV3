<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'ArticulosController#home',
      'review'=> 'ArticulosController#review',
      'test'=> 'CategoriasController#test',
      'categorias' => 'CategoriasController#listaCategorias',
      'crearArticulo' => 'ABMarticulosController#creadorArticulos',
      'subirArticulo' => 'ABMarticulosController#subirArticulo',
    ];

}

 ?>
