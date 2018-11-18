<?php
    require_once('libs/Smarty.class.php');
    require_once('View.php');

    class ArticulosView extends View{
        function __construct() {
            parent::__construct();
        }
        function home($reviews, $categorias){
            $this->smarty->assign('reviews', $reviews);
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->display('templates/home.tpl');
        }
        function reviewCompleta($review, $categoria, $imagenes){
            $this->smarty->assign('titulo', $review['titulo']);
            $this->smarty->assign('contenido', $review['contenido']);
            $this->smarty->assign('id_review', $review['id_review']);
            $this->smarty->assign('categoria', $categoria);
            $this->smarty->assign('imagenes', $imagenes);
            $this->smarty->display('templates/review.tpl');
        }
        
        function notFound(){
            $this->smarty->display('templates/404.tpl');
        }
    }
?>
