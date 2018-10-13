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
      'editarArticulo' => 'ABMarticulosController#editorArticulos',
      'subirArticulo' => 'ABMarticulosController#subirArticulo',
      'updateArticulo' => 'ABMarticulosController#updateArticulo',
      'login' => 'LoginController#login',
      'logout' => 'LoginController#logout',
      'verificarLogin' => 'LoginController#verificarLogin'
    ];

}

 ?>
