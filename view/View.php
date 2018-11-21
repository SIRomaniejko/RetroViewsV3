<?php
require_once('libs/Smarty.class.php');
class View{
    protected $smarty;
    function __construct(){
        if(!isset($_SESSION)){
            session_start();
        }
        $this->smarty = new Smarty();
        $this->smarty->assign('root', ROOT);
        if(isset($_SESSION['nivel'])){
            $this->smarty->assign('nivel', $_SESSION['nivel']);
            $this->smarty->assign('user', $_SESSION['user']);
        }else{
            $this->smarty->assign('nivel', 0);
            $this->smarty->assign('user', "");
        }
    }
}