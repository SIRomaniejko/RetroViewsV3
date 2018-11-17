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
			$data = $this->model->getComentarios($id);
		}else{
			return $this->json_response(null, 406);
		}
    if(isset($data)){
      return $this->json_response($data, 200);
    }else{
      return $this->json_response(null, 404);
    }
	}
}