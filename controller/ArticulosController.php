<?php
    require_once('model/ArticulosModel.php');
    require_once('view/ArticulosView.php');
    class ArticulosController{
        private $ArticulosModel;
        private $ArticulosView;
        private $CategoriasModel;
        function __construct() {
            $this->ArticulosModel = new ArticulosModel();
            $this->ArticulosView = new ArticulosView();
            $this->CategoriasModel = new CategoriasModel();
        }
        function home(){
            $reviews = $this->ArticulosModel->getReviews();
            foreach($reviews as &$review){
                $review['tituloConBarra'] = str_replace(' ', '-', $review['titulo']);
            }
            $this->ArticulosView->home($reviews);
        }
        function verReview($parametros){
            $parametros[0] = str_replace('-', ' ', $parametros[0]);
            $review = $this->ArticulosModel->getReviewPorTitulo($parametros[0]);
            $this->ArticulosView->reviewCompleta($review);
        }

        function reviewsCategoria($parametros){
            $parametros[0] = str_replace('-', ' ', $parametros[0]);
            $idCategoria = $this->CategoriasModel->getIdCategoria($parametros[0]);
            $reviews = $this->ArticulosModel->getReviewsPorIdCategoria($idCategoria);
            //print_r($reviews[3]);
            foreach($reviews as &$review){
                $review['tituloConBarra'] = str_replace(' ', '-', $review['titulo']);
            }
            $this->ArticulosView->home($reviews);
        }
    }
?>
