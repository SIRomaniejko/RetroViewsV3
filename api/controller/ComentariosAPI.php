<?php
require_once "Api.php";
require_once "../model/ComentariosModel.php";
class ComentariosAPI extends Api{
	private $model;
	function __construct(){
		parent::__construct();
		$this->model = new ComentariosModel();
	}
	function getComentarios($param = null){
		if(isset($param)){
			$id = $param[0];
			$data = $this->model->getComentario($id);
		}else{
			$data = $this->model->getComentarios();
		}
		if(isset($_GET['id_review'])){
      $data = $this->filtroGet($data, 'id_review');
    }
    if(isset($data)){
      return $this->json_response($data, 200);
    }else{
      return $this->json_response(null, 404);
    }
	}
	function insertComentario($param = null){
		$json = $this->getData();
		if(isset($json->id_review) && isset($json->user) && isset($json->puntaje) && isset($json->contenido_comentario)){
			$data = $this->model->insertComentario($json->id_review,$json->user,$json->puntaje,$json->contenido_comentario);
		}
		if(isset($data)){
      return $this->json_response($data, 200);
    }else{
      return $this->json_response(null, 404);
    }
	}
	function deleteComentario($param = null){
		if(isset($param)){
			$data = $this->model->deleteComentario($param[0]);
		}
		if(isset($data)){
      return $this->json_response($data, 200);
    }else{
      return $this->json_response(null, 404);
    }
	}
}