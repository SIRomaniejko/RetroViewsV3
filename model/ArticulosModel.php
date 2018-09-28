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

  function GetReviews(){

    $sentencia = $this->db->prepare("SELECT * FROM review");
    $sentencia->execute();
    return $sentencia-fetchAll(PDO::FETCH_ASSOC);
  }
 ?>
