<?php
class Conexion{
    static function Connect(){
        return new PDO('mysql:host=localhost;'
        .'dbname=retro_views;charset=utf8'
        , 'root', '');
    }
}
