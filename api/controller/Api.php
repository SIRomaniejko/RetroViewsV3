<?php
class Api{

  private $data;
  function __construct(){
    $this->data = file_get_contents("php://input");
  }
  function getData(){
    return json_decode($this->data); 
  }

  public function json_response($data, $status) {
    if(isset($_GET['orden'])){
      $data = $this->ordenGet($data, $_GET['orden']);
    }
    header("Content-Type: application/json");
    header("HTTP/1.1 " . $status . " " . $this->_requestStatus($status));
    return json_encode($data);
  }

  private function _requestStatus($code){
     $status = array(
      200 => "OK",
      404 => "Not found",
      403 => "Forbidden",
      406 => "Not acceptable",
      500 => "Internal Server Error"
    );
    return ($status[$code])? $status[$code] : $status[500];
  }

  protected function filtroGet($datos, $filtro){
    $regreso = array();
    if(isset($_GET[$filtro])){
      foreach ($datos as $key => $value) {
        if(isset($value[$filtro]) && $value[$filtro]  == $_GET[$filtro]){
          $regreso[] = $value;
        }
      }
    }
    return $regreso;
  }
  private $filtro;
  
  private function ordenGet($arr, $filtro){
    $size = count($arr)-1;
    for ($i=0; $i<$size; $i++) {
        for ($j=0; $j<$size-$i; $j++) {
            $k = $j+1;
            if(isset($_GET['tipo_orden']) && $_GET['tipo_orden'] == "desc"){
              if ($arr[$k][$filtro] > $arr[$j][$filtro]) {
                // Swap elements at indices: $j, $k
                list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
              }
            }
            else{
              if ($arr[$k][$filtro] < $arr[$j][$filtro]) {
                // Swap elements at indices: $j, $k
                list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
              }
            }
            
        }
    }
    return $arr;
  }
}
?>
