<?php
    require_once('libs/Smarty.class.php');
    require_once('View.php');
    class ABMView extends View
    {
        function __construct() {
            parent::__construct();
        }
        function creadorArticulos($categorias){
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->display('templates/creadorArticulo.tpl');
        }
        function editorArticulos($review, $categorias, $imagenes){
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->assign('review', $review);
            $this->smarty->assign('imagenes', $imagenes);
            $this->smarty->display('templates/editorArticulo.tpl');
        }
        function administrador($reviews, $categorias){
            $this->smarty->assign('reviews', $reviews);
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->display('templates/administrador.tpl');
        }
        function errorFormulario(){
            $this->smarty->display('templates/errorFormulario.tpl');
        }
    }
?>
