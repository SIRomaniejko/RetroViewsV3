<?php
require_once('Conexion.php');
  class ImagenesModel{
    private $db;

    function __construct(){
      $this->db = $this->Connect();
    }

    function Connect(){
        return Conexion::Connect();
    }

    function getImagenes($id_review){
        $sentencia = $this->db->prepare("SELECT * FROM imagen WHERE id_review = ?");
        $sentencia->execute(array($id_review));
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function getTodasImagenes(){
        $sentencia = $this->db->prepare("SELECT * FROM imagen");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function getImagen($id_imagen){
        $sentencia = $this->db->prepare("SELECT * FROM imagen WHERE id_imagen = ?");
        $sentencia->execute(array($id_imagen));
        return $sentencia->fetch(PDO::FETCH_ASSOC);
    }

    function insertImagen($id_review, $imagen){
        $destino_final = 'images/' . uniqid() . '.'. $imagen['tipo'];
        move_uploaded_file($imagen['path'], $destino_final);
        $sentencia = $this->db->prepare("INSERT INTO imagen(id_review, direccion) VALUES(?,?)");
        $sentencia->execute(array($id_review, $destino_final));
    }

    function deleteImagen($id_imagen, $concatena = ""){
        $imagen = $this->getImagen($id_imagen);
        if($imagen != null){
            if(unlink($concatena.$imagen['direccion'])){
                $sentencia = $this->db->prepare("DELETE FROM imagen WHERE id_imagen = ?");
                $sentencia->execute(array($id_imagen));
                return $imagen;
            }
        }
        else{
            return null;
        }
    }

    function deleteImagenes($id_review, $concatena = ""){
        $imagenes = $this->getImagenes($id_review);
        $ok = true;
        foreach ($imagenes as $imagen) {
            $this->deleteImagen($imagen['id_imagen']);
        }
    }
}