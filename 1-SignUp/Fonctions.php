<?php
        // 1. Connexion à la base de donnée
        header('Content-Type: text/html; charset=latin1_swedich_ci');
        
        $nomlogin = '21509053';
        $nompasswd = 'Q02MI0';
        $nombase = 'db_21509053';

        $session = mysqli_connect('localhost', $nomlogin, $nompasswd ); 

        if ($session == NULL) // Test de connexion réussie
          {
                  echo ("<p>Echec de connection</p>");
          } 
        else 
         {
                // Sélection de la base de donnée
                 if (mysqli_select_db($session, $nombase) == TRUE) { 
                            //echo ("Connection Réussite</br>");
            }
                else 
             {
                            echo ("Cette base n'existe pas</br>");
                    }  
         }

?>
