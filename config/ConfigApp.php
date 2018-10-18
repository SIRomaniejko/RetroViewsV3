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
      'verificarLogin' => 'LoginController#verificarLogin',
      'registrarse' => 'LoginController#registrarse',
      'registrarUsuario' => 'LoginController#registrarUsuario',
      'categoria' => 'ArticulosController#reviewsCategoria',
      'administrador' => 'ABMController#administrador',
      'eliminarArticulo' => 'ABMController#eliminarArticulo',
      'editarCategoria' => 'ABMController#editarCategoria',
      'crearCategoria' => 'ABMController#crearCategoria',
      'eliminarCategoria' => 'ABMController#eliminarCategoria',
      'errorFormulario' => 'ABMController#errorFormulario',
      '404' => 'ArticulosController#notFound',
    ];

}

 ?>
