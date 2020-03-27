<?php
       $Nom = $_POST['nom'];
       $Prenom = $_POST['prenom'];
       $Email = $_POST['email'];
       $Anonyme = $_POST['anonyme'];
       $Password = $_POST['password'];
       
       require_once('Fonctions.php');
       
       if (EmailExiste($session,$Email)== false)
       {
       $stmt = mysqli_prepare($session, "INSERT INTO Utilisateurs(NomU,PrenomU, Email,MotDePasse,Anonyme) VALUES(?,?,?,?,?)");
       mysqli_stmt_bind_param($stmt, 'ssssi', $Nom,$Prenom,$Email,$Password, $Anonyme);
       mysqli_stmt_execute($stmt);}
       else
       {echo ("Cet email est deja existe");};
       
                   
        // Vérification de l'existant de l'utilisateur    
    function EmailExiste($session, $Email) {
    $emailSQL = "SELECT * FROM Utilisateurs WHERE Email = '$Email'";
    $result = mysqli_query($session, $emailSQL);
    if ($result == false) {
        die("error function EmailExiste");
    } else {
        if (mysqli_num_rows($result)!=0){
            return true;         
        }else {
            return false;
    }
  }
}
?>

