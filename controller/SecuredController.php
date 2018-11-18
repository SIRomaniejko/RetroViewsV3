<?php
class SecuredController{
  function __construct($nivelMinimo){
    session_start();
    if(isset($_SESSION["nivel"]) && $_SESSION['nivel'] >= $nivelMinimo){
      if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 14400)) {
        $this->logout(); // destruye la sesión, y vuelve al login
      }
        $_SESSION['LAST_ACTIVITY'] = time(); // actualiza el último instante de actividad
    }else{
        header(LOGIN);
    }
  }
  function logout(){
    session_start();
    session_destroy();
    header(HOME);
  }
}
?>
