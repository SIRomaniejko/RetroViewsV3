<?php
require_once("api.php");
require_once("../model/UsuariosModel.php");
class SecuredAPI extends Api{

    private $model;
    private $headers;
    function __construct(){   
        $this->headers = apache_request_headers();
        $this->model =  new UsuariosModel;
    }
    function getNivel(){
        if(isset($this->headers["user"]) && $this->headers["pass"]){
            $user = $this->headers["user"];
            $pass = $this->headers["pass"];
            $dbUser = $this->model->getUsuario($user);
            if(isset($dbUser)){
                if (password_verify($pass, $dbUser["pass"])){
                    return $dbUser['nivel'];
                }
            }
        }
        return 0;
    }
    function getSessionData(){
        session_start();
        if(isset($_SESSION['user']) && isset($_SESSION['pass']) && isset($_SESSION['nivel'])){
            return $this->json_response(array(
                'user' =>$_SESSION['user'],
                'pass' => $_SESSION['pass'],
                'nivel' => $_SESSION['nivel']
            ),200);
        }
        else{
            return $this->json_response(null, 404);
        }
    }
}