<?php
    require_once('libs/Smarty.class.php');
    class ArticulosView
    {
        private $smarty;
        function __construct() {
            $this->smarty = new Smarty();
        }
        function home($reviews){
            $this->smarty->assign('reviews', $reviews);
            $this->smarty->display('templates/home.tpl');
        }
        function reviewCompleta($review){
            $this->smarty->assign('titulo', $review['titulo']);
            $this->smarty->assign('portada', $review['portada']);
            $this->smarty->assign('contenido', $review['contenido']);
            $this->smarty->assign('id_review', $review['id_review']);
            $this->smarty->display('templates/review.tpl');
        }
    }
?>