<?php
  class UsuariosModel{
    private $db;

    function __construct(){
      $this->db = $this->Connect();
    }

    function Connect(){
      return new PDO('mysql:host=localhost;'
      .'dbname=retro_views;charset=utf8'
      , 'root', 'root');
    }

    function getUsuarios(){

      $sentencia = $this->db->prepare("SELECT * FROM usuario");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function getUsuario($user){
      $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE user = ? LIMIT 1");
      $sentencia->execute(array($user));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
    }
    function insertUsuario($user, $pass){
      
      $sentencia = $this->db->prepare("INSERT INTO usuario(user,pass) VALUES(?,?)");
      $sentencia->execute(array($user,$pass));
    }
  }
?>
