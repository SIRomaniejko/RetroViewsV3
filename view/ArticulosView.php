<?php
    require_once('libs/Smarty.class.php');
    class ArticulosView{
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
