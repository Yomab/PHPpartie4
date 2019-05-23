<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>exercice3Partie4</title>
    </head>
    <body>
        <?php
        /* je crée ma fonction */

        function Chaine($chaine = 'bonjour ', $chaine2 = 'vous')  {
            /* je lui donne un ordre */
            echo $chaine ++ .$chaine2;
        }

        /* je rappelle ma fonction pour qu'elle s'affiche */
        Chaine();
        ?>
    </body>
</html>