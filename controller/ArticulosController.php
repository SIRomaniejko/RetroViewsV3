<?php
    require('libs/Smarty.class.php');
    class ArticulosController{
        function test(){
            $a = [
                "id_categoria" => 1,
                "nombre" => "juegos cristianos",
            ];
            $b = [
                "id_categoria" => 2,
                "nombre" => "juegos satanicos",
            ];
            $c = [
                "id_categoria" => 3,
                "nombre" => "juegos ateos",
            ];
            $categorias = array($a, $b, $c);
            $smarty = new Smarty();
            $smarty->assign('Titulo', ""); // El 'Titulo' del assign puede ser cualquier valor
            $smarty->assign('imgPath', "https://prod.media.libero.pe/660x378/libero/imagen/2017/12/27/noticia-john-cena-wwe.jpg");
            $smarty->assign('contenido', "fuck niggers");
            $smarty->assign('categorias', $categorias);
            //$smarty->debugging = true;
            $smarty->display('templates/creadorArticulo.tpl');
        }
    }
?>