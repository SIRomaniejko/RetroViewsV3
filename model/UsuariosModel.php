<?php
  class UsuariosModel{
    private $db;

    function __construct(){
      $this->db = $this->Connect();
    }

    function Connect(){
      return new PDO('mysql:host=localhost;'
      .'dbname=retro_views;charset=utf8'
      , 'root', '');
    }

    function getUsuarios(){

      $sentencia = $this->db->prepare("SELECT * FROM usuario");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function getUsuario($id){
      $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE id_user = ?");
      $sentencia->execute(array($id));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
    }
  }
?>
