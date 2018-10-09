<?php
    require_once('libs/Smarty.class.php');
    class CategoriasView
    {
        private $smarty;
        function __construct() {
            $this->smarty = new Smarty();
            $this->smarty->assign('root', ROOT);
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