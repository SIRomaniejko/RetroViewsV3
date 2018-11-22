<?php
require_once "Api.php";
require_once "../model/CategoriasModel.php";
class CategoriasAPI extends Api{
  private $model;
  function __construct(){
    parent::__construct();
    $this->model = new CategoriasModel();
  }
  function getCategorias($param = null){
    if(isset($param)){
      $id = $param[0];
      $data = $this->model->getCategoria($id);
    }else{
      $data = $this->model->getCategorias();
    }
    if(isset($data)){
      return $this->json_response($data,200);
    }else{
      return $this->json_response(null,404);
    }
  }
  function deleteCategoria($param = null){
    if(!$this->tienePermiso(2)){
      return $this->json_response(null, 401);
    }
    if(isset($param)){
      $id = $param[0];
      $data = $this->model->eliminarCategoria($id);
    }else{
      return $this->json_response(null, 404);
    }
    if(isset($data)){
      return $this->json_response($data, 200);
    }else{
      return $this->json_response(null, 404);
    }
  }
  function updateCategoria($param = null){
    if(!$this->tienePermiso(2)){
      return $this->json_response(null, 401);
    }
    if(isset($param)){
      $nuevo = $this->getData();
      if(isset($nuevo->nombre_categoria)){
        $data = $this->model->updateCategoria($param[0],$nuevo->nombre_categoria);
      }else{
        return $this->json_response(null, 406);
      }
    }else{
      return $this->json_response(null, 404);
    }
    if(isset($data)){
      return $this->json_response($data, 200);
    }else{
      return $this->json_response(null, 404);
    }
  }
  function insertCategoria($param = null){
    if(!$this->tienePermiso(2)){
      return $this->json_response(null, 401);
    }
    $json = $this->getData();
    $data = $this->model->crearCategoria($json->nombre_categoria);
    if(isset($data)){
      return $this->json_response($data, 200);
    }else{
      return $this->json_response(null, 404);
    }
  }
}