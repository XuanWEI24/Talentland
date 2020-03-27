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
    <title>S'inscrire</title>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
	  .inputEmail{ width: 3%;
	  }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body>
        <nav class="navbar navbar-dark bg-dark">
          <a class="navbar-brand" href="Accueil.html"> Talents Land </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
              
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Accueil <span class="sr-only">(lien courant)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Besoins</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Talents</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Plus
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Ateliers</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Projet associatif</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">XXX</a>
                </div>
              </li>
            </ul>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Login
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Mon espace</a>
                <a class="dropdown-item" href="#">Mes demandes</a>
                <a class="dropdown-item" href="#">Mes offres</a>
                <a class="dropdown-item" href="#">Déconnecter</a>
              </div>
            </div>
          </div>
        </nav>
		
		<!--------------------------------------------------------------------------------------------------------------------------------------------->
        <div class="jumbotron">
          <div class="container">
			
			<h1> CREER UN COMPTE </h1>
			
                        <form method = 'POST' action="AjouterUtilisateurs.php">
			  <div class="form-row">
				<div class="form-group col-md-6">
				  <label for="inputEmail4">Nom</label>
				  <input type="text" class="form-control" name="nom" id="inputEmail4" maxlength="40" required>
				</div>
				<div class="form-group col-md-6">
				  <label for="inputPassword4" >Prénom</label>
				  <input type="text" class="form-control" name="prenom" id="inputPassword4" maxlength="25" required>
				</div>
			  </div>
			  <div class="form-group">
				<label for="inputAddress">Email (Pro/Perso)</label>
				<input type="text" class="form-control" name="email" id="inputAddress" placeholder="@gmail.com" maxlength="255" required>
			  </div>
			  <div class="form-group">
				<div class="form-check">
				  <input class="form-check-input" type="checkbox" id="gridCheck" checked>
				  <label class="form-check-label" for="gridCheck">
					Je m'engage à respecter la charte.
				  </label>
				</div>
			  </div>
			  <div class="form-group">
				<div class="form-check">
				  <input class="form-check-input" type="checkbox" name="anonyme"id="gridCheck" >
				  <label class="form-check-label" for="gridCheck">
					Apparaître anonymement.
				  </label>
				</div>
			  </div>
			  <div class="form-row">
				<div class="form-group col-md-6">
				  <label for="inputPassword1">Mot de Passe</label>
				  <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" maxlength="40" required>
				</div>                       
				<div class="form-group col-md-6">
				  <label for="inputPassword4">Confirmation de Mot de Passe </label>
				  <input type="password" class="form-control" name="password" id="exampleInputPassword1"  placeholder="Password Confirmation" maxlength="40" required>
				</div>
			  </div>
			  <div class="form-group">
			  <button type="submit" class="btn btn-primary">S'inscrire</button>
			  </div>
            </form>

          </div>
        </div>
          <footer>
            <p id="copyright"><em><small>copyright &#9400; Talents Land, CPAM Haute-Garonne, 2020. All rights reserved.</small></em></p>
          </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

