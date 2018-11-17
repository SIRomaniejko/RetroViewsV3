<?php
class ConfigApi{
  public static $RESOURCE = 'resource';
  public static $PARAMS = 'params';
  public static $RESOURCES = [
    'articulos#GET'=> 'ArticulosAPI#getArticulos',
    'articulos#DELETE'=> 'ArticulosAPI#deleteArticulo',
    'articulos#PUT'=> 'ArticulosAPI#updateArticulo',

    'categorias#GET'=> 'CategoriasAPI#getCategorias',
    'categorias#DELETE'=> 'CategoriasAPI#deleteCategoria',
    'categorias#PUT'=> 'CategoriasAPI#updateCategoria',
  ];
}