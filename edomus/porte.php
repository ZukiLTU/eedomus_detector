<?php

   include_once 'constantes.inc.php';
   
   function RetourBox($id, $val, $action)
   {
       
    $url = "http://YOUR_IP/api/get?";
    $url .= "&api_user=" . API_USER;
    $url .= "&api_secret=" . API_SECRET;
    $url.= "&action=".$action;    
    $url .= "&periph_id=" . $id;
    
    $result = file_get_contents($url);
 
    if (strpos($result, '"success": 1') == false)
     {
       echo "Error : [".$result."]";
     }
    else
     {
       $result_utf8 = utf8_encode($result) ;
       $tab = json_decode($result_utf8, true ) ; // true transforme $result_utf8 en un tableau
       $retour = $tab['body'][$val];
      
       return $retour ;
     }
   }
?>
