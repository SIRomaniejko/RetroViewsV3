<?php
    require_once('libs/Smarty.class.php');
    class ABMarticulosView
    {
        private $smarty;
        function __construct() {
            $this->smarty = new Smarty();
            $this->smarty->assign('root', ROOT);
        }
        function creadorArticulos($categorias){
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->display('templates/creadorArticulo.tpl');
        }
    }
?>