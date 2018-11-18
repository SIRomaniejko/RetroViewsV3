<?php
    require_once('libs/Smarty.class.php');
    require_once('View.php');

    class CategoriasView extends View
    {
        function __construct() {
            parent::__construct();
        }
        function test($categoria){
            $this->smarty->assign('categoria', $categoria);
            $this->smarty->display('templates/testCategoria.tpl');
        }
        function mostrarCategorias($categorias){
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->display('templates/listaDeCategorias.tpl');
        }
    }
?>
