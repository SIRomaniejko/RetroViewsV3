<?php
require_once 'model/CategoriasModel.php';
require_once 'view/CategoriasView.php';
require_once 'SecuredController.php';

class CategoriasController extends SecuredController{
  private $CategoriasModel;
  private $CategoriasView;

  function __construct() {
    parent::__construct();
    $this->CategoriasModel = new CategoriasModel();
    $this->CategoriasView = new CategoriasView();
  }
  function test($nombreCategoria){
    $idCategoria = $this->CategoriasModel->getCategoriaId($nombreCategoria[0]);
    $this->CategoriasView->test($idCategoria);
  }
}
?>
