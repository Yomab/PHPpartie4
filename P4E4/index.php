<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>exercice4Partie4</title>
    </head>
    <body>
        <?php
        function compare($number1 = 75 , $number2 = 56){
           
          if ($number1 > $number2) {
           echo 'le nombre 1 est plus grand';
          }elseif
           ($number1 < $number2){
            echo 'le nombre 1 est plus petit';
          }elseif  
           ($number1 == $number2){
           echo 'les deux nombres sont identiques';
          }
        }
         compare();
        
          ?>
    </body>
</html>