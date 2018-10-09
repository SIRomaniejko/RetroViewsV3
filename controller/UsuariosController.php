<?php
    require_once('model/UsuariosModel.php');
    require_once('view/UsuariosView.php');
    class UsuariosController{
        private $UsuariosModel;
        private $UsuariosView;

        function __construct(){
            $this->UsuariosModel = new UsuariosModel();
            $this->UsuariosView = new UsuariosView();
        }

        function mostrarLogin(){
            $this->UsuariosView->login();
        }
}
 ?>
