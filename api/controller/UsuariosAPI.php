<?php
require_once "Api.php";
require_once "../model/UsuariosModel.php";
class UsuariosAPI extends Api{
  private $model;
  function __construct(){
    parent::__construct();
    $this->model = new UsuariosModel();
  }
  function getUsuarios($param = null){
    if(isset($param)){
      $id = $param[0];
      $data = $this->model->getUsuario($id);
    }else{
      $data = $this->model->getUsuarios();
    }
    if(isset($data)){
      return $this->json_response($data, 200);
    }else{
      return $this->json_response(null, 404);
    }
  }
  function deleteUsuario($param = null){
		$nuevo = $this->getData();
    if(isset($nuevo->user)){
      $data = $this->model->borrarUsuario($nuevo->user);
		}else{
      return $this->json_response(null, 406);
    }
    if(isset($data)){
      return $this->json_response($data, 200);
    }else{
      return $this->json_response(null, 404);
    }
  }
  function updateUsuario($param = null){
		$nuevo = $this->getData();
		if(isset($nuevo->user) && isset($nuevo->nivel)){
			$data = $this->model->updateUsuario($nuevo->user,$nuevo->nivel);
		}else{
			return $this->json_response(null, 406);
		}
    if(isset($data)){
      return $this->json_response($data, 200);
    }else{
      return $this->json_response(null, 404);
    }
  }
  function insertUsuario($param = null){
    $json = $this->getData();
    $data = $this->model->insertUsuario($json->user,$json->pass,$json->nivel);
    if(isset($data)){
      return $this->json_response($data, 200);
    }else{
      return $this->json_response(null, 404);
    }
  }
}
?>