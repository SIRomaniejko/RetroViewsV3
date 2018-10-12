<?php
    require_once ('libs/Smarty.class.php');
    class UsuariosView{
        private $smarty;
        function __construct() {
            $this->smarty = new Smarty();
            $this->smarty->assign('root', ROOT);
        }
        function login(){
            $this->smarty->display('templates/login.tpl');
        }
    }
?>