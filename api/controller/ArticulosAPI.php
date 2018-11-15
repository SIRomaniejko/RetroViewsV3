<?php
require_once "Api.php";
require_once "../model/ArticulosModel.php";
class ArticulosAPI extends Api{
  private $model;
  function __construct(){
    parent::__construct();
    $this->model = new ArticulosModel();
  }
  function GetArticulos($param = null){
    if(isset($param)){
      $id_tarea = $param[0];
      $data = $this->model->GetReview($id_tarea);
    }else{
      $data = $this->model->GetReviews();
    }
      if(isset($data)){
        return $this->json_response($data, 200);
      }else{
        return $this->json_response(null, 404);
      }
  }
  function deleteArticulo($param = null){
    if($param == null){
      return $this->json_response(null, 404);
    }else{
      $id = $param[0];
      $data = $this->model->eliminarReviewPorId($id);
    }
    if(isset($data)){
      return $this->json_response($data, 200);
    }else{
      return $this->json_response(null, 404);
    }
  }

  function updateArticulo($param = null){
    if($param == null){
      return $this->json_response(null, 404);
    }else{
      $nuevo = $this->getData();
      if(isset($nuevo->id_categoria) && isset($nuevo->titulo) && isset($nuevo->contenido) && isset($nuevo->resumen) && isset($nuevo->portada)){
        $data = $this->model->updateReview($param[0], $nuevo->id_categoria, $nuevo->titulo, $nuevo->contenido, $nuevo->resumen, $nuevo->portada);
      }else{
        return $this->json_response(null, 406);
      }
    }
    if(isset($data)){
      return $this->json_response($data, 200);
    }else{
      return $this->json_response(null, 404);
    }
  }
}
 ?>