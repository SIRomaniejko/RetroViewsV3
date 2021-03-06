<?php
class ConfigApi{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'articulos#GET'=> 'ArticulosAPI#getArticulos',
      'articulos#DELETE'=> 'ArticulosAPI#deleteArticulo',
      'articulos#PUT'=> 'ArticulosAPI#updateArticulo',
      'articulos#POST'=> 'ArticulosAPI#insertArticulo',

      'imagenes#DELETE' => 'ImagenesAPI#deleteImagen',
      'imagenes#GET' => 'ImagenesAPI#getImagen',

      'categorias#GET'=> 'CategoriasAPI#getCategorias',
      'categorias#DELETE'=> 'CategoriasAPI#deleteCategoria',
      'categorias#PUT'=> 'CategoriasAPI#updateCategoria',
      'categorias#POST'=> 'CategoriasAPI#insertCategoria',

      'usuarios#GET'=> 'UsuariosAPI#getUsuarios',
      'usuarios#DELETE'=> 'UsuariosAPI#deleteUsuario',
      'usuarios#PUT'=> 'UsuariosAPI#updateUsuario',
      'usuarios#POST'=> 'UsuariosAPI#insertUsuario',

      'comentarios#GET'=> 'ComentariosAPI#getComentarios',
      'comentarios#POST'=> 'ComentariosAPI#insertComentario',
      'comentarios#DELETE'=> 'ComentariosAPI#deleteComentario',

      'getSessionData#GET' => 'Api#getSessionData',
  ];
}