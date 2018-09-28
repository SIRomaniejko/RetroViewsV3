<?
    require('libs/Smarty.class.php');
    class ArticulosView.php{
        function __construct() {
            $smarty = new Smarty();
        }
        function home(){
            $smarty->assign('reviews', $reviews);
            //$smarty->debugging = true;
            $smarty->display('templates/home.tpl');
        }
        function reviewCompleta($review){
            $smarty->assign('titulo', $review['titulo']);
            $smarty->assign('portada', $review['portada']);
            $smarty->assign('contenido', $review['contenido']);
            $smarty->assign('id_review', $review['id_review']);
            $smarty->display('templates/review.tpl');
        }
    }
?>