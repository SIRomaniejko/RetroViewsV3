<?php
    require('libs/Smarty.class.php');
    require('model/ArticulosModel.php');
    require('view/ArticulosView.php');
    class ArticulosController{
        $ArticulosModel;
        $ArticulosView;
        function __construct() {
            $ArticulosModel = new ArticulosModel();
            $ArticulosView = new ArticulosView();
        }
        function home(){
            $reviews = this->ArticulosModel->getReviewsHome();
            this->ArticulosView->home($reviews);
        }
    }
?>