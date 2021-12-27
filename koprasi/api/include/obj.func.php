<?php
 
if (!function_exists('session_is_registered')) {
  function session_is_registered($cName){
    return isset($_SESSION[$cName]) ;
  } 
}

if (!function_exists('session_register')) {
  function session_register($cName){
    $_SESSION[$cName] = "" ;
  }
}
 
  function snow(){  
    return date("Y-m-d H:i:s",time()) ;
  }
   
?>
