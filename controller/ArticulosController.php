<?php
require_once 'model/ArticulosModel.php';
require_once 'view/ArticulosView.php';
require_once 'SecuredController.php';

class ArticulosController extends SecuredController{
  private $ArticulosModel;
  private $ArticulosView;

  function __construct() {
    parent::__construct();
    $this->ArticulosModel = new ArticulosModel();
    $this->ArticulosView = new ArticulosView();
  }
  function home(){
    $reviews = $this->ArticulosModel->getReviews();
    $this->ArticulosView->home($reviews);
  }
  function review($idReview){
    $review = $this->ArticulosModel->getReview($idReview[0]);
    $this->ArticulosView->reviewCompleta($review);
  }
}
?>
