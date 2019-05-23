<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>exercice7Partie4</title>
    </head>
    <body>
        <?php
        /* je crée ma fonction */

        function genderage ($gender = 'homme ', $age = '18') {
            if ($gender == true && $age >= 18 ){
                echo 'Vous êtes un homme et vous êtes majeur';
         }elseif ( $gender == true && $age < 18 ){
                echo 'Vous êtes un homme et vous êtes mineur';
         }elseif ( $gender ==false && $age >= 18 ) {
                echo 'Vous êtes une femme et vous êtes majeur';
         }elseif ( $gender == false && $age < 18){
                echo 'Vous êtes une femme et vous êtes mineur';
         }
        }
         genderage();
        ?>   


    </body>
</html>