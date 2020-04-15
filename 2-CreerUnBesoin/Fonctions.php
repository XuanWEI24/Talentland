<?php
        // 2. Connexion à la base de donnée ( enlever après ) & Insérer un besoin 
            $session = mysqli_connect('localhost', 'root', '');
            if ($session == NULL) 
            {
            echo ("<p>Echec de connection</p>");
            }
            else
            {
            if (mysqli_select_db($session, 'quaidessavoirfaire') == TRUE) { 
            echo("Votre besoin est bien pris en compte"); // envoyer un mail
            }
            else
            {
            echo ("Cette base n'existe pas");
            }
            }          
?>

