<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
​
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
​	<link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Quai des savoir-faire</title>

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
        <nav class="navbar sticky-top navbar-dark bg-dark">
          <a class="navbar-brand" href="Accueil.php">Quai des savoir-faire</a>

        <div class="dropdown">
          <?php
            require_once('Fonctions.php');
          ?>
             
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="Login.php">Se connecter</a>
            <a class="dropdown-item" href="Inscription.php">S'inscrire</a>
          <!--  <a class="dropdown-item" href="#">Mes demandes</a>
            <a class="dropdown-item" href="#">Mes offres</a>  -->
            <a class="dropdown-item" href="Deconnecter.php">Déconnecter</a>
          </div>
        </div>

	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>

	      <div class="collapse navbar-collapse" id="navbarSupportedContent">
	        <ul class="navbar-nav mr-auto">
	          <li class="nav-item">
	            <a class="nav-link" href="Besoin.php">Besoins</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="Talent.php">Talents</a>
	          </li>
                  <li class="nav-item">
                      <a class="nav-link" href="AbonnerCategorie.php">Catégories</a>
	          </li>
	          <!--<li class="nav-item">
	            <a class="nav-link" href="#">Cours et Forum</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="#">Projet Associatif</a>
	          </li
	          <li class="nav-item">
	            <a class="nav-link" href="#">Contacts</a>
	          </li>-->
                  <li class="nav-item">
                      <a class="nav-link" href="ConditionGeneraleUtilisation.php">Mentions Légales</a>
	          </li>
	        </ul>
	      </div>
        </nav>
<!--------------------------------------------------------------------------------------------------------------------------------------------->
        <div class="jumbotron">
          <div class="container">

         
              <form class="form-signin" method = 'POST' action="IdentificationUtilisateur.php">
	
			  <center><h1 class="h3 mb-3 font-weight-normal">Login</h1><center>
			  <label for="inputEmail" class="sr-only" >Email address</label>
			  <center><input type="email" id="inputEmail" name="email" class="form-control" placeholder="Votre adresse mail" required autofocus style="width:40%"></center>
			  <label for="inputPassword" class="sr-only">Password</label>
			  <center><input type="password" id="inputPassword" name="password" class="form-control" placeholder="votre mot de passe" required style="width:40%"></center>
				<div class="checkbox mb-3">
					<label>
					  <input type="checkbox" value="remember-me"> Remember me
                                          <p> <a href="Inscription.php" target="_blank"> S'inscrire <a> </p>
					</label>
				</div>
			  <button class="btn btn-lg btn-dark btn-block" type="submit" style="width:40%">Se connecter</button>
			</form>
          </div>
        </div>
          <footer>
            <p id="copyright"><em><small>copyright &#9400; Quai des savoir-faire, CPAM Haute-Garonne, 2020. All rights reserved.</small></em></p>
          </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

