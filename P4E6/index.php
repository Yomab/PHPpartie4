<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>exercice6Partie4</title>
    </head>
    <body>
          <?php
          function welcome ( $name = 'Mabire', $firstname = 'Yoan', $age = ' 41'){
              echo 'bonjour mr ' . $name . ' votre prénom est ' . $firstname .' et vous avez' . $age . 'ans'; 
          }
           welcome();
           ?>
    </body>
</html>