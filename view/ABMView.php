<?php
    require_once('libs/Smarty.class.php');
    class ABMView
    {
        private $smarty;
        function __construct() {
            $this->smarty = new Smarty();
            $this->smarty->assign('root', ROOT);
            session_start();
            if(isset($_SESSION['User'])){
              $this->smarty->assign('user', $_SESSION['User']);
            }else{
              $this->smarty->assign('user', null);
            }
        }
        function creadorArticulos($categorias){
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->display('templates/creadorArticulo.tpl');
        }
        function editorArticulos($review, $categorias){
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->assign('review', $review);
            $this->smarty->display('templates/editorArticulo.tpl');
        }
        function administrador($reviews, $categorias){
            $this->smarty->assign('reviews', $reviews);
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->display('templates/administrador.tpl');
        }
    }
?>
