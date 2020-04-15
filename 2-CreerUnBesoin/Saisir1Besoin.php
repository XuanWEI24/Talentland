<?php

$Categorie = $_POST['categorie'];
$Titre = $_POST['pro']." ".$_POST['perso']." : ".$_POST['titre'];
$Description = $_POST['description'];
$DateButoire = $_POST['datebutoire'];
$Type = $_POST['pro']." ".$_POST['perso'];
$DatePublicationB = date("d/m/yy");

require_once('Fonctions.php');
$stmt = mysqli_prepare($session, "INSERT INTO besoins(TitreB,DescriptionB,DateButoireB,DatePublicationB,TypeB,CodeC) VALUES(?,?,?,?,?,?)");
mysqli_stmt_bind_param($stmt, 'sssssi', $Titre, $Description, $DateButoire, $DatePublicationB, $Type, $Categorie);
mysqli_stmt_execute($stmt); 
?>
