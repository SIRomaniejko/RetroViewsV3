<?php
require_once "Model.php";
class ComentariosModel extends Model{
	private $db;
	function __construct(){
		$this->db = $this->Connect();
	}
	function insertComentario($review,$user,$puntaje,$contenido){
    $sentencia = $this->db->prepare(
      "INSERT INTO comentario(id_review,user,puntaje,contenido_comentario) VALUES(?,?,?,?)");
		$sentencia->execute(array($review,$user,$puntaje,$contenido));
		return $this->getComentario($this->getLastInsertId());
	}
	function getLastInsertId(){
		return $this->db->lastInsertId();
	}
	function getComentario($id){
		$sentencia = $this->db->prepare("SELECT * FROM comentario WHERE id_comentario = ?");
		$sentencia->execute(array($id));
		return $sentencia->fetch(PDO::FETCH_ASSOC);
	}
  function getComentarios(){
    $sentencia = $this->db->prepare("SELECT * FROM comentario");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
	}
	function deleteComentario($id){
		$dato = $this->getComentario($id);
		if(isset($dato)){
			$sentencia = $this->db->prepare("DELETE FROM comentario WHERE id_comentario = ?");
			$sentencia->execute(array($id));
		}
		return $dato;
	}
}