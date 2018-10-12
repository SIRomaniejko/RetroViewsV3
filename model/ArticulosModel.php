<?php
  class ArticulosModel
  {
    private $db;

    function __construct()
    {
      $this->db = $this->Connect();
    }

    function Connect(){
      return new PDO('mysql:host=localhost;'
      .'dbname=retro_views;charset=utf8'
      , 'root', '');
    }

    function getReviews(){

      $sentencia = $this->db->prepare("SELECT * FROM review");
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

    function getTituloReviews(){
      $sentencia = $this->db->prepare("SELECT titulo FROM review");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function subirReview($id_categoria, $titulo, $contenido, $resumen, $portada){
      $sentencia = $this->db->prepare("INSERT INTO review(id_categoria, titulo, contenido, resumen, portada) VALUES(?, ?, ?, ?, ?)");
      echo($titulo);
      echo($contenido);
      echo($resumen);
      echo($portada);
      $sentencia->execute(array($id_categoria, $titulo, $contenido, $resumen, $portada));
    }
  }
?>
