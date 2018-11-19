<?php
require_once 'libs/Smarty.class.php';
require_once 'View.php';
class UsuariosView extends View{
    function __construct() {
        parent::__construct();
    }
    function mostrarUsuarios($usuarios){
        $this->smarty->assign('usuarios',$usuarios);
        $this->smarty->display('templates/usuarios.tpl');
    }
}