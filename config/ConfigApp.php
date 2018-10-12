<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'ArticulosController#home',
      'review'=> 'ArticulosController#verReview',
      'test'=> 'CategoriasController#test',
      'categorias' => 'CategoriasController#listaCategorias',
      'crearArticulo' => 'ABMarticulosController#creadorArticulos',
      'subirArticulo' => 'ABMarticulosController#subirArticulo',
      'login' => 'LoginController#login',
      'logout' => 'LoginController#logout',
      'verificarLogin' => 'LoginController#verificarLogin'
    ];

}

 ?>
