<?php
    class CategoriasModel{
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

        function getCategoriaId($categoriaNombre){
            $sentencia = $this->db->prepare("SELECT id_categoria FROM categoria WHERE nombre_categoria = ? LIMIT 1");
            $sentencia->execute(array($categoriaNombre));
            $regreso = $sentencia->fetch(PDO::FETCH_ASSOC);
            return $regreso['id_categoria'];
        }

    }
?>