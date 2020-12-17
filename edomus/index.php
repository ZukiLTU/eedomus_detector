<html>
    <head>
        <title>Edomus</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <h2>Informations :</h2>
        
        <?php
          $id = 2188679;
          $val = 'last_value';
          $action = "periph.value";

          $ouverture = RetourBox($id, $val, $action);
        ?>
        <p>Etat porte : <?php echo $ouverture ?></p>
    </body>
</html>