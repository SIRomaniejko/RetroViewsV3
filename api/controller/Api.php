<?php

class Api{


  function __construct(){

  }

  public function json_response($data, $status) {
      header("Content-Type: application/json");
      header("HTTP/1.1 " . $status . " " . $this->_requestStatus($status));
      return json_encode($data);
  }

  private function _requestStatus($code){
     $status = array(
       200 => "OK",
       404 => "Not found",
       403 => "Forbidden",
       500 => "Internal Server Error"
     );
     return ($status[$code])? $status[$code] : $status[500];
   }
}
 ?>
