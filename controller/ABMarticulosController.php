<?php
    require_once('model/ArticulosModel.php');
    require_once('view/ABMarticulosView.php');
    class ABMarticulosController{
        private $ArticulosModel;
        private $ABMarticulosView;
        private $CategoriasModel;
        function __construct() {
            //clase segura
            $this->ArticulosModel = new ArticulosModel();
            $this->ABMarticulosView = new ABMarticulosView();
            $this->CategoriasModel = new CategoriasModel();
        }
        function creadorArticulos(){
            $categorias = $this->CategoriasModel->getCategorias();
            $this->ABMarticulosView->creadorArticulos($categorias);
        }
        function subirArticulo(){
            $titulos = $this->ArticulosModel->getTituloReviews();
            $tieneTituloUnico = true;
            foreach ($titulos as $titulo) {
                if($titulo['titulo'] == $_POST['titulo']){
                    $tieneTituloUnico = false;
                }
            }
            if($tieneTituloUnico){
                $this->ArticulosModel->subirReview($_POST['id_categoria'], $_POST['titulo'], $_POST['contenido'], $_POST['resumen'], $_POST['portada']);
                header(HOME."/review/".str_replace(' ', '-', $_POST['titulo']));
            }
        }
        private function comprobarTituloUnico($tituloReviewNueva){
            
        }
    }
?>