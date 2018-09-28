<?php
    require('libs/Smarty.class.php');
    require('model/ArticulosModel.php');
    require('view/ArticulosView.php');
    class ArticulosController{
        $model;
        $view;
        function __construct() {
            
        }
        function test(){
            $a = [
                "portada" => "https://zone1-vgu.netdna-ssl.com/wp-content/uploads/2017/09/Danganronpa-V3-04.jpg",
                "titulo" => "juegos cristianos",
                "descripccion" => "juegos creador por aaaa",
            ];
            $b = [
                "portada" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiS4dJvlASutabk2CJuL2OhSdZLsXudz0PRbZaJH4N8srwr6e3qQ",
                "titulo" => "juegos cristianos",
                "descripccion" => "mmmmmmmmmmmmmm mmmmmmmmmmmmmm mmmmmmmmmmmmmmm mmmmmmmmmmmm mmmmmmmmmmmm mmmmmmmmmmm mmmmmmmmmmmmm",
            ];
            $c = [
                "id_categoria" => 3,
                "nombre" => "juegos ateos",
            ];
            $categorias = array($a, $b);
            $smarty = new Smarty();
            
            $smarty->assign('reviews', $categorias);
            //$smarty->debugging = true;
            $smarty->display('templates/home.tpl');
        }
    }
?>