<?php

   include_once 'constantes.inc.php';
   
   function RetourBox($id, $val, $action)
   {
       
    // $url = "http://10.129.137.184/api/get?api_user=p5o5jy&api_secret=hOfMt9jBKB8kz3UE&action=periph.value&periph_id=2188679";

    $url = "http://10.129.137.184/api/get?";
    $url .= "&api_user=" . API_USER;
    $url .= "&api_secret=" . API_SECRET;
    $url.= "&action=".$action;    
    $url .= "&periph_id=" . $id;
    
    $result = file_get_contents($url);
 
    if (strpos($result, '"success": 1') == false)
     {
       echo "Une erreur est survenue : [".$result."]";
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
