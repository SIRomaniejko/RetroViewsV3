<?php
class Api{

  private $data;
  private $userModel;
  private $headers;

  function __construct(){
    $this->data = file_get_contents("php://input");
    $this->headers = apache_request_headers();
    $this->userModel =  new UsuariosModel;
  }
  private function getNivel(){
      if(isset($this->headers["user"]) && $this->headers["pass"]){
          $user = $this->headers["user"];
          $pass = $this->headers["pass"];
          $dbUser = $this->userModel->getUsuario($user);
          if(isset($dbUser)){
              if (password_verify($pass, $dbUser["pass"])){
                  return $dbUser['nivel'];
              }
          }
      }
      return 0;
  }

  function tienePermiso($nivel){
      return $this->getNivel() >= $nivel;
  }

  function getSessionData(){
      session_start();
      if(isset($_SESSION['user']) && isset($_SESSION['pass']) && isset($_SESSION['nivel'])){
          return $this->json_response(array(
              'user' =>$_SESSION['user'],
              'pass' => $_SESSION['pass'],
              'nivel' => $_SESSION['nivel']
          ),200);
      }
      else{
        return $this->json_response(array(
          'user' => null,
          'pass' => null,
          'nivel' => 0
        ),200);
      }
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
      401 => "Unauthorized", 
      403 => "Forbidden",
      404 => "Not found",
      406 => "Not acceptable",
      418 => "I'm a teapot",
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

  protected function ordenGet($arr, $filtro){
    //ordenamiento de burbuja
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
