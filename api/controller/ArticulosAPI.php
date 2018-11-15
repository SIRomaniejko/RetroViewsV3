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
}
 ?>