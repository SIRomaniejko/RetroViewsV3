<?php
    require('libs/Smarty.class.php');
    class ArticulosController{
        function test(){
            $smarty = new Smarty();
            $smarty->assign('Titulo', "los judios lo hicieron otra vez"); // El 'Titulo' del assign puede ser cualquier valor
            $smarty->assign('imgPath', "https://prod.media.libero.pe/660x378/libero/imagen/2017/12/27/noticia-john-cena-wwe.jpg");
            $smarty->assign('contenido', "fuck niggers");
            //$smarty->debugging = true;
            $smarty->display('templates/creadorArticulo.tpl');
        }
    }
?>