<?php
require_once 'model/UsuariosModel.php';
require_once 'view/UsuariosView.php';
require_once 'SecuredController.php';

class UsuariosController extends SecuredController{
  private $UsuariosModel;
  private $UsuariosView;

  function __construct(){
    parent::__construct();
    $this->UsuariosModel = new UsuariosModel();
    $this->UsuariosView = new UsuariosView();
  }

  function mostrarLogin(){
    $this->UsuariosView->login();
  }
}
?>
