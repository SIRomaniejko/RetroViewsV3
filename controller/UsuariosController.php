<?php
require_once 'model/UsuariosModel.php';
require_once 'view/UsuariosView.php';
require_once 'SecuredController.php';

class UsuariosController extends SecuredController{
  private $model;
  private $view;
  function __construct(){
    parent::__construct(2);
    $this->model = new UsuariosModel();
    $this->view = new UsuariosView();
  }
  function getUsuarios(){
    $usuarios = $this->model->getUsuarios();
    $this->view->mostrarUsuarios($usuarios);
  }
  function eliminarUsuario(){
    $usuario = $this->model->getUsuario($_POST['user']);
    if(isset($usuario)){
      $this->model->borrarUsuario($_POST['user']);
    }
    header(USERS);
  }
  function editarUsuario(){
    $usuario = $this->model->getUsuario($_POST['user']);
    if(isset($usuario)){
      $this->model->updateUsuario($_POST['user'],$_POST['nivel']);
    }
    header(USERS);
  }
}