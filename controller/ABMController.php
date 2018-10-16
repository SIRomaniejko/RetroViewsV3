<?php
    require_once('model/ArticulosModel.php');
    require_once('view/ABMView.php');
    require_once("controller/SecuredController.php");
    require_once('model/CategoriasModel.php');
    class ABMController extends SecuredController{
        private $ArticulosModel;
        private $ABMView;
        private $CategoriasModel;
        function __construct() {
            //clase segura
            parent::__construct();
            $this->ArticulosModel = new ArticulosModel();
            $this->ABMView = new ABMView();
            $this->CategoriasModel = new CategoriasModel();
        }
        function creadorArticulos(){
            $categorias = $this->CategoriasModel->getCategorias();
            $this->ABMView->creadorArticulos($categorias);
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

        function editorArticulos($parametro){
            $titulo = str_replace('-', ' ', $parametro[0]);
            $categorias = $this->CategoriasModel->getCategorias();
            $review = $this->ArticulosModel->getReviewPorTitulo($titulo);
            $this->ABMView->editorArticulos($review, $categorias);
        }

        function updateArticulo(){

            $titulos = $this->ArticulosModel->getTitulosMenosElDeId($_POST['id_review']);
            $tieneTituloUnico = true;
            foreach ($titulos as $titulo) {
                if($titulo['titulo'] == $_POST['titulo']){
                    $tieneTituloUnico = false;
                }
            }
            if($tieneTituloUnico){
                $this->ArticulosModel->updateReview($_POST['id_review'], $_POST['id_categoria'], $_POST['titulo'], $_POST['contenido'], $_POST['resumen'], $_POST['portada']);
                header(HOME."/review/".str_replace(' ', '-', $_POST['titulo']));
            }
            else{
                echo($_POST['id_review']);
                print_r($titulos);
                echo "hongo trolongo";
            }
        }

        function eliminarArticulo($parametros){
            $parametros[0] = str_replace('-', ' ', $parametros[0]);
            $this->ArticulosModel->eliminarReview($parametros[0]);
            header(ADMIN);
        }

        function administrador(){
            $reviews = $this->ArticulosModel->getReviews();
            foreach($reviews as &$review){
                $review['tituloConBarra'] = str_replace(' ', '-', $review['titulo']);
            }
            $categorias = $this->CategoriasModel->getCategorias();
            foreach($categorias as &$categoria){
                $categoria['nombreConBarra'] = str_replace(' ', '-', $categoria['nombre_categoria']);
            }
            $this->ABMView->administrador($reviews, $categorias);
        }

        function editarCategoria(){
            $this->CategoriasModel->updateCategoria($_POST['idCategoria'], $_POST['nombreCategoria']);
            header(ADMIN);
        }

        function crearCategoria(){
            $this->CategoriasModel->crearCategoria($_POST['nombreCategoria']);
            header(ADMIN);
        }
        
        function eliminarCategoria(){
            $this->CategoriasModel->eliminarCategoria($_POST['idCategoria']);
            header(ADMIN);
        }
    }
?>