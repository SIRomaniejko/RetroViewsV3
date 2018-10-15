<?php
    require_once('model/ArticulosModel.php');
    require_once('view/ArticulosView.php');
    class ArticulosController {
        private $ArticulosModel;
        private $ArticulosView;
        function __construct() {
            $this->ArticulosModel = new ArticulosModel();
            $this->ArticulosView = new ArticulosView();
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
    }
?>
