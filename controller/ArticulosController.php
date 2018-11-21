<?php
    require_once('model/ArticulosModel.php');
    require_once('view/ArticulosView.php');
    class ArticulosController {
        private $ArticulosModel;
        private $ArticulosView;
        private $CategoriasModel;
        private $ImagenesModel;

        function __construct() {
            $this->ArticulosModel = new ArticulosModel();
            $this->ArticulosView = new ArticulosView();
            $this->CategoriasModel = new CategoriasModel();
            $this->ImagenesModel = new ImagenesModel();
        }
        function home(){
            $reviews = $this->ArticulosModel->getReviews();
            $categorias = $this->CategoriasModel->getCategorias();
            foreach($reviews as &$review){
                $review['tituloConBarra'] = str_replace(' ', '-', $review['titulo']);
                $review['imagenes'] = $this->ImagenesModel->getImagenes($review['id_review']);
            }
            $this->ArticulosView->home($reviews, $categorias);
        }
        function verReview($parametros){
            $parametros[0] = str_replace('-', ' ', $parametros[0]);
            $review = $this->ArticulosModel->getReviewPorTitulo($parametros[0]);
            $categoria = $this->CategoriasModel->getCategoria($review['id_categoria']);
            $imagenes = $this->ImagenesModel->getImagenes($review['id_review']);
            $this->ArticulosView->reviewCompleta($review, $categoria, $imagenes);
        }

        function reviewsCategoria($parametros){
            $categoria = str_replace('-', ' ', $parametros[0]);
            $idCategoria = $this->CategoriasModel->getIdCategoria($categoria);
            $categoria = $this->CategoriasModel->getCategoria($idCategoria);
            $reviews = $this->ArticulosModel->getReviewsPorIdCategoria($idCategoria);
            foreach($reviews as &$review){
                $review['imagenes'] = $this->ImagenesModel->getImagenes($review['id_review']);
                $review['tituloConBarra'] = str_replace(' ', '-', $review['titulo']);
            }
            $this->ArticulosView->categoria($reviews, $categoria);
        }

        function notFound(){
            $this->ArticulosView->notFound();
        }
    }
?>
