<?php
class LoginView{
  private $Smarty;

  function __construct(){
    $this->Smarty = new Smarty();
  }

  function mostrarLogin($message = ''){
    $this->Smarty->assign('Message',$message); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->display('templates/login.tpl');
  }
  function mostrarRegistro($message = ''){
    $this->Smarty->assign('Message',$message);
    $this->Smarty->display('templates/registro.tpl');
  }
}

 ?>
