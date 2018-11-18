<?php
require_once('libs/Smarty.class.php');
class View{
    protected $smarty;
    function __construct(){
        session_start();
        $this->smarty = new Smarty();
        $this->smarty->assign('root', ROOT);
        if(isset($_SESSION['nivel'])){
            $this->smarty->assign('nivel', $_SESSION['nivel']);
        }else{
            $this->smarty->assign('nivel', 0);
        }
    }
}