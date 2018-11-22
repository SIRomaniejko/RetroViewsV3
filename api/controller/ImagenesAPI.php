<?php
require_once "Api.php";
require_once "../model/ImagenesModel.php";
class ImagenesAPI extends Api{
  private $model;
  function __construct(){
    parent::__construct();
    $this->model = new ImagenesModel();
  }
  function getImagen($param = null){
    if(!isset($param[0])){
      return $this->json_response($this->model->getTodasImagenes(), 200);
    }
  }
  function deleteImagen($param = null){
    if(!$this->tienePermiso(2)){
      return $this->json_response(null, 401);
    }
    if(!isset($param[0])){
        return $this->json_response(null, 403);
    }else{
      $data = $this->model->deleteImagen($param[0], "../");
      if($data == null){
        return $this->json_response($data, 404);
      }
      else{
        return $this->json_response($data, 200);
      }
    }
  }
}