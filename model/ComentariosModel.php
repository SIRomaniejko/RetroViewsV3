<?php
require_once "Conexion.php";
class ComentariosModel{
	private $db;
	function __construct(){
		$this->db = $this->Connect();
	}
	function Connect(){
		return Conexion::Connect();
	}
	function insertComentario($review,$user,$puntaje,$contenido){
    $sentencia = $this->db->prepare(
      "INSERT INTO comentario(id_review,user,puntaje,contenido_comentario) VALUES(?,?,?,?)");
    $sentencia->execute(array($review,$user,$puntaje,$contenido));
	}
	function getComentario($id){
		$sentencia = $this->db->prepare("SELECT * FROM comentario WHERE id_comentario = ?");
		$sentencia->execute(array($id));
		return $sentencia->fetch(PDO::FETCH_ASSOC);
	}
  function getComentarios($id){
    $sentencia = $this->db->prepare("SELECT * FROM comentario WHERE id_review = ?");
    $sentencia->execute(array($id));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
	}
	function deleteComentario($id){
		$sentencia = $this->getComentario($id);
		if(isset($sentencia)){
			$sentencia = $this->db->prepare("DELETE FROM comentario WHERE id_comentario = ?");
			$sentencia->execute(array($id));
		}
	}
}