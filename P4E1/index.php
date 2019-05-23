<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>exercice1Partie4</title>
    </head>
    <body>
        <?php
 /*je declare ma fonction*/
function verif($chiffre) {
/*je l'initialise*/    
   if ($chiffre == 41) {
/*je lui donne une condition*/       
      return true;
   } else {
      return false;
   }
}
/*je lui demande de me retourner un message si 'true'*/
if (verif(41)) echo "je retourne true, parce que 41 est true!";
        ?>
</body>
</html>