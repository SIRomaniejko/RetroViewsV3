<?php
require_once  "./view/LoginView.php";
require_once  "./model/UsuariosModel.php";

class LoginController{
  private $view;
  private $model;


  function __construct(){
    $this->view = new LoginView();
    $this->model = new UsuariosModel();
  }

  function login(){
    // No hagas esto
    // $usuarios = $this->model->getUsuarios();
    $this->view->mostrarLogin();
  }

  function logout(){
    session_start();
    session_destroy();
    header(HOME);
  }

  function registrarse(){
    $this->view->mostrarRegistro();
  }

  function verificarLogin(){
      $user = $_POST["user"];
      $pass = $_POST["pass"];
      $dbUser = $this->model->getUsuario($user);

      if(isset($dbUser)){
          if (password_verify($pass, $dbUser["pass"])){
              session_start();
              $_SESSION["User"] = $user;
              // header(review);

              header(HOME);
          }else{
            $this->view->mostrarLogin("Contraseña incorrecta");
          }
      }else{
        //No existe el usuario
        $this->view->mostrarLogin("No existe el usuario");
      }
  }
  function registrarUsuario(){
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    $dbUser = $this->model->getUsuario($user);
    if($dbUser != null){
      $this->view->mostrarRegistro("El Usuario ya existe");
    }else{
      $this->model->insertUsuario($user, $hash);
      session_start();
      $_SESSION["User"] = $user;
      header(HOME);
    }
  }
}
?>
