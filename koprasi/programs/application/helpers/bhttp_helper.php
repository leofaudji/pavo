<?php
   defined('BASEPATH') OR exit('No direct script access allowed') ;

  function http_post_api($data){
    if(is_array($data) and !empty($data)){ 
      $url = 'http://192.168.115.128/koprasi/api/master/agama/get';
      $ch = curl_init($url);
      $payload = json_encode($data); 
      curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
      curl_setopt($ch, CURLOPT_USERAGENT,"lintasan_koprasi_app_web_2021");
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $result = curl_exec($ch); 
      curl_close($ch);  
    }else{
      $result = json_encode(array("response_code"=>"00","message"=>"Data invalid.")) ;
    }
    return $result ;
  }

?>
