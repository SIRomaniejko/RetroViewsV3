<?php
require_once "Conexion.php";
class ArticulosModel{
  private $db;
  function __construct(){
    $this->db = $this->Connect();
  }
  function Connect(){
    return Conexion::Connect();
  }
  function getReviews(){
    $sentencia = $this->db->prepare("SELECT * FROM review ORDER BY id_review DESC");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function getReview($id){
    $sentencia = $this->db->prepare("SELECT * FROM review WHERE id_review = ?");
    $sentencia->execute(array($id));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }
  function getReviewPorTitulo($titulo){
    $sentencia = $this->db->prepare("SELECT * FROM review WHERE titulo = ?");
    $sentencia->execute(array($titulo));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }
  function getReviewsPorIdCategoria($idCategoria){
    $sentencia = $this->db->prepare("SELECT * FROM review WHERE id_categoria = ? ORDER BY id_review DESC");
    $sentencia->execute(array($idCategoria));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function getTituloReviews(){
    $sentencia = $this->db->prepare("SELECT titulo FROM review");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function subirReview($id_categoria, $titulo, $contenido, $resumen, $portada){
    $sentencia = $this->db->prepare(
      "INSERT INTO review(id_categoria, titulo, contenido, resumen, portada) VALUES(?, ?, ?, ?, ?)");
    $sentencia->execute(array($id_categoria, $titulo, $contenido, $resumen, $portada));
  }
  function getTitulosMenosElDeId($id_review){
    $sentencia = $this->db->prepare("SELECT titulo FROM review WHERE id_review != ?");
    $sentencia->execute(array($id_review));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function updateReview($id_review, $id_categoria, $titulo, $contenido, $resumen, $portada){
    $sentencia = $this->db->prepare(
      "UPDATE review SET id_categoria = ?,titulo = ?,contenido = ?,resumen = ?,portada = ? WHERE id_review = ?");
    $sentencia->execute(array($id_categoria, $titulo, $contenido, $resumen, $portada, $id_review));
    return $this->getReview($id_review);
  }
  function eliminarReview($titulo){
    $sentencia = $this->db->prepare("DELETE FROM review WHERE titulo = ?");
    $sentencia->execute(array($titulo));
  }
  function eliminarReviewPorId($id){
    $fila = $this->getReview($id);
    if($fila != null){
      $sentencia = $this->db->prepare("DELETE FROM review WHERE id_review = ?");
      $sentencia->execute(array($id));
    }
    return $fila;
  }
}
?>