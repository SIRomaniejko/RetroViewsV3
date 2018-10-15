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
      'crearArticulo' => 'ABMController#creadorArticulos',
      'editarArticulo' => 'ABMController#editorArticulos',
      'subirArticulo' => 'ABMController#subirArticulo',
      'updateArticulo' => 'ABMController#updateArticulo',
      'login' => 'LoginController#login',
      'logout' => 'LoginController#logout',
      'categoria' => 'ArticulosController#reviewsCategoria',
      'verificarLogin' => 'LoginController#verificarLogin',
      'administrador' => 'ABMController#administrador',
    ];

}

 ?>
