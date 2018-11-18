<?php
    require_once('model/ArticulosModel.php');
    require_once('view/ABMView.php');
    require_once("controller/SecuredController.php");
    require_once('model/CategoriasModel.php');
    require_once('model/ImagenesModel.php');
    class ABMController extends SecuredController{
        private $ArticulosModel;
        private $ABMView;
        private $CategoriasModel;
        private $ImagenesModel;
        function __construct() {
            //clase segura
            parent::__construct();
            $this->ArticulosModel = new ArticulosModel();
            $this->ABMView = new ABMView();
            $this->CategoriasModel = new CategoriasModel();
            $this->ImagenesModel = new ImagenesModel();
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
                $subido = $this->ArticulosModel->subirReview($_POST['id_categoria'], $_POST['titulo'], $_POST['contenido'], $_POST['resumen']);
                $this->postImagenes($subido['id_review']);
                header(HOME."/review/".str_replace(' ', '-', $_POST['titulo']));
            }
            else{
                header(ERRORTITULO);
            }
        }
        private function postImagenes($id_review){
            print_r($_FILES);
            $imagenes = array();
            foreach ($_FILES['imagenes']['type'] as $key => $value) {
                $tipo = explode('/', $value);
                if($tipo[0] == "image"){
                    $imagenes[] = array('tipo' => $tipo[1], 'path' => $_FILES['imagenes']['tmp_name'][$key]);
                }
            }
            print_r($imagenes);
            foreach($imagenes as $imagen){
                $this->ImagenesModel->insertImagen($id_review, $imagen);
            }
        }

        function editorArticulos($parametro){
            $titulo = str_replace('-', ' ', $parametro[0]);
            $categorias = $this->CategoriasModel->getCategorias();
            $review = $this->ArticulosModel->getReviewPorTitulo($titulo);
            $imagenes = $this->ImagenesModel->getImagenes($review['id_review']);
            $this->ABMView->editorArticulos($review, $categorias, $imagenes);
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
                $subido = $this->ArticulosModel->updateReview($_POST['id_review'], $_POST['id_categoria'], $_POST['titulo'], $_POST['contenido'], $_POST['resumen']);
                if(isset($subido)){
                    $this->postImagenes($subido['id_review']);
                    header(HOME."/review/".str_replace(' ', '-', $_POST['titulo']));
                }
                else{
                    echo "pija";
                }
            }
            else{
                header(ERRORTITULO);
            }
        }

        function eliminarArticulo($parametros){
            $parametros[0] = str_replace('-', ' ', $parametros[0]);
            $review =$this->ArticulosModel->getReviewPorTitulo($parametros[0]);
            if(isset($review)){
                $this->ImagenesModel->deleteImagenes($review['id_review']);
                $this->ArticulosModel->eliminarReview($parametros[0]);
            }
            header(ADMIN);
        }

        function administrador(){
            $reviews = $this->ArticulosModel->getReviews();
            foreach($reviews as &$review){
                $review['tituloConBarra'] = str_replace(' ', '-', $review['titulo']);
                $review['imagenes'] = $this->ImagenesModel->getImagenes($review['id_review']);
            }
            $categorias = $this->CategoriasModel->getCategorias();
            foreach($categorias as &$categoria){
                $categoria['nombreConBarra'] = str_replace(' ', '-', $categoria['nombre_categoria']);
            }
            $this->ABMView->administrador($reviews, $categorias);
        }

        function editarCategoria(){
            if(!$this->CategoriasModel->esNombreRepetido($_POST['nombreCategoria'])){
                $this->CategoriasModel->updateCategoria($_POST['idCategoria'], $_POST['nombreCategoria']);
                header(ADMIN);
            }
            else{
                header(ERRORNOMBRE);
            }
        }

        function crearCategoria(){
            if(!$this->CategoriasModel->esNombreRepetido($_POST['nombreCategoria'])){
                $this->CategoriasModel->crearCategoria($_POST['nombreCategoria']);
                header(ADMIN);
            }
            else{
                header(ERRORNOMBRE);
            }
        }
        
        function eliminarCategoria(){
            $this->CategoriasModel->eliminarCategoria($_POST['idCategoria']);
            header(ADMIN);
        }

        function errorFormulario(){
            $this->ABMView->errorFormulario();
        }
    }
?>