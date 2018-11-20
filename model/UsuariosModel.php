<?php
require_once "Model.php";
class UsuariosModel extends Model{
  private $db;
  function __construct(){
    $this->db = $this->Connect();
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
  function insertUsuario($user,$pass,$nivel){
    $sentencia = $this->db->prepare("INSERT INTO usuario(user,pass,nivel) VALUES(?,?,?)");
    $sentencia->execute(array($user,$pass,$nivel));
    return $this->getUsuario($user);
  }
  function borrarUsuario($user){
    $nuevo = $this->getUsuario($user);
    if(isset($nuevo)){
      $sentencia = $this->db->prepare("DELETE FROM usuario WHERE user = ?");
      $sentencia->execute(array($user));
    }
    return $nuevo;
  }
  function updateUsuario($user,$nivel){
    $sentencia = $this->db->prepare("UPDATE usuario SET nivel = ? WHERE user = ?");
    $sentencia->execute(array($nivel,$user));
    return $this->getUsuario($user);
  }
}