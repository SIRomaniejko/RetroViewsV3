<?php
    require_once('libs/Smarty.class.php');
    class CategoriasView
    {
        private $smarty;
        function __construct() {
            $this->smarty = new Smarty();
        }
        function test($categoria){
            $this->smarty->assign('categoria', $categoria);
            $this->smarty->display('templates/testCategoria.tpl');
        }
    }
?>