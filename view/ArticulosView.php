<?
    class ArticulosView.php{
        function home(){
            $smarty = new Smarty();
            $smarty->assign('reviews', $reviews);
            //$smarty->debugging = true;
            $smarty->display('templates/home.tpl');
        }
    }
?>