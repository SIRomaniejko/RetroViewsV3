<?php
require_once "Api.php";
require_once "../model/ArticulosModel.php";
class ArticulosAPI extends Api{
  private $model;
  function __construct(){
    parent::__construct();
    $this->model = new ArticulosModel();
  }
  function getArticulos($param = null){
    if(isset($param)){
      $id = $param[0];
      $data = $this->model->getReview($id);
    }else{
      $data = $this->model->getReviews();
    }
    if(isset($data)){
      return $this->json_response($data, 200);
    }else{
      return $this->json_response(null, 404);
    }
  }
  function deleteArticulo($param = null){
    if(isset($param)){
      $id = $param[0];
      $data = $this->model->eliminarReviewPorId($id);
    }else{
      return $this->json_response(null, 406);
    }
    if(isset($data)){
      return $this->json_response($data, 200);
    }else{
      return $this->json_response(null, 404);
    }
  }
  function updateArticulo($param = null){
    if(isset($param)){
      $nuevo = $this->getData();
      if(isset($nuevo->id_categoria) && isset($nuevo->titulo) && isset($nuevo->contenido) && isset($nuevo->resumen) && isset($nuevo->portada)){
        $data = $this->model->updateReview($param[0], $nuevo->id_categoria, $nuevo->titulo, $nuevo->contenido, $nuevo->resumen, $nuevo->portada);
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
  function insertArticulo($param = null){
    $json = $this->getData();
    $data = $this->model->subirReview($json->id_categoria,$json->titulo,$json->contenido,$json->resumen,$json->portada);
    if(isset($data)){
      return $this->json_response($data, 200);
    }else{
      return $this->json_response(null, 404);
    }
  }
}
?>