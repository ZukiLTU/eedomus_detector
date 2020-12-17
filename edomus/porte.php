<?php

   include_once 'constantes.inc.php';
   
   function RetourBox($id_porte, $val, $action)
   {
    $url = "http://YOUR_IP/api/get?";
    $url .= "&api_user=" . API_USER;
    $url .= "&api_secret=" . API_SECRET;
    $url.= "&action=".$action;    
    $url .= "&periph_id=" . $id_porte;
    
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
       
      switch($retour){
           case 0:
               $retour = "Fermé";
               break;
           case 100:
               $retour = "Ouvert";
               break;
       }
       return $retour ;
       
     }
   }
   
   function RetourMouvement($id_mouv, $val, $action)
   {

    $url = "http://YOUR_IP/api/get?";
    $url .= "&api_user=" . API_USER;
    $url .= "&api_secret=" . API_SECRET;
    $url.= "&action=".$action;    
    $url .= "&periph_id=" . $id_mouv;
    
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
      
       switch($retour){
           case 0:
               $retour = "Aucun mouvement";
               break;
           case 50:
               $retour = "Vibration";
               break;
           case 100:
               $retour = "Mouvement";
               break;
       }
       
       return $retour ;
     }
   }
?>
