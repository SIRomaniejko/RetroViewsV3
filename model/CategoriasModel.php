<?php
require_once 'Conexion.php';
class CategoriasModel{
    private $db;
    function __construct(){
        $this->db = $this->Connect();
    }
    function Connect(){
        return Conexion::Connect();
    }
    function getCategoriaId($categoriaNombre){
        $sentencia = $this->db->prepare("SELECT id_categoria FROM categoria WHERE nombre_categoria = ? LIMIT 1");
        $sentencia->execute(array($categoriaNombre));
        $regreso = $sentencia->fetch(PDO::FETCH_ASSOC);
        return $regreso['id_categoria'];
    }
    function getCategoria($idCategoria){
        $sentencia = $this->db->prepare("SELECT * FROM categoria WHERE id_categoria = ? LIMIT 1");
        $sentencia->execute(array($idCategoria));
        $regreso = $sentencia->fetch(PDO::FETCH_ASSOC);
        return $regreso;
    }
    function getIdCategoria($nombreCategoria){
        $sentencia = $this->db->prepare("SELECT id_categoria FROM categoria WHERE nombre_categoria = ? LIMIT 1");
        $sentencia->execute(array($nombreCategoria));
        $regreso = $sentencia->fetch(PDO::FETCH_ASSOC);
        return $regreso['id_categoria'];
    }
    function getCategorias(){
      $sentencia = $this->db->prepare("SELECT * FROM categoria ORDER BY id_categoria DESC");
      $sentencia->execute();
      $regreso = $sentencia->fetchAll(PDO::FETCH_ASSOC);
      return $regreso;
    }
    function updateCategoria($id,$nombreCategoria){
        $sentencia = $this->db->prepare("UPDATE categoria SET nombre_categoria = ? WHERE id_categoria = ?");
        $sentencia->execute(array($nombreCategoria, $id));
    }
    function crearCategoria($nombreCategoria){
      $sentencia = $this->db->prepare("INSERT INTO categoria(nombre_categoria) VALUES(?)");
      $sentencia->execute(array($nombreCategoria));
      return $this->getCategoria($this->getIdCategoria($nombreCategoria));
    }
    function getLastInsertId(){
        return $this->db->getLastInsertId();
    }
    function eliminarCategoria($idCategoria){
        $nuevo = $this->getCategoria($idCategoria);
        if($nuevo != null){
            $sentencia = $this->db->prepare("DELETE FROM categoria WHERE id_categoria = ?");
            $sentencia->execute(array($idCategoria));
        }
        return $nuevo;
    }
    function esNombreRepetido($nombreCategoria, $idCategoria = -1){
        $idEnBBDD = $this->getIdCategoria($nombreCategoria)[0];
        if($idEnBBDD != null && idEnBBDD != $idCategoria){
            return true;
        }
        else{
            return false;
        }
    }
}
?>