<?php
    require_once('model/CategoriasModel.php');
    require_once('view/CategoriasView.php');
    class CategoriasController{
        private $CategoriasModel;
        private $CategoriasView;
        function __construct() {
            $this->CategoriasModel = new CategoriasModel();
            $this->CategoriasView = new CategoriasView();
        }
        function test($nombreCategoria){
            print_r($nombreCategoria);
            $nombreCategoria[0] = preg_replace('/-/', ' ', $nombreCategoria[0]);
            print_r($nombreCategoria);
            $idCategoria = $this->CategoriasModel->getCategoriaId($nombreCategoria[0]);
            $this->CategoriasView->test($idCategoria);
        }
        function listaCategorias(){
            $categorias = $this->CategoriasModel->getCategorias();
            $this->CategoriasView->mostrarCategorias($categorias);
        }
    }
?>