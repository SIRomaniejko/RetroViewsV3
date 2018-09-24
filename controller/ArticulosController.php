<?php
    require('libs/Smarty.class.php');
    class ArticulosController{
        function test(){
            $a = [
                "portada" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiS4dJvlASutabk2CJuL2OhSdZLsXudz0PRbZaJH4N8srwr6e3qQ",
                "titulo" => "juegos cristianos",
                "descripccion" => "juegos creador por aaaa",
            ];
            $b = [
                "portada" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiS4dJvlASutabk2CJuL2OhSdZLsXudz0PRbZaJH4N8srwr6e3qQ",
                "titulo" => "juegos cristianos",
                "descripccion" => "juegos creador por aaaa",
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