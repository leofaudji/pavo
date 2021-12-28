<?php
  require_once "./include/df.php" ; 
  require_once "./include/obj.php" ; 
  $basename_api = BASENAME_API ; 
  $path = $_SERVER['PATH_INFO'] ;
  $vapath = explode("/",$path) ;
  //print_r($vapath);
  if($_SERVER['REQUEST_METHOD'] == "GET" || $_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == "DELETE"){
    $endpoint = $vapath[1] ;
    switch($endpoint){ 
      case $basename_api . "/" : http_response_code(200) ; print("restricted access"); break ;
      case "akuntansi"  : require_once "./class/akuntansi/index.php" ; break ; 
      case "customer"   : require_once "./class/customer/index.php" ; break ; 
      case "deposito"   : require_once "./class/deposito/index.php" ; break ; 
      case "general"    : require_once "./class/general/index.php" ; break ; 
      case "kredit"     : require_once "./class/kredit/index.php" ; break ;  
      case "system"     : require_once "./class/system/index.php" ; break ; 
      case "tabungan"   : require_once "./class/tabungan/index.php" ; break ;
      default : http_response_code(ERROR_NOT_FOUND); print(ERROR_NOT_FOUND . " not found."); break;               
    }
  }else{
    http_response_code(ERROR_METHOD_NOT_ALLOWED); print(ERROR_METHOD_NOT_ALLOWED . " method not allowed.");
  }

?>