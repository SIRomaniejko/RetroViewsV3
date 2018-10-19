<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'ArticulosController#home',
      '404' => 'ArticulosController#notFound',
      'review'=> 'ArticulosController#verReview',
      'categoria' => 'ArticulosController#reviewsCategoria',

      'categorias' => 'CategoriasController#listaCategorias',

      'login' => 'LoginController#login',
      'logout' => 'LoginController#logout',
      'verificarLogin' => 'LoginController#verificarLogin',
      'registrarse' => 'LoginController#registrarse',
      'registrarUsuario' => 'LoginController#registrarUsuario',
      
      'administrador' => 'ABMController#administrador',
      'eliminarArticulo' => 'ABMController#eliminarArticulo',
      'editarCategoria' => 'ABMController#editarCategoria',
      'crearCategoria' => 'ABMController#crearCategoria',
      'eliminarCategoria' => 'ABMController#eliminarCategoria',
      'errorFormulario' => 'ABMController#errorFormulario',
      'crearArticulo' => 'ABMController#creadorArticulos',
      'editarArticulo' => 'ABMController#editorArticulos',
      'subirArticulo' => 'ABMController#subirArticulo',
      'updateArticulo' => 'ABMController#updateArticulo',
    ];

}

 ?>
