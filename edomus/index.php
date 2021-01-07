<html>
    <head>
        <title>Edomus</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <style>
            html, body{
                margin: 0;
                padding: 0;
                height: 100%;
            }
            
            body{
                font-family: 'Consolas';
                text-align: center;
            }
            
            p{
                margin-left: 44vw;
                background: orange;
                padding: 8px 8px 8px 8px;
                width: 10%;
                text-align: center;
            }
        </style>
        <h2>Informations :</h2>
        
        <?php
        header("refresh: 1");
        include_once 'porte.php';
        
          $id_porte = DOOR_ID;
          $id_mouv = CAPT_ID;
          $val = 'last_value';
          $action = "periph.value";
          
          $ouverture = RetourBox($id_porte, $val, $action);
          $mouv = RetourMouvement($id_mouv, $val, $action);
        ?>
        <p>Etat porte : <?php echo $ouverture ?></p>
        
        <p>Etat détecteur de mouvement : <?php echo $mouv ?></p>
    </body>
</html>
